<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    //after finish make it view('index')
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth','IsAdmin']],function(){
    Route::get('/admin',[AdminController::class,'home'])->name('admin');
    Route::get('/add-user',[AdminController::class,'create_user'])->name('create-user');
    Route::get('/users',[AdminController::class,'users'])->name('users');
    Route::post('add-user',[AdminController::class,'add_doctor'])->name('save-user');
    Route::post('add-student',[AdminController::class,'add_student'])->name('save-student');
    Route::delete('/delete-user/{user}',[AdminController::class,'delete_user'])->name('delete-user');
});
