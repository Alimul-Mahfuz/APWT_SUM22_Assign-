<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

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

}
