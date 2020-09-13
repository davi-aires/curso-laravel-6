<?php

use Illuminate\Support\Facades\Route;

Route::get('/contato', function () {
    return view('site.contato');
});

Route::get('/empresa', function () {
    return view('empresa');
});

Route::get('/', function () {
    return view('welcome');
});
