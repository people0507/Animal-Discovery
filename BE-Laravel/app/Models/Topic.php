<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $table ='topic';

    public function animalDetail()
    {
        return $this->belongsToMany(AnimalDetail::class,'animal_between_topic','animal_detail_id', 'topic_id');
    }
}
