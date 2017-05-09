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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/user', 'TesteController@index');
Route::get('/criaracusacao', 'AcusacaoController@criar');
Route::get('/criardenuncia', 'DenunciaController@criar');
Route::post('/gravaracusacao', 'AcusacaoController@gravar');
Route::post('/gravardenuncia', 'DenunciaController@gravar');
Route::get('/listaracusacao', 'AcusacaoController@index');
