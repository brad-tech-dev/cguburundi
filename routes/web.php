<?php

use Illuminate\Support\Facades\Route;

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

