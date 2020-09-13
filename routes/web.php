<?php

use Illuminate\Support\Facades\Route;

Route::get('login', function (){
    return '<h1>Página de login</h1>';
})->name('login');

/*
Grupo de rotas
*/

/*
Route::middleware([])->group(function (){ // Caso requeira autentificação colocar auth em middleware

    Route::prefix('admin')->group(function (){//Prefixo da URL

        Route::namespace('Admin')->group(function (){//Pasta Admin onde estão os controllers
            Route::name('admin.')->group(function (){
                Route::get('/dashboard', 'TesteController@dashboard')->name('dashboard');

                Route::get('/financeiro', 'TesteController@financeiro')->name('financeiro');

                Route::get('/cadastros', 'TesteController@cadastros')->name('cadastros');

                Route::get('/', function (){
                    return redirect()->route('admin.dashboard');
                })->name('home');
            });
        });

    });

});
*/

/*
                MESMA COISA QUE O DE CIMA PORÉM TODOS GRUPOS RECEBEM FUNCIONALIDADES DE CARA
                ----------------------------------------------------------------------------
                PORÉM NÃO FUNCIONA PARA NAME
*/

Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
], function (){
    Route::get('/dashboard', 'TesteController@dashboard')->name('admin.dashboard');

    Route::get('/financeiro', 'TesteController@financeiro')->name('admin.financeiro');

    Route::get('/cadastros', 'TesteController@cadastros')->name('admin.cadastros');

    Route::get('/', function (){
         return redirect()->route('admin.dashboard');
    })->name('home');
});

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
