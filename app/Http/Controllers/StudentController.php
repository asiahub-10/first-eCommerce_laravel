<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {

//        return 'Hello from controller';
//        return view('home');



        $name = "Robin Hood Panday";
        $age = "70";

//        return view('home', compact('name', 'age'));

//        return view('home')
//            ->with('name', $name)
//            ->with('age', $age);

//            ->with('a', $name)
//            ->with('b', $age);

        return view('home',[
            'name'=>$name,
            'age'=>$age
        ]);


    }




    public function add() {
        return 'Hello About';
    }
}
