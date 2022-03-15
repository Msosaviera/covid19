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
Route::get('consulta/{id}', 'ConsultamedicaController@consulta')->name('registroconsulta');
Route::resource('consultamedica', 'ConsultamedicaController');
Route::get('receta/{id}', 'RecetamedicaController@receta')->name('recetamedica');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('nosotros.index', 'NosotrosController@index')->name('nosotros');
Route::resource('estadistica', 'EstadisticaController');
Route::resource('test', 'TestController');
Route::get('estadistica.mundial', 'EstadisticaController@mundial')->name('mundial');
Route::resource('contacto', 'ContactoController');
Route::get('covid.conocelo', 'CovidController@conocelo')->name('conocelo');
Route::get('covid.preparate', 'CovidController@preparate')->name('preparate');
Route::get('covid.actua', 'CovidController@actua')->name('actua');
Route::resource('preguntas', 'PreguntasController')->only('index','create','store');
Route::resource('medico', 'MedicoController');
Route::resource('recetamedica', 'RecetamedicaController');
Route::resource('secretaria', 'SecretariaController');
Route::resource('paciente', 'PacienteController');
Route::resource('citamedica', 'CitamedicaController');
Route::resource('user', 'UserController');
Route::get('excelcita/', 'CitamedicaController@excelcita')->name('excelcita');
Route::get('excelconsulta/', 'ConsultamedicaController@excelconsulta')->name('excelconsulta');
Route::get('excelpaciente/', 'PacienteController@excelpaciente')->name('excelpaciente');
Route::get('excelreceta/', 'RecetamedicaController@excelreceta')->name('excelreceta');



