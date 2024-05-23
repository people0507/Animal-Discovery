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
        MessageContent::loadMessages();
        $data = $request->all();
        if($data['password'] == $data['repeatPassword']){
            $user = new User();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->role_id = 1;
            $user->save();
            return response()->json(
                ['message' => MessageContent::getMessage('register_success')],200);
        }else{
            return response()->json(
                ['message' => MessageContent::getMessage('repeat_password')],401);
        }
    }
    function login(Request $request){
        MessageContent::loadMessages();
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = auth()->user()->createToken('LaravelAuthApp')->plainTextToken;
            return response()->json(
                ['name' => $user->name,
                'email' => $user->email,
                'gender' => $user->gender,
                'role' => $user->role,
                'message' => MessageContent::getMessage('login_success'),
                'token' => $token,
                ],200);
        }else{
            return response()->json(
            ['message' => MessageContent::getMessage('login_failed')
            ],401);
        }
    }
}
