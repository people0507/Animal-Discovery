<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalDetail extends Model
{
    use HasFactory;
    protected $table = 'animal_detail';
    protected $fillable = 
    ['animal_name','animal_scientific_name','animal_description','appearance_description',
    'geography_description','habit_lifestyle_description','diet_nutrition_description',
    'mating_habit_description','population_description','fun_fact','animal_length',
    'animal_height','animal_weight','population_size','avg_lifespan','animal_sound','animal_video'];

    public function areas()
    {
        return $this->belongsToMany(Area::class,'animal_between_area','animal_detail_id', 'animal_area_id');
    }

    public function nations()
    {
        return $this->belongsToMany(Nation::class,'animal_between_nation','animal_detail_id', 'animal_nation_id');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class,'animal_between_color','animal_detail_id', 'animal_color_id');
    }

    public function habitats()
    {
        return $this->belongsToMany(Habitat::class,'animal_between_habitat','animal_detail_id', 'animal_habitat_id');
    }

    public function oceans()
    {
        return $this->belongsToMany(Ocean::class,'animal_between_ocean','animal_detail_id', 'animal_ocean_id');
    }

    public function topics()
    {
        return $this->belongsToMany(Topic::class,'animal_between_topic','animal_detail_id', 'topic_id');
    }

    public function images()
    {
        return $this->hasOne(AnimalImage::class,'detail_id');
    }
}
