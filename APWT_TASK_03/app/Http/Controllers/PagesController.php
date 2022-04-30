<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function home(){
        return view('home');
    }

    public function product(){
        $names=array("Product A","Product B","Product C");
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

        if($userName === "Shethil" && $password === "1234"){
            if($userName){
                Session::put('user', '$userName');
                return redirect()-> route('home');
               }
        }
        else{
           return 
           
           "WRONG USER NAME / PASSWORD <br>
            PLEASE TRY AGAIN";
                          
        }
        
   }

   

   public function registration(){
    return view('registration'); 
}

public function registrationsubmit(Request $request){
    $validate = $request->validate([
        'journalistName' => 'required|min:6|max:30',
        'email' => 'email',
        'dob' => 'required',
        'phone' => 'required|min:11|numeric',
        'password' => 'required|min:6|max:10',
        'gender' => 'required'
    ],
    [
        'journalistName.required'=>' Name required',
        'dob.required'=>' Date of birth is required',
        'email.required'=>' Email required',
        'password.required'=>'Password required',
        'password.min'=>'password must be at least 6 characters',
        'password.max'=>'password must not be greater than 10 characters'
        
    ]
);
        
        $userlist = new Userlist();
        $userlist -> name = $request -> journalistName;
        $userlist -> email = $request -> email;
        $userlist -> dob = $request -> dob;
        $userlist -> phone = $request -> phone;
        $userlist -> password = $request -> password;
        $userlist ->  gender = $request -> gender;
        $userlist ->  save();
        

    return"Registration Done";
    // return redirect()->route('journalistList');
}

}
