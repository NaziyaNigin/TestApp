<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FrondEndController extends Controller
{
    public function homePage()
    {
        return view('home');
    }
    public function register()
    {
        return view('users.users_create');
    }
    public function doRegister()
    {
        request()->validate([
                'name' => 'required|min:3',
                'email' => 'required',
                //'password' => 'required|string|min:8|regex:/[a-z][A-Z][0-9][@$!%*?&]/',
                'password' => 'required',
                'mobile' => 'required'
        ]);
        User::create(
            [
                'name' => request('name'),
                'email' => request('email'),
                'password' => Hash::make(request('password')), //Password Hashing
                'mobile' => request('mobile')
            ]  );

        return redirect()->route('home')->with('message','Registered Successfully');
    }
}
