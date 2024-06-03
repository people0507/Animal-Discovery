<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
class AdminController extends Controller
{
    public function create(){
        
    }

    public function listUser(){
        $user = User::all();
        $url = url('/');
        if($user){
            return response()->json(
                ['user' => $user,
                'url' => $url
            ],200);
        }else{
            return response()->json(401);
        }
    }

    public function getUser($id){
        $user = User::where('id',$id)->first();
        $url = url('/');
        if($user){
            return response()->json(
                ['user' => $user,
                'url' => $url
            ],200);
        }else{
            return response()->json(401);
        }
    }
    
    public function updateUser($id,Request $request){
        $data = $request->all();
        $user = User::find($id)->first();
        $user->gender = $data['gender'];
        $user->birthdate = $data['birthday'];
        $user->save();
        response()->json($data);
    }

    public function listRole(){
        $role = Role::all();
        if($role){
            return response()->json(
                ['role' => $role,
            ],200);
        }else{
            return response()->json(401);
        }
    }
}
