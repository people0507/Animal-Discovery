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


Route::get('/about', function () {
    return view('user.about');
})->name('user.about');
Route::get('/contract', function () {
    return view('user.contract');
})->name('user.contract');

// fillter list animal
Route::get('/fillter-list-animal', function () {
    return view('user.filter-list-animal');
})->name('user.fillter-list-animal');

// Có 3 list blog tham khảo thử
// list blog
// Route::get('/list-blog', function () {
//     return view('user.list-blog');
// })->name('user.list-blog');
// list blog
Route::get('/list-blog', function () {
    return view('user.list-blog-2');
})->name('user.list-blog');
Route::get('/list-blog-3', function () {
    return view('user.list-blog-3');
})->name('user.list-blog-3');

// blog detail
Route::get('/blog-detail', function () {
    return view('user.blog-detail');
})->name('user.blog-detail');

// social
Route::get('/social', function () {
    return view('user.social');
})->name('user.social');

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
    Route::get('/color/{id}', [AnimalDetailController::class, 'color'])->name('color');
    Route::get('/climate/{id}', [AnimalDetailController::class, 'climateZone'])->name('climate');
    Route::get('/get_animal_detail_infor/{id}', [AnimalDetailController::class, 'getAnimalDetailInfor'])->name('user.animal-detail');
    Route::get('/get_animal_detail_areas/{id}', [AnimalDetailController::class, 'getAnimalDetailAreas'])->name('user.cate-list');
    Route::get('/get_animal_detail/{id}', [AnimalDetailController::class, 'getAnimalDetail']);
    Route::get('/fillter-climate/{id}', [AnimalDetailController::class, 'climateZone'])->name('climate-zone');
    Route::get('/fillter-biome/{id}', [AnimalDetailController::class, 'biome'])->name('biome');
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
    Route::get('/list_user', [AdminController::class, 'listUser'])->name('admin.list_user');
    Route::get('/view_create_user', [AdminController::class, 'viewCreateUser'])->name('admin.view_add_user');
    Route::post('/create-user', [AdminController::class, 'createUser'])->name('admin.create_user');
    Route::get('/view_edit_user/{id}', [AdminController::class, 'viewEditUser'])->name('admin.view_edit_user');
    Route::post('/update_user/{id}', [AdminController::class, 'updateUser'])->name('admin.update_user');
    Route::delete('/delete_user/{id}', [AdminController::class, 'deleteUser'])->name('delete_user');

    // Animal
    Route::get('/list_animal', [AdminController::class, 'listAnimal'])->name('list_animal');
    Route::get('/animals/add', [AdminController::class, 'viewAddAnimal'])->name('admin.add-animal');
    Route::post('/create_animal_detail', [AdminController::class, 'createAnimalDetail'])->name('admin.create-animal');
    Route::get('/animals/edit/{id}', [AdminController::class, 'viewEditAnimal'])->name('admin.edit-animal');
    Route::post('/update_animal_detail/{id}', [AdminController::class, 'updateAnimalDetail'])->name('admin.update-animal');
    Route::delete('/delete_detail_animal/{id}', [AdminController::class, 'deleteAnimalDetail'])->name('admin.delete-animal');
    // Animal Image
    Route::get('/list_animal_image/{id}', [AdminController::class, 'listAnimalImage'])->name('list_animal_image');
    //Animal characteristic
    Route::get('/list_animal_area/{id}', [AdminController::class, 'listAnimalArea'])->name('list_animal_area');
    Route::get('/list_animal_climate/{id}', [AdminController::class, 'listAnimalClimate'])->name('list_animal_climate');
    Route::get('/list_animal_nation/{id}', [AdminController::class, 'listAnimalNation'])->name('list_animal_nation');
    Route::get('/list_animal_color/{id}', [AdminController::class, 'listAnimalColor'])->name('list_animal_color');
    Route::get('/list_animal_biome/{id}', [AdminController::class, 'listAnimalBiome'])->name('list_animal_biome');
    Route::get('/list_animal_ocean/{id}', [AdminController::class, 'listAnimalOcean'])->name('list_animal_ocean');


    Route::get('/create_img_animal_detail', [AdminController::class, 'addImgAnimalView'])->name('admin.add-image-animal');
    Route::post('/create_img_animal_detail', [AdminController::class, 'addImgAnimalStore'])->name('admin.add-image-animal-store');
    Route::get('/classification_animal', [AdminController::class, 'classificationView'])->name('admin.classification-animal');
    Route::post('/classification_animal', [AdminController::class, 'classificationStore'])->name('admin.classification-animal-store');

    // List posts
    Route::get('/list_posts', [AdminController::class, 'listPostsView'])->name('admin.list_posts');
});
