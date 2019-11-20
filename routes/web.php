<?php

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
    //session()->flush();
    return view('welcome');
});

Auth::routes(); //vendor/laravel/framework/src/Illuminate/Routing/Router.php , en el método auth():

Route::get('/noticias', 'NoticiasController@index')->name('noticias')->middleware('auth');
Route::post('/nueva_noticia','NoticiasController@create')->name('nueva.noticia')->middleware('auth');
Route::get('/testing',function (){
    return view('testing');
})->name('testing');


