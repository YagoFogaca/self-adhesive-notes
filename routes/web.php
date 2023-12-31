<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PlatformController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->group(function () {
  Route::get('/', 'index')->name('create');
  Route::post('/', 'createAccount')->name('createAccount');
  Route::get('/login', 'login')->name('login');
  Route::post('/login', 'store')->name('store');
  Route::get('/logout', 'logout')->name('logout');
});

Route::controller(PlatformController::class)->group(function () {
  Route::get('/platform', 'index')->middleware('auth')->name('app');
  Route::post('/notes/store', 'store')->middleware('auth')->name('note.store');
  Route::get('/delete/{id}', 'delete')->middleware('auth')->name('note.delete');
  Route::put('/edit/{id}', 'update')->middleware('auth')->name('note.update');
});
