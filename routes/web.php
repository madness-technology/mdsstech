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
    return view('welcome');
});

Route::get('inicio', function () {
    return view('inicio');
});


Route::get('informacion', function () {
    return view('informacion');
});


Route::get('noticias', function () {
    return view('noticias');
});

Route::get('tecnologias', function () {
    return view('tecnologias');
});

Route::group(['prefix'=> 'tecnologias'],function(){

    Route::get('django', function () {
        return view('tecnologias_rutas.djangoFramework');
    });
    
    Route::get('laravel', function () {
        return view('tecnologias_rutas.laravelFramework');
    });
    
    Route::get('net', function () {
        return view('tecnologias_rutas.netFramework');
    });

    Route::get('java', function () {
        return view('tecnologias_rutas.javaFramework');
    });
});