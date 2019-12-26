<?php

namespace App\Http\Controllers;

use App\Profile_model;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function index(){
        return view('users.login_register');
    }
     //login
    public function getLogin() {
        return view('/auth/login');
    }

    public function postLogin(Request $request) {
        $admin = 1;
        if (Auth::attempt(['admin' => $request->admin, 'email' => $request->email, 'password' => $request->password ])) {
             return redirect()->route('admin');
        } else if (Auth::attempt( [ 'email' => $request->email, 'password' => $request->password ])) {
             return redirect()->route('home');
        }

        return redirect()->route('login');
    }
    // end login 


    //regis
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
    //end regis


    public function account(){
        $countries=DB::table('countries')->get();
        $user_login=User::where('id',Auth::id())->first();
        return view('users.account',compact('countries','user_login'));
    }
    public function updateprofile(Request $request,$id){
        $this->validate($request,[
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'mobile'=>'required',
        ]);
        $input_data=$request->all();
        DB::table('users')->where('id',$id)->update(['name'=>$input_data['name'],
            'address'=>$input_data['address'],
            'city'=>$input_data['city'],
            'state'=>$input_data['state'],
            'country'=>$input_data['country'],
            'pincode'=>$input_data['pincode'],
            'mobile'=>$input_data['mobile']]);
        return back()->with('message','Update Profile already!');

    }
    public function updatepassword(Request $request,$id){
        $oldPassword=User::where('id',$id)->first();
        $input_data=$request->all();
        if(Hash::check($input_data['password'],$oldPassword->password)){
            $this->validate($request,[
               'newPassword'=>'required|min:6|max:12|confirmed'
            ]);
            $new_pass=Hash::make($input_data['newPassword']);
            User::where('id',$id)->update(['password'=>$new_pass]);
            return back()->with('message','Update Password Already!');
        }else{
            return back()->with('oldpassword','Old Password is Inconrrect!');
        }
    }
}
