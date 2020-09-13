<?php

use Illuminate\Support\Facades\Route;

Route::get('produtos/{id?}', function($id = ''){
    return "Produto(s) {$id}";
});

Route::get('/categoria/{flag}/comments', function ($flag){
    return "Produtos da categoria: {$flag}</br>Você está nos comentários das categorias";
});

/*
O nome da variavel só precisa ser condizente se houver algo específico dps da flag
*/

Route::get('/categoria/{flag}', function ($f){
    return "Produtos da categoria: {$f}";
});

Route::any('/any', function(){
    return 'any';
});

Route::match(['get', 'post'], '/match', function(){
    return 'match';
});

Route::get('/contato', function () {
    return view('site.contato');
});

Route::get('/empresa', function () {
    return view('empresa');
});

Route::get('/', function () {
    return view('welcome');
});
