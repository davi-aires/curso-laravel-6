<?php

use Illuminate\Support\Facades\Route;

/*
Rotas nomeadas
*/

Route::get('redirect3', function(){
    return redirect()->route('url.name');
});

Route::get('name-url', function(){
    return 'Hey estranho';
})->name('url.name');

/*
Redirects de rotas
*/

Route::view('/view', 'welcome');

Route::redirect('redirect1', 'redirect2');

// OU USE O EXEMPLO COMENTADO A BAIXO

// Route::get('redirect1', function(){
//     return redirect('/redirect2');
// });

Route::get('redirect2', function(){
    return 'Você caiu na redirect 2!';
});

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
