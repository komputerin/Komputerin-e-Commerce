<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function home(){
        return view('backEnd/index');
    }

    public function login(){
        return view('backEnd/auth/login');
    }

    public function register(){
        return view('backEnd/auth/register');
    }

    public function forgotpass(){
        return view('backEnd/auth/forgot-password');
    }
}
