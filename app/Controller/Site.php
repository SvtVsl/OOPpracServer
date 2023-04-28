<?php
namespace Controller;

use Model\Post;
use Model\User;
use Src\Request;
use Src\View;
use Src\Auth\Auth;

class Site
{

    //убрали index(Request $request)
    public function index(): string
    {
        // убрали Post::where('id', $request->id)->get();
        $posts = Post::all();
        return (new View())->render('site.post', ['posts' => $posts]);

    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'Fine']);
    }

    public function signup(Request $request): string
    {
        $validator = new Validator($request->all(), [
            'name' => ['required'],
            'login' => ['required', 'unique:users,login'],
            'password' => ['required']
        ], [
            'required' => 'Поле :field пусто',
            'unique' => 'Поле :field должно быть уникально'
        ]);

        if ($validator->fails()) {
//Данные не прошли валидацию
        }
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
