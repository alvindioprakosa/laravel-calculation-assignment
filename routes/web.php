<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Redirect '/' to '/home'
Route::redirect('/', '/home');

// Route for '/home'
Route::get('/home', [HomeController::class, 'index']);
