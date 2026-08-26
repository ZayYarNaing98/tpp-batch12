<?php

use App\Http\Controllers\API\InstructorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/instructors', [InstructorController::class, 'index']);
Route::get('/instructors/{id}', [InstructorController::class, 'show']);
Route::post('/instructors', [InstructorController::class, 'store']);

