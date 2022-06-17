<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    
    function reg(Request $req){

        $this->validate($req,
             [
                "name"=>"required|max:20|regex:/^[a-z ,.'-]+$/i",
                // "id"=>"required|regex:/^([0-5]{3}-[0-9]{2}-[1-3]{2})+$/i",
                "dob"=>"required|date|before:-18 years",
                "email"=>"required|regex:/^([0-9]{2}-[0-9]{5}-[1-3]{1})@student\.aiub\.edu+$/i",
                "phone"=>'required|regex:/^\+[8]{2}[0-9]{11}+$/i',
                "pass"=>"required|string|min:8|regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*#?&^_-]{8,}$/",
                "confpass"=>"required|same:pass"
             ],
            );

            $std=new Student();
            $std->name=$req->name;
            $std->email=$req->email;
            $std->password=$req->pass;
            $std->save();

            
        // return view('udash')->with('slist',$studentlist);
    }

    // function loadDash(){
    //     return var_dump($studentlist=Student::all());
    // }

    function login(Request $req){
        $this->validate($req,
        [
           "email"=>"required",
           "pass"=>"required"
        ],
       );
       $std=new Student();
       $user=$std::where('email',$req->email)->where('password',$req->pass)->value('email');
       if(!empty($user)){
        // return view('udash');
        return redirect()->route('dashboard');
       }
       else{
        
        return redirect()->route('home');

       }


    }
}
