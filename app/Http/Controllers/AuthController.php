<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
     public function getRegister(){
        return view('/layouts/register');
    }

     public function postRegister(Request $request){
        $this->validate($request,[
            'username' => 'required|min:4|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);

        auth()->loginUsingId($user->id);
        return redirect()->route('sertifikasiK3');
    }

    public function getLogin(){
    	return view('/layouts/login');
    }

    public function postLogin(Request $request){
    	if(!auth()->attempt(['username' => $request->username, 'password'=> $request->password])){
            return redirect()->back();
        }
        return redirect()->route('admin');
    }
    
    public function logout(){
        auth()->logout();
        return redirect()->route('sertifikasiK3');
    }
}