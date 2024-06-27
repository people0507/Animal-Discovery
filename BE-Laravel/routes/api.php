<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnimalDetailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [LoginController::class, 'register']);


Route::post('/create', [AdminController::class, 'create']);

Route::prefix('animal_detail')->group(function () {
    Route::get('/get_animal_detail/{id}', [AnimalDetailController::class, 'getAnimalDetail']);
});

Route::prefix('animal_post')->group(function () {
    Route::post('/create_animal_post', [PostController::class, 'createPost']);
    Route::post('/edit_animal_post', [PostController::class, 'editPost']);
    Route::post('/delete_animal_post', [PostController::class, 'deletePost']);
    Route::post('/create_animal_comment', [PostController::class, 'createComment']);
    Route::post('/edit_animal_comment', [PostController::class, 'editComment']);
    Route::post('/delete_animal_comment', [PostController::class, 'deleteComment']);
    Route::post('/animal_like', [PostController::class, 'like']);
    Route::post('/animal_dislike', [PostController::class, 'dislike']);
});

Route::prefix('admin')->group(function () {
    Route::get('/list_user', [AdminController::class, 'listUser']);
    Route::get('/get_user/{id}', [AdminController::class, 'getUser']);
    Route::post('/update_user/{id}', [AdminController::class, 'updateUser']);
    Route::delete('/delete_user/{id}', [AdminController::class, 'deleteUser']);
    Route::get('/all_role', [AdminController::class, 'listRole']);
    Route::get('/list_animal', [AdminController::class, 'listAnimal']);
    Route::post('/create_animal_detail', [AdminController::class, 'createAnimalDetail']);
    Route::post('/edit_animal_detail', [AdminController::class, 'editAnimalDetail']);
    Route::delete('/delete_detail_animal/{id}', [AdminController::class, 'deleteAnimalDetail']);
});
