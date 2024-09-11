<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('about', 'about');
Route::view('blog', 'blog');
Route::view('contact', 'contact');

// Tipos de rutas.
// Route::post();
// Route::patch();
// Route::put();
// Route::delete();
// Route::options();

// Response a varios tipos de verbos
// Route::match(['put', 'patch'], '/', function() {

// });

// Response a todos los tipos de peticiones.
// Route::any();
