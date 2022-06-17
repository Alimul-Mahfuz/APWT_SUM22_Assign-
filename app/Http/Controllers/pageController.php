<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class pageController extends Controller
{
    function home(){
        return view('Home');
    }

    function reg(){
        return view('reg');
    }
    function login(){
        return view('login');
    }
    function dashboard(){
        $slist=Student::all();
        // var_dump($slist);
        // return '<h1> Hello </h1>';
        return view('udash')->with('slist',$slist);
    }
    function viewdet($id){
        $sdet=Student::find($id);
        return view('viewdet')->with('sdet',$sdet);

    }

}
