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

Route::get('/teste', function () {
    return "Hello, World!";
});

Route::get('/ola/{nome}/{sobrenome}', function ($nome, $sb) { // Parâmetro na Rota {} - Não necessário ser o mesmo nome da variável
    echo "Olá! Seja bem vindo, {$nome} {$sb}!";
});
