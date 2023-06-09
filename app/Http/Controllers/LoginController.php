<?php

namespace App\Http\Controllers;
use Illuminate\Support\facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
	{
		if (Auth::check()){
            return redirect('home');
        }else{
            return view('login');
        }
	}
    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password'=> $request->input('password'),
        ];
        if (Auth::Attempt($data)){
            return redirect('hame');
        }else{
            Session::flash('error','Email atau Password Salah');
            return redirect('/');
        }
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
