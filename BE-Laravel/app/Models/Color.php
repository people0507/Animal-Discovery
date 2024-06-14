<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $table ='color';

    public function animalDetail()
    {
        return $this->belongsToMany(AnimalDetail::class,'animal_between_nation','animal_detail_id', 'color_id');
    }
}
