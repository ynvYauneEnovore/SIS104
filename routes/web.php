<?/**
*============================================================================
* Name        : web
* Authors     : Yovan Y. enovore
*               2
*               3
*               4
* Version     : 1.01
* Copyright   : VANCLAMA Ⓒ 2022
* Description : Creacion de rutas cargadas por middelware.
*============================================================================
*/
?>

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui es donde podemos registrar las rutas web para la aplicacion.
| Estas rutas son cargadas por el RoutesServiceProvider (Proveedor
| de Servicios de Rutas). 
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('loginodonto', function(){
	return view('Auth/loginodonto');
});

Route::get('loginoftalmo', function(){
	return view('Auth/loginoftalmo');
});

Route::get('/servis', function(){
	return view('servis');
});

Route::get('/nosotros', function(){
	return view('nosotros');
});

Route::get('/contactanos', function(){
	return view('contactanos');
});