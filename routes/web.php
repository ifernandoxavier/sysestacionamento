<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstacionamentoController;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/perfil','App\Http\Controllers\PerfilController@index')->name('perfil.index');
Route::get('/configuracoes', 'App\Http\Controllers\ConfiguracoesController@index')->name('configuracoes.index');
Route::get('/contatos', 'App\Http\Controllers\ContatosController@index')->name('contatos.index');

Route::resource('/estacionamento', EstacionamentoController::class);
