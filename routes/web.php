<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobrenos');
Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato',[\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::get('/login',[\App\Http\Controllers\ContatoController::class,'contato']);

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){ return 'Clientes'; });
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class,'index']);
    Route::get('/produtos', function(){ return 'Produtos'; });
});

Route::get('/teste/{p1}/{p2}',[App\Http\Controllers\TesteController::class,'teste']);

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="/">clique aqui</a> para ir para página inicial';
});



