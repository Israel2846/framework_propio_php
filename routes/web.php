<?php

use Lib\Route;

Route::get('/', function () {
    return [
        'title' => 'Home',
        'content' => 'Hola desde la página de inicio'
    ];
});

Route::get('/contact', function () {
    return 'Hola desde la página de contacto';
});

Route::get('/about', function () {
    return 'Hola desde la página de acerca de';
});

Route::get('/courses/:slug', function ($slug) {
    return 'El curso es: ' . $slug;
});

Route::dispatch();
