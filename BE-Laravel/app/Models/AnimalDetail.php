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
}
