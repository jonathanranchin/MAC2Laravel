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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update');

    Route::resource('profiles', \App\Http\Controllers\ProfilesController::class);
    Route::view('profiles.edit', 'profiles.edit')->name('profiles.edit');
    Route::put('profiles.edit', [\App\Http\Controllers\ProfilesController::class, 'edit'])
        ->name('profiles.edit');
});

require __DIR__.'/auth.php';
