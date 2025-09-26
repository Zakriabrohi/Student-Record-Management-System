<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Authcontroller extends Controller
{
    public function registration(request $request){
      $validator=Validator::make($request->all() ,[
             'username' => 'required|min:6|max:20',
             'email' => 'required|email',
             'password' => 'required|confirmed|max:6'
      ]);
          User::create([
            'username' => $request->username,
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=>'user'
          ]);

          return redirect()->route('login')->with('success' , 'sccessfully registration');
    }

    public function login(request $request){
        $validator=validator($request->all(),[
            'email' => 'requried|email',
            'password' => 'password'
        ]);

         if(Auth::attempt(['email' => $request->email , 'password' => $request->password]));

         $request->session()->regenerate();
         return Auth::user()->role === 'admin'
         ? redirect()->route('admin.admindashboard')
         : redirect()->route('UserDashboard');
    }


}
