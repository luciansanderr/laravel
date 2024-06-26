<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobreNos');
Route::get('/contatos', [ContatoController::class, 'contato'])->name('site.contatos');
Route::get('/login', function () {return 'login';})->name('site.login');
//agrupando com prefix as rotas
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function () {return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', function () {return 'fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function() {return 'produtos';})->name('app.produtos');
});

// Route::get('/contatos/{nome}/{sobrenome}/{apelido?}', function ($nome, $sobrenome, $apelido = 'Não foi inserido nada'){
//     echo "'Retornando: $nome - $sobrenome - $apelido";
// });

// chamando a rota, um tratamento de erro do próprio laravel
// Route::get('/produto/{nome}/{categoria_id}', function (string $nome, int $categoria_id){
//     echo "'Retornando: $nome - $categoria_id";
// })->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');
