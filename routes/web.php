<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/article', function () {
    return view('article');
})->name('article');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');