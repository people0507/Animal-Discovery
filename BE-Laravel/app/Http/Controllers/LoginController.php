<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use App\Http\MessageContent;
class LoginController extends Controller
{

    function register(Request $request){
        $value = "123456";
        $user = new User();
        $user->name = "Cường";
        $user->email = "cuong2003@gmail.com";
        $user->password = Hash::make($value);
        $user->gender = 0;
        $user->role_id = 0;
        $user->save();
    }
    function login(Request $request){
        MessageContent::loadMessages();
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return response()->json(
                ['name' => $user->name,
                'email' => $user->email,
                'gender' => $user->gender,
                'role' => $user->role,
                'message' => MessageContent::getMessage('login_success')
                ],200);
        }else{
            return response()->json(
            ['message' => MessageContent::getMessage('login_failed')
            ],401);
        }
    }
}
