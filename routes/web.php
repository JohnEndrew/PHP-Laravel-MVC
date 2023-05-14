<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'index'])->name('index');//->middleware('log.acesso');
Route::get('sobre-nos/',[\App\Http\Controllers\SobreNosController::class,'SobreNos'])->name('Sobre-Nos');
Route::get('entrar/',[\App\Http\Controllers\EntrarController::class,'Entrar'])->name('Entrar');


Route::get('contato/',[\App\Http\Controllers\ContatoController::class,'contato'])->name('Contato');
Route::post('contato/',[\App\Http\Controllers\ContatoController::class,'contato'])->name('Contato');




Route::fallback(function(){
    echo 'Esta página não existe. <a href="'.Route('index').'">Clique aqui</a> para acessar';
});
