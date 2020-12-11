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

Route::get('/', function () { return view('index'); });
Route::get('/sobre', function () { return view('sobre'); });
Route::get('/perdidos', function () { return view('perdidos'); });
Route::get('/achados', function () { return view('achados'); });
Route::get('/apoio', function () { return view('apoio'); });
Route::get('/contactos', function () { return view('contactos'); });


//Route::get('/sobre', 'HomeController@sobre')->name('sobre');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/sobre', [App\Http\Controllers\HomeController::class, 'sobre'])->name('sobre');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
