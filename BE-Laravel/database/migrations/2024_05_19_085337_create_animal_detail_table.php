<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_detail', function (Blueprint $table) {
            $table->id();
            $table->string('animal_name');
            $table->string('animal_scientific_name')->nullable();
            $table->text('animal_description')->nullable();
            $table->text('appearance_description')->nullable();
            $table->text('geography_description')->nullable();
            $table->text('habit_lifestyle_description')->nullable();
            $table->text('diet_nutrition_description')->nullable();
            $table->text('mating_habit_description')->nullable();
            $table->string('mating_behavior')->nullable();
            $table->string('reproduction_season')->nullable();
            $table->string('pregnancy_duration')->nullable();
            $table->string('baby_carrying')->nullable();
            $table->string('independent_age')->nullable();
            $table->text('population_threat')->nullable();
            $table->text('population_number')->nullable();
            $table->text('ecological_niche')->nullable();
            $table->text('fun_fact')->nullable();
            $table->string('top_speed')->nullable();
            $table->string('animal_length')->nullable();
            $table->string('animal_weight')->nullable();
            $table->string('animal_swing')->nullable();
            $table->string('population_size')->nullable();
            $table->string('avg_lifespan')->nullable();
            $table->string('animal_sound')->nullable();
            $table->string('animal_video')->nullable();
            $table->unsignedBigInteger('conservation_status_id');
            $table->foreign('conservation_status_id')->references('id')->on('conservation_status')->onDelete('cascade');
            $table->unsignedBigInteger('activity_time_id');
            $table->foreign('activity_time_id')->references('id')->on('activity_time')->onDelete('cascade');
            $table->unsignedBigInteger('diet_type_id');
            $table->foreign('diet_type_id')->references('id')->on('diet_type')->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->unsignedBigInteger('population_trending_id');
            $table->foreign('population_trending_id')->references('id')->on('population_trending')->onDelete('cascade');
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_detail');
    }
};
