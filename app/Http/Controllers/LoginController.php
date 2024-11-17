<?php

namespace App\Http\Controllers;

class LoginController
{
    public function login()
    {
        return view('login.login_user');
    }

    public  function doLogin()
    {
        request()->validate(['email'=>'required','password'=>'required']);
        $input = ['email' => request('email'),'password' => request('password')];
        if(auth()->attempt($input,true))
        {
            return redirect()->route('view.products');
        }
        else
        {
            return redirect()->route('login')->with('message',"Login is Invalid");
        }
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

}
