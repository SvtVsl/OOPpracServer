<?php

namespace Controller;

use Model\Owner_premise;
use Model\Premise;
use Model\Division;
use Model\Type_division;
use Model\Type_premise;
use Src\Request;
use Src\View;


class PremiseView
{
    public function premises(Request $request): string
    {

        $premises = Premise::all();
        $division = Division::all();

        return (new View())->render('site.premises', ['premises' => $premises, 'division' => $division,]);
    }

    public function add_premises(Request $request): string
    {
        $division = Division::all();
        $premises = Premise::all();
        $owner_premises = Owner_premise::all();
        $type_divisions = Type_division::all();
        $type_premises = Type_premise::all();


        if ($request->method === 'POST' && Premise::create($request->all())) {
            app()->route->redirect('/premises');
        }
        return (new View())->render('site.add_premises', ['premises' => $premises, 'division' => $division,
            'owner_premises' => $owner_premises, 'type_divisions' => $type_divisions, 'type_premises' => $type_premises]);
    }
}