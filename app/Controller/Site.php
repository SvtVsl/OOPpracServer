<?php
namespace Controller;

use Model\Division;
use Model\Premise;
use Model\User;
use Src\Request;
use Src\Validator\Validator;
use Src\View;
use Src\Auth\Auth;
use Model\Type_division;

class Site
{

//поlразделение
    public function divisions(): string
    {
        $divisions = Division::all();
        $premises = Premise::all();
        return (new View())->render('site.divisions', ['divisions' => $divisions, 'premises' => $premises]);
    }

    public function add_divisions(): string
    {
        $divisions = Division::all();
        $premises = Premise::all();
        $type_division = Type_division::all();
        if ($request->method === 'POST' && Division::create($request->all())) {

            app()->route->redirect('/divisions');
        }
        return (new View())->render('site.divisions', ['divisions' => $divisions, 'premises' => $premises, 'type_division' => $type_division]);
    }


    public function hello(): string
    {
        return new View('site.hello', ['message' => 'Fine']);
    }
    public function index(): string
    {
        return new View('site.go', ['message' => 'Fine']);
    }

    //Пользователи

    public function user(Request $request): string
    {
        $users = User::all();
        return (new View())->render('site.user', ['users' => $users]);
    }

    public function update_user(Request $request)
    {
        $roles = Role::all();
        $users= User::where('id', $request->id)->first();
        if($request->method === 'POST') {
            $updateUsers = [
                'name' => $request->get('name'),
                'login' => $request->get('login'),
                'password' => $request->get('password'),
                'id_role' => $request->get('id_role'),
            ];
            $users->update($updateUsers);
            return app()->route->redirect('/users?id=' . $users->id);
        }
        return (new View())->render('site.update_user', ['users' => $users, 'roles' => $roles,]);
    }





        public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout(); //очищает ссесию
        app()->route->redirect('/hello');
    }



}
