<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::resource('almacen/categoria', 'CategoriaController'); //Se declara una ruta de recursos

Route::resource('almacen/articulo', 'ArticuloController'); //Se declara una ruta de recursos

Route::resource('ventas/cliente', 'ClienteController'); //Se declara una ruta de recursos

Route::resource('compras/proveedor', 'ProveedorController'); //Se declara una ruta de recursos

Route::resource('compras/ingreso', 'IngresoController'); //Se declara una ruta de recursos

Route::resource('ventas/ventas', 'VentaController'); //Se declara una ruta de recursos

Auth::routes();

Route::get('/logout','Auth\LoginController@logout');

Route::resource('acceso/usuarios', 'UsuarioController'); //Se declara una ruta de recursos

Route::get('/{slug?}','HomeController@index');