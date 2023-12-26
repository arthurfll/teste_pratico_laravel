<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/create_car/', function () {
    return view('create_car');
});

Route::get('/create_person/', function () {
    return view('create_person');
});

Route::get('/create_revision/', function () {
    return view('create_revision');
});

Route::get('/delete_car/', function () {
    return view('delete_car');
});

Route::get('/delete_person/', function () {
    return view('delete_person');
});

Route::get('/delete_revision/', function () {
    return view('delete_revision');
});

Route::get('/read_brand/', function () {
    return view('read_brand');
});

Route::get('/read_byName/', function () {
    return view('read_byName');
});

Route::get('/read_revision/', function () {
    return view('read_revision');
});

Route::get('/update_car/', function () {
    return view('update_car');
});

Route::get('/update_person/', function () {
    return view('update_person');
});

Route::get('/update_revision/', function () {
    return view('update_revision');
});


// como o projeto é pequeno e o prazo é curto, criei rotas simples.