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

Route::middleware(['logging'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('form', function () {
        return view('form');
    })->name('form');

    Route::post('submit', function () {
        return view('submit');
    })->name('submit');
});