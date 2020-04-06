<?php

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
    return view('welcome');
})->name('inicio');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('nosotros.index', 'NosotrosController@index')->name('nosotros');
Route::resource('estadistica', 'EstadisticaController');
Route::get('contacto.index', 'ContactoController@index')->name('contacto');
Route::get('covid.conocelo', 'CovidController@conocelo')->name('conocelo');
Route::get('covid.preparate', 'CovidController@preparate')->name('preparate');
Route::get('covid.actua', 'CovidController@actua')->name('actua');
Route::resource('preguntas', 'PreguntasController')->only('index','create','store');


