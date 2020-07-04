<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;



Route::get('/', 'RedSocialController@index');
Route::post('/rutaprueba', 'PruebaController@store')->name('rutaprueba');
Route::get('/home', 'RedSocialController@index')->name('home');

Route::resource('certificacion', 'CertificacionController');

Route::get('admin', function () {
    return view('admin.dashboard');
});

Route::get('/prueba', function(){
    # code...
    return view('prueba');
});

Auth::routes();

