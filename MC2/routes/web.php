<?php

use Illuminate\Support\Facades\Route;

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
Route::post('/app/create_user', 'App\Http\Controllers\AdminController@addUser');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', 'App\Http\Controllers\TestController@controlleurMethod');

Route::any('{Unknown}', function(){
    return view('welcome');
});