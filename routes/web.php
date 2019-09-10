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

Route::get('/seunome/{nome?}', function ($nome = null) {
    if (isset($nome))
        return "Você não digitou nenhum nome.";
    return "Olá! Seja bem vindo, $nome!";
});

Route::get('/rotacomregras/{nome}/{n}', function ($nome, $n) {
    for ($i = 0; $i < $n; $i++)
        echo "Olá, $nome, seja bem vindo!<br>";
})->where('nome', '[A-Za-z]+')
    ->where('n', '[0-9]+');
