<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('user.home');
})->name('user.home');
Route::get('/about', function () {
    return view('user.about');
})->name('user.about');
Route::get('/contract', function () {
    return view('user.contract');
})->name('user.contract');

















// ----------- Admin -----------
Route::get('/dashboard',function () {
        return view('admin.home');
})->name('admin.home');

    // Animal
    Route::get('/animals/list',function () {
            return view('admin.animals.list-animal');
    })->name('admin.list-animal');
    Route::get('/animals/add',function () {
            return view('admin.animals.add-animal');
    })->name('admin.add-animal');
    // User
    Route::get('/users/list', function () {
        return view('admin.users.list-user');
    })->name('admin.list-user');
    Route::get('/users/add', function () {
        return view('admin.users.add-user');
    })->name('admin.add-user');
