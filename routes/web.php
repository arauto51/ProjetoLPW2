<?php
use App\Http\Controllers\Controller;
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

//route::resource('estudantes', App\Http\Controllers\EstudanteController::class);
Route::get('/listausuario1', 'App\Http\Controllers\EstudanteController@index6');
Route::get('/paginausuario', 'App\Http\Controllers\EstudanteController@index5')->name('paginaUsuario');
Route::get('/lista', 'App\Http\Controllers\EstudanteController@index4');
Route::get('/produto', 'App\Http\Controllers\EstudanteController@index2')->name('produto');
Route::get('/Principal', 'App\Http\Controllers\EstudanteController@index1')->name('principal');
Route::get('/', 'App\Http\Controllers\EstudanteController@index')->name('inicial');
Route::get('/cadastro', 'App\Http\Controllers\EstudanteController@create')->name('estudante');
Route::post('/cadastro', 'App\Http\Controllers\EstudanteController@store')->name('estudante');
//cadastro
Route::get('/cadastroP', 'App\Http\Controllers\EstudanteController@create1')->name('cadastroP');
Route::post('/cadastroP', 'App\Http\Controllers\EstudanteController@store1')->name('cadastroP');