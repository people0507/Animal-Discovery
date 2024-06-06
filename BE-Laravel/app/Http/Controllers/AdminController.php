<?php

namespace App\Http\Controllers;

use App\Http\MessageContent;
use App\Models\AnimalDetail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\AnimalImage;
use Str;

class AdminController extends Controller
{
    public function listAnimal(){
        $animalDetail = AnimalDetail::all();
        if($animalDetail){
            return response()->json(
                ['animal_detail' => $animalDetail,
            ],200);
        }else{
            return response()->json(401);
        }
    }

    public function createAnimalDetail(Request $request){
        MessageContent::loadMessages();
        $data = $request->all();
        if(isset($data['animal_sound']) && $data['animal_sound'] != null){
            $uniqueFileSoundName = Str::uuid()->toString() . '.' . $data['animal_sound']->extension();
            $data['animal_sound']->move(public_path('animal_sounds'), $uniqueFileSoundName);
        }else{
            $uniqueFileSoundName=null;
        }
        $animalDetail = new AnimalDetail();
        $animalDetail->animal_name = $data['animnal_name'];
        $animalDetail->animal_scientific_name = $data['animal_scientific_name'];
        $animalDetail->animal_description = $data['animal_description'];
        $animalDetail->appearance_description = $data['appearance_description'];
        $animalDetail->geography_description = $data['geography_description'];
        $animalDetail->habit_lifestyle_description = $data['habit_lifestyle_description'];
        $animalDetail->diet_nutrition_description = $data['diet_nutrition_description'];
        $animalDetail->mating_habit_description = $data['mating_habit_description'];
        $animalDetail->population_description = $data['population_description'];
        $animalDetail->fun_fact=$data['fun_fact'];
        $animalDetail->animal_length=$data['animal_length'];
        $animalDetail->animal_height=$data['animal_height'];
        $animalDetail->animal_weight=$data['animal_weight'];
        $animalDetail->population_size=$data['population_size'];
        $animalDetail->avg_lifespan=$data['avg_lifespan'];
        $animalDetail->animal_sound=$uniqueFileSoundName;
        $animalDetail->animal_video=$data['animal_video'];
        $animalDetail->conservation_status_id = 1;
        $animalDetail->activity_time_id = 1;
        $animalDetail->diet_type_id = 1;
        $animalDetail->animal_category_id =1;
        $animalDetail->population_trending_id = 1;
        $animalDetail->created_by = 1;
        $animalDetail->save();

        if(isset($data['animal_image']) && $data['animal_image'] != null){
            foreach ($data['animal_image'] as $img ){
                $uniqueFileName = Str::uuid()->toString() . '.' . $img->extension();
                $img->move(public_path('animal_images'), $uniqueFileName);
                $animalImage = new AnimalImage();
                $animalImage->image_name = $uniqueFileName;
                $animalImage->detail_id = 1;
                $animalImage->save();
            }
        }
        if ($animalDetail->save()) {
            return response()->json(['message' => MessageContent::getMessage('create_success')],200);
        } else {
            return response()->json(['message' => MessageContent::getMessage('create_failed')],401);
        }
    }

    public function editAnimalDetail(){
        
    }

    public function deleteAnimalDetail($id){
        MessageContent::loadMessages();
        $animalDetail = AnimalDetail::find($id)->first();
        if($animalDetail){
            if ($animalDetail->delete()) {
                return response()->json(['message' => MessageContent::getMessage('delete_success')],200);
            } else {
                return response()->json(['message' => MessageContent::getMessage('delete_failed')],401);
            }
        }
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
        MessageContent::loadMessages();
        $data = $request->all();

        if(isset($data['avatar'])){
            $uniqueFileName = Str::uuid()->toString() . '.' . $data['avatar']->extension();
            $data['avatar']->move(public_path('avatars'), $uniqueFileName);
        }
        $user = User::where('id',$id)->first();
        $user->gender = $data['gender'];
        $user->role_id = $data['role'];
        $user->birthdate = $data['birthdate'];
        if(isset($uniqueFileName) && $uniqueFileName != ''){
        $user->avatar = $uniqueFileName;
        }
        $user->save();
        if ($user->save()) {
            return response()->json(['message' => MessageContent::getMessage('create_success')],200);
        } else {
            return response()->json(['message' => MessageContent::getMessage('create_failed')],401);
        }
    }

    public function deleteUser($id){
        MessageContent::loadMessages();
        $user = User::find($id)->first();
        if($user){
            if ($user->delete()) {
                return response()->json(['message' => MessageContent::getMessage('delete_success')],200);
            } else {
                return response()->json(['message' => MessageContent::getMessage('delete_failed')],401);
            }
        }
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
