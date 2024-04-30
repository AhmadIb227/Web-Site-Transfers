<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // $request->validate([
        //     'name' =>'required|string|min:4|max:255',
        //     'email' =>'required|string|unique:users',
        //     'password' =>'required|min:5|confirmed'
        // ]);
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        Auth::login($user);
        return view('welcome');
    }
    public function login(Request $request)
    {
        // $request->validate([
        //     'name' =>'required|string|min:4|max:255',
        //     'email' =>'required|string|unique:users',
        //     'password' =>'required|min:5|confirmed'
        // ]);
        //        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){          
                  return view('welcome');
        }
        return response('error');
    }
}

