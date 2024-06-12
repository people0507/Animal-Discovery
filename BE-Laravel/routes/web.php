<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnimalDetailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






// ----------- User -----------
// Route::get('/', function () {
//     return view('user.home');
// })->name('user.home');
Route::get('/', [AnimalDetailController::class, 'viewAnimalPage'])->name('user.home');

// fillter list animal
Route::get('/fillter-list-animal', function () {
    return view('user.fillter-list-animal');
})->name('user.fillter-list-animal');

Route::get('/about', function () {
    return view('user.about');
})->name('user.about');
Route::get('/contract', function () {
    return view('user.contract');
})->name('user.contract');
// Route::get('/categories-list', function () {
//     return view('user.categories-animal');
// })->name('user.cate-list');
// Route::get('/animal-detail', function () {
//     return view('user.animal-detail');
// })->name('user.animal-detail');









// ----------- Admin -----------
Route::get('/dashboard', function () {
    return view('admin.home');
})->name('admin.home');

// Animal
Route::get('/animals/list', function () {
    return view('admin.animals.list-animal');
})->name('admin.list-animal');
Route::get('/animals/add', function () {
    return view('admin.animals.add-animal');
})->name('admin.add-animal');
// User
// Route::get('/users/list', function () {
//     return view('admin.users.list-user');
// })->name('admin.list-user');
// Route::get('/users/add', function () {
//     return view('admin.users.add-user');
// })->name('admin.add-user');

Route::get('/view_login', [LoginController::class, 'viewLogin'])->name('view_login');
Route::get('/view_register', [LoginController::class, 'viewRegister'])->name('view_register');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [LoginController::class, 'register'])->name('register');


Route::post('/create', [AdminController::class, 'create']);

Route::prefix('animal_detail')->group(function () {
    Route::get('/view_animal_page', [AnimalDetailController::class, 'viewAnimalPage'])->name('user.home');
    Route::get('/get_animal_detail_infor/{id}', [AnimalDetailController::class, 'getAnimalDetailInfor'])->name('user.animal-detail');
    Route::get('/get_animal_detail_areas/{id}', [AnimalDetailController::class, 'getAnimalDetailAreas'])->name('user.cate-list');
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

Route::prefix('admin')->middleware('checklogin')->group(function () {
    Route::get('/view_create_user', [AdminController::class, 'viewCreateUser'])->name('view_create_user');
    Route::get('/list_user', [AdminController::class, 'listUser'])->name('list_user');
    Route::post('/createUser', [AdminController::class, 'createUser'])->name('create_user');
    Route::get('/get_user/{id}', [AdminController::class, 'getUser']);
    Route::post('/update_user/{id}', [AdminController::class, 'updateUser']);
    Route::delete('/delete_user/{id}', [AdminController::class, 'deleteUser'])->name('delete_user');
    Route::get('/all_role', [AdminController::class, 'listRole']);
    Route::get('/list_animal', [AdminController::class, 'listAnimal']);
    Route::post('/create_animal_detail', [AdminController::class, 'createAnimalDetail']);
    Route::post('/edit_animal_detail', [AdminController::class, 'editAnimalDetail']);
    Route::delete('/delete_detail_animal/{id}', [AdminController::class, 'deleteAnimalDetail']);
});
