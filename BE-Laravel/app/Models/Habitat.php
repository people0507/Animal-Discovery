<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitat extends Model
{
    use HasFactory;

    protected $table ='animal_habitat';

    public function animalDetail()
    {
        return $this->belongsToMany(Habitat::class,'animal_between_habitat','animal_detail_id', 'animal_habitat_id');
    }
}
