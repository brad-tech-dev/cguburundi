<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::prefix('/blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/{slug}', [BlogController::class, 'viewPost'])->name('blog.post');
});

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

// Route::get('/events', function () {
//     return view('events');
// })->name('events');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

// legal
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');
