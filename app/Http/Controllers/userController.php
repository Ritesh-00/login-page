<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class userController extends Controller
{
    public function register(request $request){
   
        $validate = $request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:myuser,email',
            'password'=>'required|string|min:8|confirmed|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
        ],
        [
            'name.string'=>'enter a valid name',
            'email.email'=>'enter a valid email',
            'email.unique'=>'email already exists',
            'password.confirmed' => 'password does not match',
            'password.min' => 'password must have 8 letter',
            'password.regex' => 'password must contain one uppercase, one lowercase, one number and one special letter'
        ]
    );


        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        if($user->save()){
            return redirect('/login')->with('message','acc created successfully');
        }else{
            dump('error occured');
        }
    }    


    public function login(request $request){

        $user = User::where('email' , $request->input('email'))->first();

        if($user && Hash::check($request->input('password') , $user->password)){
            return redirect('/home')->with('message','logged in');
        }else{
            dump('maybe email or password is wrong');
            // return redirect('/home')->with('error');
        }

    }


}
