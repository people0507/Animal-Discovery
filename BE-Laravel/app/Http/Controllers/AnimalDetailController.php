<?php

namespace App\Http\Controllers;

use App\Models\AnimalImage;
use Illuminate\Http\Request;
use App\Models\AnimalDetail;
use Str;

class AnimalDetailController extends Controller
{
    public function createAnimalDetail(Request $request){
        $data = $request->all();
        if(isset($data) && $data != null){
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
            $animalDetail->animal_sound=$data['animal_sound'];
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
                    $uniqueFileName = Str::uuid()->toString() . '.' . $img['animal_image']->extension();
                    $request->image->move(public_path('animal_images'), $uniqueFileName);
                    $animalImage = new AnimalImage();
                    $animalImage->image_name = $uniqueFileName;
                    $animalImage->detail_id = 1;
                    $animalImage->save();
                }
            }
            return response()->json();
        }
    }
}
