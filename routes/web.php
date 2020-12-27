<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagesController ;

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
    return view('welcome');
});

Auth::routes();



//

Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/etudiant', 'Auth\LoginController@showEtudiantLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/etudiant', 'Auth\RegisterController@showEtudiantRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/etudiant', 'Auth\LoginController@etudiantLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/etudiant', 'Auth\RegisterController@createEtudiant');

//Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/etudiant', 'etudiant');

//
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/stages','StagesController', ['as'=>'stages']);
Route::get('/stages.create',[StagesController::class, 'create']);
Route::post('/stages.store',[StagesController::class, 'store']);
Route::get('/stages.index',[StagesController::class, 'index']);
Route::delete('/stages.destroy/{id}',[StagesController::class, 'destroy']);
Route::get('/stages.edit/{id}',[StagesController::class, 'edit']);
Route::put('/stages.update/{id}',[StagesController::class, 'update']);



Route::post('/statistiques','StatistiquesController@mail');
Route::view('/form','statistiques.form1');
//Route::get('/edit',[StagesController::class, 'edit']);href="{{ route('pages.edit', $case->id)}}"
//Route::get('/read',[StagesController::class, 'read']);
//Route::get('/pages/addstage','StagesController@create')->name('addstage');
//Route::post('/pages/savestage', 'StagesController@add')->name('savestage');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

