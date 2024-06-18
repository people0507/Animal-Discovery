<?php

namespace App\Http\Controllers;

use App\Models\Biome;
use App\Models\Climate;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\AnimalDetail;
use Str;
use App\Models\Area;
use App\Http\MessageContent;
use App\Models\ConservationStatus;

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
        $data->biomes;
        $data->climates;
        $habitImage = Image::where('detail_id',$data->id)->inRandomOrder()->first();
        $populationImage = Image::where('detail_id',$data->id)->inRandomOrder()->first();
        $conservationStatus = ConservationStatus::all();
        return view('user.animal-detail', compact('data', 'habitImage','populationImage','conservationStatus'));
    }

    public function getAnimalDetailAreas($id)
    {
        $data = AnimalDetail::whereHas('areas', function ($query) use ($id) {
            $query->where('area_id', $id);
        })->with(['images' => function ($query) {;
        }])->get();
        return view('user.categories-animal', compact('data'));
    }

    public function climateZone($id){
        $data = AnimalDetail::whereHas('climates', function ($query) use ($id) {
            $query->where('climate_id', $id);
        })->with(['images' => function ($query) {;
        }])->get();
        $count = $data->count();
        $data1 = Climate::where('id',$id)->first();
        return view('user.filter-list-animal', compact('data','data1','count'));
    }

    public function biome($id){
        $data = AnimalDetail::whereHas('biomes', function ($query) use ($id) {
            $query->where('biome_id', $id);
        })->with(['images' => function ($query) {;
        }])->get();
        $count = $data->count();
        $data1 = Biome::where('id',$id)->first();
        return view('user.filter-list-animal', compact('data','data1','count'));
    }

}
