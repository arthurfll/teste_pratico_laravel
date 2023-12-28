<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RevisionController;



Route::get('/', function () {
    return view('home');
 });

Route::resource('clientes',PersonController::class);

Route::resource('carros',CarController::class);

Route::resource('revisoes',RevisionController::class);
