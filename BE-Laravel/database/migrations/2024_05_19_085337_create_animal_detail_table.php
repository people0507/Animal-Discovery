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
            $table->string('animal_name')->nullable();
            $table->string('animal_scientific_name')->nullable();
            $table->text('animal_description')->nullable();
            $table->text('appearance_description')->nullable();
            $table->text('geography_description')->nullable();
            $table->text('habit_lifestyle_description')->nullable();
            $table->text('diet_nutrition_description')->nullable();
            $table->text('mating_habit_description')->nullable();
            $table->text('population_description')->nullable();
            $table->text('fun_fact')->nullable();
            $table->string('animal_length')->nullable();
            $table->string('animal_height')->nullable();
            $table->string('animal_weight')->nullable();
            $table->integer('population_size')->nullable();
            $table->string('avg_lifespan')->nullable();
            $table->string('animal_sound')->nullable();
            $table->string('animal_video')->nullable();
            $table->unsignedBigInteger('conservation_status_id');
            $table->foreign('conservation_status_id')->references('id')->on('conservation_status')->onDelete('cascade');
            $table->unsignedBigInteger('activity_time_id');
            $table->foreign('activity_time_id')->references('id')->on('activity_time')->onDelete('cascade');
            $table->unsignedBigInteger('diet_type_id');
            $table->foreign('diet_type_id')->references('id')->on('diet_type')->onDelete('cascade');
            $table->unsignedBigInteger('animal_category_id');
            $table->foreign('animal_category_id')->references('id')->on('animal_category')->onDelete('cascade');
            $table->unsignedBigInteger('population_trending_id');
            $table->foreign('population_trending_id')->references('id')->on('animal_population_trending')->onDelete('cascade');
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
