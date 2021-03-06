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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas Categorias
Route::get('/categoria', 'CategoriaController@index')->name('categoria.index');
Route::get('/categoria/create', 'CategoriaController@create')->name('categoria.create');
Route::post('/categoria/store', 'CategoriaController@store')->name('categoria.store');
Route::delete('/categoria/{categoria}/destroy', 'CategoriaController@destroy')->name('categoria.destroy');


//Rutas Productos
Route::get('/producto', 'ProductoController@index')->name('producto.index');
