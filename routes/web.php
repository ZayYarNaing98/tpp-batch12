<?php

use App\Http\Controllers\BatchController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Static Route
Route::get('/students', function()
{
    return "Hello, students";
});

// Dynamic Route
Route::get('/students/{id}', function($id)
{
    return "Studnet ID : " . $id;
});

// Naming Route
Route::get('/dashboard', function(){
    return "Welcome from Talent Professional Program";
})->name('tpp');

// Redirect Route
Route::get('/talent', function(){
    return redirect()->route('tpp');
});


// Group Route
Route::prefix('/talent')->group(function(){

    Route::get('/php', function(){
        return "This is PHP Track";
    });

    Route::get('/java', function(){
        return "This is Java Track";
    });
});


// Category
// Route::get('/categories', function(){
//     return view('categories.index');
// });

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::post('/categories/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');


Route::get('/batches', [BatchController::class, 'index'])->name('batches.index');
Route::get('/batches/create', [BatchController::class, 'create'])->name('batches.create');
Route::post('/batches/store', [BatchController::class, 'store'])->name('batches.store');
Route::post('/batches/delete/{id}', [BatchController::class, 'delete'])->name('batches.delete');
