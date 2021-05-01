<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\DashControllers;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VideoController;


Route::get('/',[HomeControllers::class, 'index']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.home');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/dutch', [DashControllers::class, 'dutch']);

Route::get('post', [PostController::class, "index"]);

Route::get("create-post", [PostController::class, "createPost"]);

Route::post('save-post', [PostController::class, "savePost"]);
Route::get('editor', [PostController::class, "show"]);

// Admin/dashboard controllers
// categories controllers
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/category', [CategoryController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/category/create', [CategoryController::class, 'create']);
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/category/store', [CategoryController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->delete('/dashboard/category/{id}/delete', [CategoryController::class, 'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/category/{id}/edit', [CategoryController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/category/{id}/update', [CategoryController::class, 'update']);

// video's controllers
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/video', [VideoController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/video/create', [VideoController::class, 'create']);
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/video/store', [VideoController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->delete('/dashboard/video/{id}/delete', [VideoController::class, 'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/video/{id}/edit', [VideoController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/video/{id}/update', [VideoController::class, 'update']);

// posts controllers
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/post', [PostController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/post/create', [PostController::class, 'create']);
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/post/store', [PostController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->delete('/dashboard/post/{id}/delete', [PostController::class, 'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/post/{id}/edit', [PostController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/post/{id}/update', [PostController::class, 'update']);