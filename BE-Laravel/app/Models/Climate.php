<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Climate extends Model
{
    use HasFactory;

    protected $table ='climate_zone';

    public function animalDetail()
    {
        return $this->belongsToMany(AnimalDetail::class,'animal_between_climate','animal_detail_id', 'climate_id');
    }
}
