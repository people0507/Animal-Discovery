<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\AnimalDetail;
use Str;
use App\Models\Area;
use App\Http\MessageContent;

class AnimalDetailController extends Controller
{
    public function viewAnimalPage()
    {
        $areas = Area::all();
        return view('user.home', compact('areas'));
    }

    public function getAnimalDetailInfor($id)
    {
        $data = AnimalDetail::find($id);
        $data->images;
        $data->areas;
        $data->nations;
        $data->trend;
        $data->status;
        $habitImage = Image::where('detail_id',$data->id)->inRandomOrder()->first();
        $populationImage = Image::where('detail_id',$data->id)->inRandomOrder()->first();
        return view('user.animal-detail', compact('data', 'habitImage','populationImage'));
    }

    public function getAnimalDetailAreas($id)
    {
        $data = AnimalDetail::whereHas('areas', function ($query) use ($id) {
            $query->where('area_id', $id);
        })->with(['images' => function ($query) {;
        }])->get();
        return view('user.categories-animal', compact('data'));
    }

    public function getAnimalDetail($id)
    {
        $animalDetail = AnimalDetail::where('id', $id)->first();;
        $areas = $animalDetail->areas;
        $nations = $animalDetail->nations;
        $colors = $animalDetail->colors;
        $biomes = $animalDetail->biomes;
        $topics = $animalDetail->topics;
        $oceans = $animalDetail->oceans;
    }
}
