<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'MainController@home');

Auth::routes();

Route::resource('products', 'ProductsController');

/*
 * GET  /products => index
 * POST /products => store
 * GET  /products/create => Formulario para crear
 * 
 * GET  /products/:id => Mostrar un producto con id
 * GET  /products/:id/edit => Formulario de edición
 * PUT/PATCH /products/:id => Actualiza el producto
 * DELETE   /products/:id => Elimina el producto
 */

Route::get('/home', 'HomeController@index');
