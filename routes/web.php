<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LangConrtroller;
use App\Http\Controllers\CourcesController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\KafedraController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Teacher\Teacher_create_cource_Controller;
use App\Http\Controllers\Mudir_create_cources_Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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


Route::get('/kafedra/{lang}', function ($lang) {
    App::setLocale($lang);
    session()->put('lang',$lang);

    return redirect()->back();
});

Route::prefix('admin')->name('admin.')->middleware('is_Admin')->group(function(){
    Route::get('/dashboard/', function(){
        return view('admin.layout.index')->name('user');
    })->name('index');
    Route::resource('/', UserController::class);
    Route::resource('/teacher', TeacherController::class);
    Route::resource('/group', GroupsController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/kafedra', KafedraController::class);
    Route::resource('/cources', CourcesController::class);
    Route::resource('/lang', LangConrtroller::class);
    Route::get('/rolls',[AdminController::class,'rolls']);
    Route::post('/kafedra/isactive/{id}',[KafedraController::class,'is_active']);
    Route::post('/group/isactive/{id}',[GroupsController::class,'is_active']);
    Route::post('/user/isactive/{id}',[UserController::class,'is_active']);
    Route::post('/teacher/isactive/{id}',[UserController::class,'is_active']);
    Route::post('/cources/isactive/{id}',[UserController::class,'is_active']);
});
Route::prefix('teacher')->name('teacher.')->middleware('is_Teacher')->group(function () {
    Route::get('/cource-response', [Teacher_create_cource_Controller::class, 'index']);
    Route::get('/teacher-profil', [PagesController::class, 't_profil']);
});
Route::prefix('mudir')->name('mudir.')->middleware('is_Mudir')->group(function () {
    Route::get('/cource-response', [Mudir_create_cources_Controller::class, 'index']);
    Route::get("/mudir-profil", [PagesController::class,'m_profil']);

});



Route::get("/", [PagesController::class,'index'])->name('home');
Route::get("/home", [PagesController::class,'index'])->name('home');
Route::get('/profil', [PagesController::class, 'profil'])->middleware('auth');
Route::get('/profil-edit', [PagesController::class, 'p_edit'])->middleware('auth');
Route::post('/profil-edit/save', [PagesController::class, 'p_save'])->middleware('auth');
Route::get('/student-profil', [PagesController::class, 's_profil']);
Route::get('/cource-single', [PagesController::class, 'c_single']);
Route::get('/search-cources', [PagesController::class, 's_cource']);


Auth::routes();






