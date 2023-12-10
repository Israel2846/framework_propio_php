<?php

use Lib\Route;

Route::get('/', function () {
    echo 'Hola desde la página principal';
});

Route::get('/contact', function () {
    echo 'Hola desde la página de contacto';
});
