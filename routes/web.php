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

Route::prefix('/app')->group(function () {

    Route::get('/', function () {
        return view("app");
    })->name('app');

    Route::get('/user', function () {
        return view("user");
    })->name('app.user');

    Route::get('/profile', function () {
        return view("profile");
    })->name('app.profile');
});

Route::get('/produtos', function () {
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook</li>";
    echo "<li>Impressora</li>";
    echo "<li>Mouse</li>";
    echo "</ol>";
})->name('meusprodutos');

Route::redirect('todosprodutos', 'produtos', 301);

Route::get('todosprodutos2', function () {
    return redirect()->route('meusprodutos');
});
