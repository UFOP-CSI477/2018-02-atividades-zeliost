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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    return view('sobre');
    //return view('aplicacao.sobre'); para quando tem uma pasta "aplicacao"
});

Route::get('/lista', function () {

  $alunos = ['Ana','Brígida', 'Hugo', 'Pedro'];
  return view('lista')->with('alunos', $alunos);

});
*/
Route::get('/', 'PaginasController@index'); // antes era o que esta comentado acima

Route::get('/info', 'PaginasController@about');

Route::get('/lista', 'PaginasController@listar');

Route::get('/contato', 'PaginasController@contato');

Route::get('/estados','EstadoController@index');

Route::get('/cidades','CidadeController@index');

//Route::get('/estados', 'EstadoController@index');
Route::resource('/estados', 'EstadoController');

Route::resource('/cidades', 'CidadeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
