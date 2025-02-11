<?php

use App\Http\Controllers\MainControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainControllers::class, "home"]);


Route::get('/about', [MainControllers::class, "about"]);


Route::get('/contact', [MainControllers::class, "contact"]);

Route::get('/travel', [MainControllers::class, "travel"]);

