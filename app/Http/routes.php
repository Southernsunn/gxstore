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

//Rutas del controlador c_front
Route::resource('gxstore', 'c_front');

Route::get('gxstore/account/login', array
(
  'as'    =>  'v_signin',
  'uses'  =>  'c_front@signin'
));

Route::get('gxstore/new-account/signup', array
(
  'as'    =>  'v_signup',
  'uses'  =>  'c_front@signup'
));

//Rutas del menu de productos.
  //Cases
  Route::resource('gxstore/products/cases', 'products\c_cases');
  //Cooling
  Route::resource('gxstore/products/cooling', 'products\c_cooling');
  //Cpu
  Route::resource('gxstore/products/cpu', 'products\c_cpu');
  //Graphics Cards
  Route::resource('gxstore/products/graphics-cards', 'products\c_graphicsCards');
  //Laptops
  Route::resource('gxstore/products/laptops', 'products\c_laptops');
  //Memory
  Route::resource('gxstore/products/memories', 'products\c_memory');
  //Monitor
  Route::resource('gxstore/products/monitors', 'products\c_monitor');
  //Motherboard
  Route::resource('gxstore/products/motherboards', 'products\c_motherboard');
  //Parts and Accessories
  Route::resource('gxstore/products/parts-accessories', 'products\c_partsAccessories');
  //PSU
  Route::resource('gxstore/products/psu', 'products\c_psu');
  //Software
  Route::resource('gxstore/products/software', 'products\c_software');
  //Storage
  Route::resource('gxstore/products/storage', 'products\c_storage');


//Rutas del controlador c_shopping_cart
Route::resource('gxstore/shopping-cart', 'c_shopping_cart');

//Rutas del controlador c_shopping_cart_details
Route::resource('gxstore/my-shopping-cart/details', 'c_shopping_cart_details');

//Ruta del controlador c_signup
Route::resource('gxstore/account/signup', 'c_signup');

//Ruta del controlador c_auth
Route::resource('gxstore/authenticate/get-access', 'c_auth');

Route::get('gxstore/account/logout', array
(
  'as'    =>  'logout',
  'uses'  =>  'c_auth@logout'
));

//Ruta para descargar archivos.
Route::get('download', function() {
    return Response::download(Input::get('path'));
});

Route::get('/', function () {
    return view('welcome');
});
