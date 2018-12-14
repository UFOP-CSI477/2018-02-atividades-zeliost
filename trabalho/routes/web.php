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


Route::resource('empresas', 'EmpresaController');

Route::resource('servicos', 'ServicoController');

Route::get('/search', 'PageController@search')->name('search');


//Route::get('/create', 'ServicoController@create');

/* cadastro de uma prestaço de serviço (oferecimento) e busca por proximidade
 (cuidadores de idosos, serviço de suporte de TI, e Localizaçao no
Mapa - API Google Maps)

*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
