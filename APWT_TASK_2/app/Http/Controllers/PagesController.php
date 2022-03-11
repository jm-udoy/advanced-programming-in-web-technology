<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function home(){
        return view('home');
    }

    public function product(){
        $names=array("Product TV","Product AC","Product Phone");
        return view('product')->with('names',$names);
    }

    public function ourteams(){
        return view('ourteams');
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }

    public function login(){
        return view('login');
    }

    public function logininput(Request $request){
        $validate = $request->validate([
               'userName' => 'required',
               'password' => 'required'
        ]);

        $userName = $request->input('userName');
        $password = $request->input('password');

        if($userName === "udoy" && $password === "111"){
           return view('home');
        }
        else{
           return 
           
           "Incorrect username and password <br>
            PLEASE TRY AGAIN...";
                          
        }
        
   }

    public function registration(){
        return view('registration');
    }

    public function registrationsubmit(Request $request){
        $validate = $request->validate([
            'name' => 'required|min:2|max:20',
            'id' => 'required',
            'dob' => 'required',
            'phone' => 'required|min:11',
            'email' => 'email',
            'password' => 'required'
        ],
        [
            'name.required'=>'Your Name required',
            'id.required'=>'Your ID required',
            'dob.required'=>'Your Date of birth is required',
            'email.required'=>'Your Email required',
            'password.required'=>'Your Password required'
            
        ]
    );
        return"Registration Done";
    }


}
