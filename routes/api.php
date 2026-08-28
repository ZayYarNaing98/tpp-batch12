<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BatchController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\InstructorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);


Route::group(["middleware" => 'auth:api'], function () {
    Route::get('/instructors', [InstructorController::class, 'index']);
    Route::get('/instructors/{id}', [InstructorController::class, 'show']);
    Route::post('/instructors', [InstructorController::class, 'store']);
    Route::put('/instructors/{id}', [InstructorController::class, 'update']);
    Route::delete('/instructors/{id}', [InstructorController::class, 'delete']);


    Route::get('/batches', [BatchController::class, 'index']);
    Route::get('/batches/{id}', [BatchController::class, 'show']);
    Route::post('/batches', [BatchController::class, 'store']);


    Route::get('/categories', [CategoryController::class, 'index']);
    Route::post('/categories', [CategoryController::class, 'store']);
});
