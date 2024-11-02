<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProjectController;

//----------------------------form-------------------------------------------
Route::post('/projects', [ProjectController::class, 'store']);
Route::get('/csrf', [ProjectController::class, 'getCsrfToken']);

//----------------------------images----------------------------------------
Route::post('/images', [ImageController::class, 'store'])->name('images.store');
Route::get('/images/{category}', [ImageController::class, 'index']);