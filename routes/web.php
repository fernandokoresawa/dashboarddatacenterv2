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
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/chartmain', 'HomeController@getAllDadosAllSensores')->name('chartmain');

Route::get('getalerta', 'HomeController@getAlerta')->name('getalerta');

Route::resource('/historico', 'HistoricoController');

Route::get('/getshutdown', 'ShutdownController@index')->name('getshutdown');

Route::put('shutdown', 'ShutdownController@shutdown')->name('shutdown');

Route::get('tabela', 'HistoricoController@index')->name('tabela');

Route::get('alerta', 'AlertaController@index')->name('alerta');

Route::get('filtro', 'HistoricoController@filtro')->name('filtro');
