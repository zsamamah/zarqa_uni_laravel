<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
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

Auth::routes(['register'=>false]);

Route::get('/login',function(){
    return view('index');
})->name('login');

Route::get('/', function () {
    //after finish make it view('index')
    // dd(Auth::user());
    if(Auth::user()){
        if(Auth::user()->role==='admin')
            return redirect('/admin');
        else if(Auth::user()->role==='doctor')
            return redirect('/doctor');
        else if(Auth::user()->role==='student')
            return redirect('/student');
    }
    else
        return redirect('/login');
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth','IsAdmin']],function(){
    Route::get('/admin',[AdminController::class,'home'])->name('admin');
    Route::get('/add-user',[AdminController::class,'create_user'])->name('create-user');
    Route::get('/users',[AdminController::class,'users'])->name('users');
    Route::post('add-user',[AdminController::class,'add_doctor'])->name('save-user');
    Route::post('add-student',[AdminController::class,'add_student'])->name('save-student');
    Route::delete('/delete-user/{user}',[AdminController::class,'delete_user'])->name('delete-user');
});

Route::group(['middleware'=>['auth','IsDoctor']],function(){
    Route::get('/doctor',[DoctorController::class,'home'])->name('doctor');
    Route::post('/change-password/{user}',[DoctorController::class,'change_password'])->name('doctor-change-password');
    Route::get('/add-project',[DoctorController::class,'add_project'])->name('add-project');
    Route::post('/add-project/{user}',[DoctorController::class,'save_project'])->name('save-project');
    Route::post('/select-presenter/{project}',[DoctorController::class,'select_presenter'])->name('select-presenter');
    Route::post('/update-date/{project}',[DoctorController::class,'update_date'])->name('update-date');
    Route::post('/update-link/{project}',[DoctorController::class,'update_link'])->name('update-link');
    Route::get('/marks/{project}',[DoctorController::class,'marks'])->name('marks');
    Route::post('/marks/{project}',[DoctorController::class,'update_marks'])->name('update-marks');
    Route::delete('/delete-member/{project}/{user}',[DoctorController::class,'delete_member'])->name('delete-member');
    Route::get('/grade/{project}',[GradeController::class,'grade_view'])->name('grades');
    Route::post('/grade/{project}',[GradeController::class,'update_grades'])->name('update-grades');
});

Route::group(['middleware'=>['auth','IsStudent']],function(){
    Route::get('/student',[StudentController::class,'home'])->name('student');
    Route::post('/student-change-password/{user}',[StudentController::class,'change_password'])->name('student-change-password');
    Route::get('/assign/{project}/{user}',[StudentController::class,'assign'])->name('assign');
    Route::post('/upload/{project}',[StudentController::class,'upload_doc'])->name('upload');
    Route::post('/student-data/{user}',[StudentController::class,'student_data'])->name('student-data');
});

Route::group(['middleware'=>['auth']],function(){
    Route::get('/download/{file}',[StudentController::class,'download'])->name('download');
});
Route::get('/search',[StudentController::class,'search'])->name('search');
