<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('home');

Route::get('/productos', function () {
    return view('productos.index');
})->name('productos.index');

Route::get('/categorias', function () {
    return view('categorias.index');
})->name('categorias.index');

Route::get('/carrito', function () {
    return view('carrito.index');
})->name('carrito.index');

Route::get('/contacto', function () {
    return view('contacto.index');
})->name('contacto.index');