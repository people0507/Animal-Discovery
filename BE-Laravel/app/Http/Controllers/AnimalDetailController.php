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
use App\Models\Color;
use App\Models\Ocean;
use App\Models\Post;

class AnimalDetailController extends Controller
{
    public function viewAnimalPage()
    {
        $areas = Area::all();
        $tropical = Climate::where('id', Climate::TROPICAL)->first();
        $arid = Climate::where('id', Climate::ARID)->first();
        $temperate = Climate::where('id', Climate::TEMPERATE)->first();
        $cold = Climate::where('id', Climate::COLD)->first();
        $polar = Climate::where('id', Climate::POLAR)->first();
        $green = Color::where('id', Color::GREEN)->first();
        $blue = Color::where('id', Color::BLUE)->first();
        $red = Color::where('id', Color::RED)->first();
        $yellow = Color::where('id', Color::YELLOW)->first();
        $orange = Color::where('id', Color::ORANGE)->first();
        $brown = Color::where('id', Color::BROWN)->first();
        $white = Color::where('id', Color::WHITE)->first();
        $black = Color::where('id', Color::BLACK)->first();
        $gray = Color::where('id', Color::GRAY)->first();
        $purple = Color::where('id', Color::PURPLE)->first();
        $pacific = OCEAN::where('id', Ocean::PACIFIC)->first();
        $indian = OCEAN::where('id', Ocean::INDIAN)->first();
        $atlantic = OCEAN::where('id', Ocean::ATLANTIC)->first();
        $arctic = OCEAN::where('id', Ocean::ARCTIC)->first();
        return view('user.home', compact('areas', 'tropical', 'arid', 'temperate', 'cold', 'polar', 'green', 'blue', 'red', 'yellow', 'orange', 'brown', 'white', 'black', 'gray', 'purple', 'pacific', 'indian', 'atlantic', 'arctic'));
    }

    public function viewAnimalBlog(){
        $posts = Post::where('status',Post::APPROVAL)->get();
        return view('user.list-blog-2',compact('posts'));
    }

    public function color($id)
    {
        $data = AnimalDetail::whereHas('colors', function ($query) use ($id) {
            $query->where('color_id', $id);
        })->with(['images' => function ($query) {;
        }])->get();
        $data1 = Color::where('id', $id)->first();
        return view('user.categories-animal', compact('data', 'data1'));
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
        $data->diet;
        $habitImage = Image::where('detail_id', $data->id)->inRandomOrder()->first();
        $populationImage = Image::where('detail_id', $data->id)->inRandomOrder()->first();
        $conservationStatus = ConservationStatus::all();

        $photos = [
            ['url' => 'https://media.wired.com/photos/593261cab8eb31692072f129/master/pass/85120553.jpg'],
            ['url' => 'https://media.wired.com/photos/593261cab8eb31692072f129/master/pass/85120553.jpg'],
            ['url' => 'https://media.wired.com/photos/593261cab8eb31692072f129/master/pass/85120553.jpg'],
            ['url' => 'https://media.wired.com/photos/593261cab8eb31692072f129/master/pass/85120553.jpg'],
            ['url' => 'https://media.wired.com/photos/593261cab8eb31692072f129/master/pass/85120553.jpg'],
        ];

        $videos = [
            'url' => 'https://www.youtube-nocookie.com/embed/r2t0MidPKXQ?;',
        ];

        return view('user.animal-detail', compact('data', 'habitImage', 'populationImage', 'conservationStatus', 'photos', 'videos'));
    }

    public function getAnimalDetailAreas($id)
    {
        $data = AnimalDetail::whereHas('areas', function ($query) use ($id) {
            $query->where('area_id', $id);
        })->with(['images' => function ($query) {;
        }])->get();
        $data1 = Area::where('id', $id)->first();
        return view('user.categories-animal', compact('data', 'data1'));
    }

    public function climateZone($id)
    {
        $data = AnimalDetail::whereHas('climates', function ($query) use ($id) {
            $query->where('climate_id', $id);
        })->with(['images' => function ($query) {;
        }])->get();
        $count = $data->count();
        $data1 = Climate::where('id', $id)->first();
        return view('user.filter-list-animal', compact('data', 'data1', 'count'));
    }

    public function biome($id)
    {
        $data = AnimalDetail::whereHas('biomes', function ($query) use ($id) {
            $query->where('biome_id', $id);
        })->with(['images' => function ($query) {;
        }])->get();
        $count = $data->count();
        $data1 = Biome::where('id', $id)->first();
        return view('user.filter-list-animal', compact('data', 'data1', 'count'));
    }
}
