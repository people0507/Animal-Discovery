<?php

namespace App\Http\Controllers;

use App\Models\AnimalImage;
use Illuminate\Http\Request;
use App\Models\AnimalDetail;
use Str;
use App\Models\Area;
use App\Http\MessageContent;
class AnimalDetailController extends Controller
{
    public function viewAnimalPage(){
        $areas = Area::all();
        return view('user.home',compact('areas'));
    }

    public function getAnimalDetailInfor($id){
        $data = AnimalDetail::find($id);
        $data->images;
        return view('user.animal-detail',compact('data'));
    }

    public function getAnimalDetailAreas($id){
        $data = AnimalDetail::whereHas('areas', function($query) use ($id) {
            $query->where('animal_area_id', $id);
        })->with(['images' => function($query) {;
        }])->get();
        return view('user.categories-animal',compact('data'));
    }

    public function getAnimalDetail($id){
        $animalDetail = AnimalDetail::where('id', $id)->first();;
        $areas = $animalDetail->areas;
        $nations = $animalDetail->nations;
        $colors = $animalDetail->colors;
        $habitats = $animalDetail->habitats;
        $topics = $animalDetail->topics;
        $oceans = $animalDetail->oceans;
    }
}
