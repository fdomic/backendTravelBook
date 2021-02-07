<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/





 
Route::post('register', 'App\Http\Controllers\AuthController@register');
Route::post('login', 'App\Http\Controllers\AuthController@login');

Route::group([

    'middleware' => ['jwt.auth']

], function ($router) {
 

 //Drzava
 Route::resource('drzave','App\Http\Controllers\DrzaveController');

 //Grad
 Route::resource('gradovi','App\Http\Controllers\GradoviController');

 //Povijest
 Route::resource('povjesti','App\Http\Controllers\PovijestController');

 //Zemljopis
 Route::resource('zemljopis','App\Http\Controllers\ZemljopisController');

 //Javni prijevoz
 Route::resource('javni-prijevoz','App\Http\Controllers\JavniPrijevozController');
 Route::resource('javni-prijevoz-cijene','App\Http\Controllers\JavniPrijevozCijeneController');

 //Poznate znamenitosti
 Route::resource('poznate-znamenitosti','App\Http\Controllers\PoznateZnamenitostiController');
 Route::resource('poznate-znamenitosti-cijene','App\Http\Controllers\PoznateZnamenitostiCijeneController');

 //Kazalista
 Route::resource('kazalista','App\Http\Controllers\KazalistaController');
 Route::resource('kazalista-cijene','App\Http\Controllers\KazalistaCijeneController');

 //Klubovi
 Route::resource('klubovi','App\Http\Controllers\KluboviController');
 Route::resource('klubovi-cijene','App\Http\Controllers\KluboviCijeneController');

 //Muzeji
 Route::resource('muzeji','App\Http\Controllers\MuzejiController');
 Route::resource('muzeji-cijene','App\Http\Controllers\MuzejiCijeneController');
 Route::resource('poznata-dijela','App\Http\Controllers\PoznataDijelaController');

 //Dvorci
 Route::resource('dvorci','App\Http\Controllers\DvorciController');
 Route::resource('dvorci-cijene','App\Http\Controllers\DvorciCijeneController');


});

   



