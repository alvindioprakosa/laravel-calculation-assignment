<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Redirect dari '/' ke '/home'
Route::redirect('/', '/home');

// Route untuk '/home'
Route::get('/home', [HomeController::class, 'index']);