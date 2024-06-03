<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nation extends Model
{
    use HasFactory;
    protected $table ='animal_nation';

    public function animalDetail()
    {
        return $this->belongsToMany(AnimalDetail::class,'animal_between_nation','animal_detail_id', 'animal_nation_id');
    }
}
