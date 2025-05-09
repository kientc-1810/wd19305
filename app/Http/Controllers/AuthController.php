<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credential)){
            $user = Auth::user();

            if($user->role === 'admin'){
                return redirect('/categories')->with('success','Đăng nhập thành công');
            }else{
                return redirect('/list')->with('success','Đăng nhập thành công');
            }
        }
    }
}
