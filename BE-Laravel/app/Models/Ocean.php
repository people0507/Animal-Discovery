<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocean extends Model
{
    use HasFactory;

    protected $table ='ocean';

    public function animalDetail()
    {
        return $this->belongsToMany(AnimalDetail::class,'animal_between_ocean','animal_detail_id', 'ocean_id');
    }
}
