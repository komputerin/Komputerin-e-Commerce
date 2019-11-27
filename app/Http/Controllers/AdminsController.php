<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function home(){
        return view('admins/index');
    }

    public function login(){
        return view('admins/auth/login');
    }

    public function register(){
        return view('admins/auth/register');
    }

    public function forgotpass(){
        return view('admins/auth/forgot-password');
    }
}
