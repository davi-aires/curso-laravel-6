<?php

use Illuminate\Support\Facades\Route;

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
