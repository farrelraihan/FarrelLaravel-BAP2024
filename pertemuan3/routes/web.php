<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('home');
});

Route::get('/profilfarrel', function () {
    return view('profilfarrel'); 
});

Route::get('/matakuliah', function () {
    return view('matakuliah'); 
});