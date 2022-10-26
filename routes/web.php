<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/perfil','App\Http\Controllers\PerfilController@index')->name('perfil.index');

Route::get('/estacionamento', 'App\Http\Controllers\EstacionamentoController@index')->name('estacionamento.index');

Route::get('/estacionamento/{carros}','App\Http\Controllers\EstacionamentoController@show');

Route::get('/create','App\Http\Controllers\EstacionamentoController@create');

Route::post('/estacionamento/store','App\Http\Controllers\EstacionamentoController@store');

Route::get('/edit/{carros}','App\Http\Controllers\EstacionamentoController@edit');

Route::put('/update/{carros}','App\Http\Controllers\EstacionamentoController@update');

Route::delete('/delet/{carros}','App\Http\Controllers\EstacionamentoController@destroy');

Route::get('/configuracoes', 'App\Http\Controllers\ConfiguracoesController@index')->name('configuracoes.index');

Route::get('/contatos', 'App\Http\Controllers\ContatosController@index')->name('contatos.index');