<?php

namespace App\Http\Controllers;

use App\Models\AnimalImage;
use Illuminate\Http\Request;
use App\Models\AnimalDetail;
use Str;
use App\Http\MessageContent;
class AnimalDetailController extends Controller
{
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
