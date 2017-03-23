<?php

Route::get('/', 'VentaController@getIndex');

Route::get('/ventas/deldia', 'VentaController@getVentasdeldia');

Route::get('/ventas/crear', 'VentaController@getCrear');

Route::post('/ventas/crear', 'VentaController@postCrear');

Route::get('/ventas/venta/{id}', 'VentaController@getVenta');

Route::get('/productos','ProductoController@getIndex');

Route::get('/productos/pendientes', 'ProductoController@getPendientes');

Route::get('/productos/entregados', 'ProductoController@getEntregados');

Route::get('/productos/crear', 'ProductoController@getCrear');

Route::post('/productos/crear', 'ProductoController@postCrear');

Route::post('/productos/producto/{id}', 'ProductoController@getProducto');