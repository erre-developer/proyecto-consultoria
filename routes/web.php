<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;



Route::get('/home', 'RedSocialController@index')->name('home');

Route::resource('certificacion', 'CertificacionController');

//Auth::routes();

