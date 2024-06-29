<?php

namespace App\Http\Controllers;

use App\Http\MessageContent;
use App\Models\AnimalDetail;
use App\Models\Biome;
use App\Models\Climate;
use App\Models\ConservationStatus;
use App\Models\DietType;
use App\Models\Nation;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\AnimalImage;
use App\Models\Image;
use App\Models\Area;
use App\Models\Ocean;
use App\Models\Color;
use App\Models\Category;
use App\Models\ActivityTime;
use App\Models\PopulationTrending;
use App\Models\Post;
use Auth;
use Str;
use Hash;

class AdminController extends Controller
{
    public function viewCreateUser()
    {
        $mode = 'add';
        $roles = Role::all();
        return view('admin.users.add-user', compact('mode', 'roles'));
    }

    public function createUser(Request $request)
    {
        MessageContent::loadMessages();
        $data = $request->all();
        try {
        if (isset($data['avatar'])) {
            $uniqueFileName = Str::uuid()->toString() . '.' . $data['avatar']->extension();
            $data['avatar']->move(public_path('avatars'), $uniqueFileName);
        }
        $user = new User();
        $user->name = $data['username'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->gender = $data['gender'];
        $user->role_id = $data['role_id'];
        $user->birthdate = $data['birthdate'];
        if (isset($uniqueFileName) && $uniqueFileName != '') {
            $user->avatar = $uniqueFileName;
        }
        $user->save();
        $message = MessageContent::getMessage('create_success');
            return redirect()->route('admin.list_user')->with('success', $message);
        } catch (\Exception $e) {
        $message = MessageContent::getMessage('create_failed');
            return back()->with('failed', $message);
        }
    }

    public function viewEditUser($id)
    {
        $mode = 'edit';
        $roles = Role::all();
        $user = User::where('id', $id)->first();
        return view('admin.users.add-user', compact('mode', 'roles', 'user'));
    }

    public function updateUser($id, Request $request)
    {
        MessageContent::loadMessages();
        $data = $request->all();
        try {
        if (isset($data['avatar'])) {
            $uniqueFileName = Str::uuid()->toString() . '.' . $data['avatar']->extension();
            $data['avatar']->move(public_path('avatars'), $uniqueFileName);
        }
        $user = User::where('id', $id)->first();
        $user->name = $data['username'];
        $user->email = $data['email'];
        $user->gender = $data['gender'];
        $user->role_id = $data['role_id'];
        $user->birthdate = $data['birthdate'];
        if (isset($uniqueFileName) && $uniqueFileName != '') {
            $user->avatar = $uniqueFileName;
        }
        $user->save();
        $message = MessageContent::getMessage('update_success');
        return redirect()->route('admin.list_user')->with('success', $message);
    } catch (\Exception $e) {
        $message = MessageContent::getMessage('update_failed');
        return redirect()->back()->with('failed', $message);
    }
    }

    public function detailAnimal($id = 1)
    {
        $conservationStatus = ConservationStatus::all();
        $dietType = DietType::all();
        $animalCategory = Category::all();
        $activityTime = ActivityTime::all();
        $populationTrending = PopulationTrending::all();
        $animalDetail = AnimalDetail::where('id', $id)->first();
        return view('admin.animals.detail-animal', compact(
            'conservationStatus',
            'dietType',
            'animalCategory',
            'activityTime',
            'populationTrending',
            'animalDetail'
        ));
    }

    public function dashBoard(){
        $user = User::count();
        $animalDetail = AnimalDetail::count();
        $post = Post::count();
        return view('admin.home',compact('user', 'animalDetail', 'post'));
    }
    public function listUser()
    {
        $users = User::paginate(5);
        return view('admin.users.list-user', compact('users'));
    }

    public function searchUser(Request $request){
        $data = $request->all();
        $key_word = $data['key_word'];
        $role_id = $data['role_id'];
        $date_filter = $data['date_filter'];


        $query = User::query();

        if ($key_word !== null) {
            $query->where('email', 'like', '%' . $key_word . '%');
        }

        if ($role_id !== null) {
            $query->where('role_id',$role_id );
        }

        if (!empty($date_filter)) {
            $query->whereDate('created_at',$date_filter);
        }

        $users = $query->paginate(5);
        return view('admin.users.list-user', compact('users'));
    }

    public function deleteUser($id)
    {
        try {
        MessageContent::loadMessages();
        User::destroy($id);
        $message = MessageContent::getMessage('delete_success');
        return redirect()->route('admin.list_user')->with('success', $message);
    } catch (\Exception $e) {
        $message = MessageContent::getMessage('delete_success');
        return redirect()->back()->with('failed', $message);
    }      
    }

    public function viewAddAnimal()
    {
        $mode = 'add';
        $conservationStatus = ConservationStatus::all();
        $dietType = DietType::all();
        $animalCategory = Category::all();
        $activityTime = ActivityTime::all();
        $populationTrending = PopulationTrending::all();
        return view('admin.animals.add-animal', compact('conservationStatus', 'dietType', 'animalCategory', 'activityTime', 'populationTrending', 'mode'));
    }

    public function createAnimalDetail(Request $request)
    {
        MessageContent::loadMessages();
        $data = $request->all();
        try {
        if (isset($data['animal_sound']) && $data['animal_sound'] != null) {
            $uniqueFileSoundName = Str::uuid()->toString() . '.' . $data['animal_sound']->extension();
            $data['animal_sound']->move(public_path('animal_sounds'), $uniqueFileSoundName);
        } else {
            $uniqueFileSoundName = null;
        }
        $animalDetail = new AnimalDetail();
        $animalDetail->animal_name = $data['animal_name'];
        $animalDetail->animal_scientific_name = $data['animal_scientific_name'];
        $animalDetail->animal_description = $data['animal_description'];
        $animalDetail->appearance_description = $data['appearance_description'];
        $animalDetail->geography_description = $data['geography_description'];
        $animalDetail->habit_lifestyle_description = $data['habit_lifestyle_description'];
        $animalDetail->diet_nutrition_description = $data['diet_nutrition_description'];
        $animalDetail->mating_habit_description = $data['mating_habit_description'];
        $animalDetail->population_threat = $data['population_threat'];
        $animalDetail->population_number = $data['population_number'];
        $animalDetail->ecological_niche = $data['ecological_niche'];
        $animalDetail->fun_fact = $data['fun_fact'];
        $animalDetail->animal_length = $data['animal_length'];
        $animalDetail->animal_weight = $data['animal_weight'];
        $animalDetail->population_size = $data['population_size'];
        $animalDetail->top_speed = $data['top_speed'];
        $animalDetail->animal_swing = $data['animal_swing'];
        $animalDetail->mating_behavior = $data['mating_behavior'];
        $animalDetail->reproduction_season = $data['reproduction_season'];
        $animalDetail->pregnancy_duration = $data['pregnancy_duration'];
        $animalDetail->independent_age = $data['independent_age'];
        $animalDetail->avg_lifespan = $data['avg_lifespan'];
        $animalDetail->animal_sound = $uniqueFileSoundName;
        $animalDetail->animal_video = $data['animal_video'];
        $animalDetail->conservation_status_id = $data['conservation_status_id'];
        $animalDetail->activity_time_id = $data['activity_time_id'];
        $animalDetail->diet_type_id = $data['diet_type'];
        $animalDetail->category_id = $data['category_id'];
        $animalDetail->population_trending_id = $data['population_trending_id'];
        $animalDetail->created_by = Auth::id();
        $animalDetail->save();

        $message = MessageContent::getMessage('create_success');
            return redirect()->route('list_animal')->with('success', $message);
        } catch (\Exception $e) {
            $message = MessageContent::getMessage('create_failed');
            return redirect()->back()->with('failed', $message);
        }
    }

    public function viewEditAnimal($id)
    {
        $mode = 'edit';
        $conservationStatus = ConservationStatus::all();
        $dietType = DietType::all();
        $animalCategory = Category::all();
        $activityTime = ActivityTime::all();
        $populationTrending = PopulationTrending::all();
        $animalDetail = AnimalDetail::where('id', $id)->first();
        return view('admin.animals.add-animal', compact('conservationStatus', 'dietType', 'animalCategory', 'activityTime', 'populationTrending', 'animalDetail', 'mode'));
    }

    public function updateAnimalDetail($id, Request $request)
    {
        MessageContent::loadMessages();
        $data = $request->all();
        try {
        if (isset($data['animal_sound']) && $data['animal_sound'] != null) {
            $uniqueFileSoundName = Str::uuid()->toString() . '.' . $data['animal_sound']->extension();
            $data['animal_sound']->move(public_path('animal_sounds'), $uniqueFileSoundName);
        }
        $animalDetail = AnimalDetail::where('id', $id)->first();
        $animalDetail->animal_name = $data['animal_name'];
        $animalDetail->animal_scientific_name = $data['animal_scientific_name'];
        $animalDetail->animal_description = $data['animal_description'];
        $animalDetail->appearance_description = $data['appearance_description'];
        $animalDetail->geography_description = $data['geography_description'];
        $animalDetail->habit_lifestyle_description = $data['habit_lifestyle_description'];
        $animalDetail->diet_nutrition_description = $data['diet_nutrition_description'];
        $animalDetail->mating_habit_description = $data['mating_habit_description'];
        $animalDetail->population_threat = $data['population_threat'];
        $animalDetail->population_number = $data['population_number'];
        $animalDetail->ecological_niche = $data['ecological_niche'];
        $animalDetail->fun_fact = $data['fun_fact'];
        $animalDetail->animal_length = $data['animal_length'];
        $animalDetail->animal_weight = $data['animal_weight'];
        $animalDetail->population_size = $data['population_size'];
        $animalDetail->top_speed = $data['top_speed'];
        $animalDetail->animal_swing = $data['animal_swing'];
        $animalDetail->mating_behavior = $data['mating_behavior'];
        $animalDetail->reproduction_season = $data['reproduction_season'];
        $animalDetail->pregnancy_duration = $data['pregnancy_duration'];
        $animalDetail->independent_age = $data['independent_age'];
        $animalDetail->avg_lifespan = $data['avg_lifespan'];
        if (isset($data['animal_sound']) && $data['animal_sound'] != null) {
            $animalDetail->animal_sound = $uniqueFileSoundName;
        }
        $animalDetail->animal_video = $data['animal_video'];
        $animalDetail->conservation_status_id = $data['conservation_status_id'];
        $animalDetail->activity_time_id = $data['activity_time_id'];
        $animalDetail->diet_type_id = $data['diet_type'];
        $animalDetail->category_id = $data['category_id'];
        $animalDetail->population_trending_id = $data['population_trending_id'];
        $animalDetail->created_by = Auth::id();
        $animalDetail->save();

        $message = MessageContent::getMessage('update_success');
        return redirect()->route('list_animal')->with('success', $message);
    } catch (\Exception $e) {
        $message = MessageContent::getMessage('update_failed');
            return redirect()->back()->with('failed', $message);
    }
    }

    public function addAnimalImage($id, Request $request)
    {
        MessageContent::loadMessages();
        $data = $request->all();
        try {
            $uniqueFileName = Str::uuid()->toString() . '.' . $data['animal_image']->extension();
            $data['animal_image']->move(public_path('animal_images'), $uniqueFileName);
            $animalImage = new Image();
            $animalImage->image_name = $uniqueFileName;
            $animalImage->detail_id = $id;
            $animalImage->save();
            $message = MessageContent::getMessage('create_success');
            return redirect()->route('list_animal_image', ['id' => $id])->with('success',$message);
        } catch (\Exception $e) {
            $message = MessageContent::getMessage('create_failed');
            return redirect()->route('list_animal_image', ['id' => $id])->with('failed',$message);
        }
    }

    public function deleteImageAnimal($id)
    {
        MessageContent::loadMessages();
        Image::destroy($id);
        $message = MessageContent::getMessage('delete_success');
        return redirect()->back()->with('success',$message);
    }

    public function listAnimal()
    {
        $animalDetail = AnimalDetail::paginate(5);
        return view('admin.animals.list-animal', compact('animalDetail'));
    }

    public function searchAnimal(Request $request){
        $data = $request->all();
        $key_word = $data['key_word'];
        $key_word1 = $data['key_word1'];
        $date_filter = $data['date_filter'];

        $query = AnimalDetail::query();

        if (!empty($key_word)) {
            $query->where('animal_name', 'like', '%' . $key_word . '%');
        }

        if (!empty($key_word1)) {
            $query->where('animal_scientific_name', 'like', '%' . $key_word1 . '%');
        }

        if (!empty($date_filter)) {
            $query->whereDate('created_at',$date_filter);
        }

        
        $animalDetail = $query->paginate(5);
        return view('admin.animals.list-animal', compact('animalDetail'));
    }

    public function listAnimalArea($id)
    {
        $mode = 'area';
        $data = AnimalDetail::where('id', $id)->with('areas')->first();
        $areas = Area::all();
        return view('admin.animals.list-animal-characteristic', compact('data', 'mode', 'areas'));
    }

    public function addAreaAnimal($id, Request $request)
    {
        MessageContent::loadMessages();
        $animalDetail = AnimalDetail::where('id', $id)->first();
            try {
                $animalDetail->areas()->attach($request->area_id);
                $message = MessageContent::getMessage('create_success');
                return redirect()->route('list_animal_area', ['id' => $id])->with('success',$message);
            } catch (\Exception $e) {
                $message = MessageContent::getMessage('create_failed');
                return redirect()->route('list_animal_area', ['id' => $id])->with('failed',$message);
            }
    }

    public function deleteAreaAnimal($id, $id2)
    {
        MessageContent::loadMessages();
        $animalDetail = AnimalDetail::where('id', $id)->first();
        $animalDetail->areas()->detach($id2);
        $message = MessageContent::getMessage('delete_success');
        return redirect()->route('list_animal_area', ['id' => $id])->with('success', $message);
    }

    public function listAnimalClimate($id)
    {
        $mode = 'climate';
        $data = AnimalDetail::where('id', $id)->with('climates')->first();
        $climates = Climate::all();
        return view('admin.animals.list-animal-characteristic', compact('data', 'mode', 'climates'));
    }

    public function addClimateAnimal($id, Request $request)
    {
        MessageContent::loadMessages();
        try { 
        $animalDetail = AnimalDetail::where('id', $id)->first();
        $animalDetail->climates()->attach($request->climate_id);
        $message = MessageContent::getMessage('create_success');
        return redirect()->route('list_animal_climate', ['id' => $id])->with('success', $message);
        } catch (\Exception $e) {
        $message = MessageContent::getMessage('create_failed');
        return redirect()->route('list_animal_climate', ['id' => $id])->with('failed', $message);
    }
    }

    public function deleteClimateAnimal($id, $id2)
    {
        MessageContent::loadMessages();
        $animalDetail = AnimalDetail::where('id', $id)->first();
        $animalDetail->climates()->detach($id2);
        $message = MessageContent::getMessage('delete_success');
        return redirect()->route('list_animal_climate', ['id' => $id])->with('success',$message);
    }

    public function listAnimalNation($id)
    {
        $mode = 'nation';
        $data = AnimalDetail::where('id', $id)->with('nations')->first();
        $nations = Nation::all();
        return view('admin.animals.list-animal-characteristic', compact('data', 'mode', 'nations'));
    }

    public function addNationAnimal($id, Request $request)
    {
        MessageContent::loadMessages();
        try {
        $animalDetail = AnimalDetail::where('id', $id)->first();
        $animalDetail->nations()->attach($request->nation_id);
        $message = MessageContent::getMessage('create_success');
        return redirect()->route('list_animal_nation', ['id' => $id])->with('success', $message );
        } catch (\Exception $e) {
        $message = MessageContent::getMessage('create_failed');
        return redirect()->route('list_animal_nation', ['id' => $id])->with('failed', $message );
        }
    }

    public function deleteNationAnimal($id, $id2)
    {
        MessageContent::loadMessages();
        $animalDetail = AnimalDetail::where('id', $id)->first();
        $animalDetail->nations()->detach($id2);
        $message = MessageContent::getMessage('delete_success');
        return redirect()->route('list_animal_nation', ['id' => $id])->with('success', $message);
    }

    public function listAnimalColor($id)
    {
        $mode = 'color';
        $data = AnimalDetail::where('id', $id)->with('colors')->first();
        $colors = Color::all();
        return view('admin.animals.list-animal-characteristic', compact('data', 'mode', 'colors'));
    }

    public function addColorAnimal($id, Request $request)
    {
        MessageContent::loadMessages();
        try {
        $animalDetail = AnimalDetail::where('id', $id)->first();
        $animalDetail->colors()->attach($request->color_id);
        $message = MessageContent::getMessage('create_success');
        return redirect()->route('list_animal_color', ['id' => $id])->with('success', $message);
        } catch (\Exception $e) {
        $message = MessageContent::getMessage('delete_success');
        return redirect()->route('list_animal_color', ['id' => $id])->with('failed', $message);
        }
    }

    public function deleteColorAnimal($id, $id2)
    {
        MessageContent::loadMessages();
        $animalDetail = AnimalDetail::where('id', $id)->first();
        $animalDetail->colors()->detach($id2);
        $message = MessageContent::getMessage('delete_success');
        return redirect()->route('list_animal_color', ['id' => $id])->with('success',$message);
    }

    public function listAnimalBiome($id)
    {
        $mode = 'biome';
        $data = AnimalDetail::where('id', $id)->with('biomes')->first();
        $biomes = Biome::all();
        return view('admin.animals.list-animal-characteristic', compact('data', 'mode', 'biomes'));
    }

    public function addBiomeAnimal($id, Request $request)
    {
        MessageContent::loadMessages();
        try {
        $animalDetail = AnimalDetail::where('id', $id)->first();
        $animalDetail->biomes()->attach($request->biome_id);
        $message = MessageContent::getMessage('create_success');
        return redirect()->route('list_animal_biome', ['id' => $id])->with('success', $message);
        } catch (\Exception $e) {
        $message = MessageContent::getMessage('create_failed');
        return redirect()->route('list_animal_biome', ['id' => $id])->with('failed',  $message);
        }
    }

    public function deleteBiomeAnimal($id, $id2)
    {
        MessageContent::loadMessages();
        $animalDetail = AnimalDetail::where('id', $id)->first();
        $animalDetail->biomes()->detach($id2);
        $message = MessageContent::getMessage('delete_success');
        return redirect()->route('list_animal_biome', ['id' => $id])->with('success', $message);
    }

    public function listAnimalOcean($id)
    {
        $mode = 'ocean';
        $data = AnimalDetail::where('id', $id)->with('oceans')->first();
        $oceans = Ocean::all();
        return view('admin.animals.list-animal-characteristic', compact('data', 'mode', 'oceans'));
    }

    public function addOceanAnimal($id, Request $request)
    {
        MessageContent::loadMessages();
        try {
        $animalDetail = AnimalDetail::where('id', $id)->first();
        $animalDetail->oceans()->attach($request->ocean_id);
        $message = MessageContent::getMessage('create_success');
        return redirect()->route('list_animal_ocean', ['id' => $id])->with('success', $message);
        } catch (\Exception $e) {
        $message = MessageContent::getMessage('create_failed');
        return redirect()->route('list_animal_ocean', ['id' => $id])->with('failed', $message);
        }
    }

    public function deleteOceanAnimal($id, $id2)
    {
        MessageContent::loadMessages();
        $animalDetail = AnimalDetail::where('id', $id)->first();
        $animalDetail->oceans()->detach($id2);
        $message = MessageContent::getMessage('delete_success');
        return redirect()->route('list_animal_ocean', ['id' => $id])->with('success', $message );
    }

    public function listAnimalImage($id)
    {
        $images = Image::where('detail_id', $id)->paginate(5);
        foreach ($images as $image) {
            $image->animalDetail;
        }
        $animalDetail = AnimalDetail::where('id', $id)->first();
        return view('admin.animals.list-animal-image', compact('images', 'animalDetail'));
    }

    public function addImgAnimalView()
    {
        return view('admin.animals.add-img-animal');
    }
    public function addImgAnimalStore(Request $request)
    {
        $img = $request->file('file');
        $imgName = time() . rand(1, 100) . '.' . $img->extension();
        $img->move(public_path('images_animal'), $imgName);
        return response()->json([
            'success' => $imgName
        ]);
    }

    public function editAnimalDetail()
    {
    }

    public function classificationView()
    {
        return view('admin.animals.add-classification-animal');
    }
    public function classificationStore()
    {
    }

    public function deleteAnimalDetail($id)
    {
        MessageContent::loadMessages();
        $deletedRows = AnimalDetail::destroy($id);
        if ($deletedRows >  0) {
            $message = MessageContent::getMessage('delete_success');
            return redirect()->route('list_animal')->with('success', $message);
        } else {
            $message = MessageContent::getMessage('delete_success');
            return redirect()->back()->with('failed', $message);
        }
    }


    public function listPostsView()
    {
        $posts = Post::with('user')->withCount('comments')->withCount('likes')->paginate(5);
        return view('admin.posts.list', compact('posts'));
    }

    public function searchPost(Request $request){
        $data = $request->all();
        $key_word = $data['key_word'];
        $status = $data['status'];
        $date_filter = $data['date_filter'];
        $query = Post::with('user')->withCount('comments')->withCount('likes');

        if (!empty($key_word)) {
            $query->where('title', 'like', '%' . $key_word . '%');
        }

        if (!empty($status)) {
            $query->where('status',$status );
        }

        if (!empty($date_filter)) {
            $query->whereDate('created_at',$date_filter);
        }

        $posts = $query->paginate(5);
        return view('admin.posts.list', compact('posts'));
    }
    public function deletePost($id)
    {
        MessageContent::loadMessages();
        $deletedRows = Post::destroy($id);
        if ($deletedRows >  0) {
            $message = MessageContent::getMessage('delete_success');
            return redirect()->route('admin.list_posts')->with('success', $message);
        } else {
            $message = MessageContent::getMessage('delete_success');
            return redirect()->back()->with('failed', $message);
        }
    }

    public function approvalPost($id)
    {
        MessageContent::loadMessages();
        $post = Post::where('id', $id)->first();
        $post->status = Post::APPROVAL;
        if ($post->save()) {
            $message = MessageContent::getMessage('approval_success');
            return redirect()->route('admin.list_posts')->with('success', $message);
        } else {
            $message = MessageContent::getMessage('approval_failed');
            return redirect()->back()->with('failed', $message);
        }
    }
}
