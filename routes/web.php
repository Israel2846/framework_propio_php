<?php

use Lib\Route;
use App\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

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
