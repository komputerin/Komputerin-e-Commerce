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
        $role_id = 1;
        if (Auth::attempt(['role_id' => $request->role_id, 'email' => $request->email, 'password' => $request->password ])) {
             return redirect()->route('homeadmin');
        } else if (Auth::attempt( [ 'email' => $request->email, 'password' => $request->password ])) {
             return redirect()->route('home');
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
        return redirect()->route('register');
    } 


  public function logout() {
        \Auth::logout();
        return redirect()->route('backEnd/home');
    }



}
