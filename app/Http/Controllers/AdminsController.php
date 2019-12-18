<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Auth;

class AdminsController extends Controller
{
    public function homeadmin(){
        return view('backEnd/index');
    }

    public function forgotpass(){
        return view('backEnd/auth/forgot-password');
    }

    //login
    public function getLogin() {
        return view('backEnd/auth/login');
    }

    public function postLogin(Request $request) {
      $id = 1;
        if (Auth::attempt(['id'=>$id, 'email' => $request->email, 'password' => $request->password ])) {
            return redirect('/admin');
        } else if (Auth::attempt(['email' => $request->email, 'password' => $request->password ])) {
           return redirect('/');
        }

        return redirect()->route('login');
    }



   public function getRegister() {
         return view('backEnd/auth/register');
    }


   public function postRegister(Request $request) {

            $this->validate($request, [
               'name' => 'required|min:4',
               'email' =>  'required|email|unique:users',
               'password' => 'required|min:6|confirmed' // field_confirmation
            ]);

          User::create([
      
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // return redirect()->back();
        return redirect('/');
    } 


  public function logout() {
        \Auth::logout();
        return redirect()->route('layout/home');
    }



}
