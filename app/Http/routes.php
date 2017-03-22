<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('ventas.index');
});

Route::get('/ventas', function () {
    return 'ventas raiz';
});

Route::get('/ventas/crear', function () {
    return 'ventas crear';
});
Route::post('/ventas/crear', function () {
    return 'ventas crear';
});

Route::get('/ventas/recibo/{id}', function ($id) {
    return 'ventas recibo '.$id;
});

Route::get('/productos', function () {
    return 'productos raiz';
});

Route::get('/productos/pendientes', function () {
    return 'productos pendientes';
});

Route::get('/productos/entregados', function () {
    return 'productos entregados';
});

Route::get('/productos/crear', function () {
    return 'productos crear';
});
Route::post('/productos/crear', function () {
    return 'productos crear';
});