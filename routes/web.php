<?php


//produtos
Route::get('/produtos/lista_produto', 'ProdutoController@lista');
Route::get('/produtos/novo_produto', 'ProdutoController@novo');
Route::get('/produtos/mostra/{id}','ProdutoController@mostra')->where('id', '[0-9]+');
Route::get('/produtos/alterar/{id}','ProdutoController@alterar')->where('id', '[0-9]+');
Route::post('/produtos/atualizar', 'ProdutoController@atualizar');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/produtos/json', 'ProdutoController@listaJson');


//categorias
Route::get('/categorias/lista_categoria', 'CategoriaController@lista');
Route::get('/categorias/novo_categoria', 'CategoriaController@novo');
Route::get('/categorias/mostra/{id}','CategoriaController@mostra')->where('id', '[0-9]+');
Route::get('/categorias/alterar/{id}','CategoriaController@alterar')->where('id', '[0-9]+');
Route::post('/categorias/atualizar', 'CategoriaController@atualizar');
Route::post('/categorias/adiciona', 'CategoriaController@adiciona');
Route::get('/categorias/remove/{id}', 'CategoriaController@remove');
Route::get('/categorias/json', 'CategoriaController@listaJson');



Route::get('home', 'HomeController@index');
Route::get('', 'HomeController@index');
Auth::routes();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');