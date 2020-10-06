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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');


// Certidao
Route::get('/certidaos', 'CertidaoController@index')
    ->name('certidao');
Route::get('/certidaos/adicionar', 'CertidaoController@adicionar')
    ->name('certidao.adicionar');
Route::post('/certidaos/salvar', 'CertidaoController@salvar')
    ->name('certidao.salvar');
Route::get('/certidaos/editar/{id}', 'CertidaoController@editar')
    ->name('certidao.editar');
Route::put('/certidaos/atualizar/{id}', 'CertidaoController@atualizar')
->name('certidao.atualizar');
Route::delete('/certidaos/deletar/{id}', 'CertidaoController@deletar')
->name('certidao.deletar');


// Contratos

Route::get('/contratos', 'ContratoController@index')
    ->name('contrato');
Route::get('/contratos/adicionar', 'ContratoController@adicionar')
    ->name('contrato.adicionar');
Route::post('/contratos/salvar', 'ContratoController@salvar')
    ->name('contrato.salvar');
Route::get('/contratos/editar/{id}', 'ContratoController@editar')
    ->name('contrato.editar');
Route::put('/contratos/atualizar/{id}', 'ContratoController@atualizar')
->name('contrato.atualizar');
Route::delete('/contratos/deletar/{id}', 'ContratoController@deletar')
->name('contrato.deletar');    


//tabeliões

Route::get('/tabeliaos', 'TabeliaoController@index')
    ->name('tabeliao');
Route::get('/tabeliaos/adicionar', 'TabeliaoController@adicionar')
    ->name('tabeliao.adicionar');
Route::post('/tabeliaos/salvar', 'TabeliaoController@salvar')
    ->name('tabeliao.salvar');
Route::get('/tabeliaos/editar/{id}', 'TabeliaoController@editar')
    ->name('tabeliao.editar');
Route::put('/tabeliaos/atualizar/{id}', 'TabeliaoController@atualizar')
->name('tabeliao.atualizar');
Route::delete('/tabeliaos/deletar/{id}', 'TabeliaoController@deletar')
->name('tabeliao.deletar');