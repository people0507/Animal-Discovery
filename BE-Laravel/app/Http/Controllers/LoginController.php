<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use App\Http\MessageContent;
class LoginController extends Controller
{
    public function viewLogin(){
        return view('authen.login');
    }
    
    public function viewRegister(){
        return view('authen.register');
    }

    function register(Request $request){
        MessageContent::loadMessages();
        $data = $request->all();
        if($data['password'] == $data['password_confirmation']){
            $user = new User();
            $user->name = $data['username'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->role_id = User::USER;
            $user->save();
            $message = MessageContent::getMessage('login_success');
            return view('authen.login',compact('message'));
        }else{
            $message = MessageContent::getMessage('login_failed');
            return view('authen.register');
        }
    }
    function login(Request $request){
        MessageContent::loadMessages();
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = auth()->user();
            if($user->role_id == User::ADMIN){
                $message = MessageContent::getMessage('login_success');
                return view('admin.home',compact('user', 'message'));
            }else{
                $message = MessageContent::getMessage('login_success');
                return view('user.home',compact('user', 'message'));
            }
        }else{
            $message = MessageContent::getMessage('login_failed');
            return view('authen.login');
        }
    }
}
