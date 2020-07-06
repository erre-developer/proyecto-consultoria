<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;



Route::post('/rutaprueba', 'PruebaController@store')->name('rutaprueba');
//Route::path('/rutaprueba{prueba}', 'PruebaController@update')->name('rutaprueba.update');

Route::get('/', 'RedSocialController@index');
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

