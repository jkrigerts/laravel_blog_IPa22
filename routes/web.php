<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [PostController::class, "index"]);
Route::get("/show/{id}", [PostController::class, "show"]);
Route::get("/create", [PostController::class, "create"]);
Route::post("/store", [PostController::class, "store"]);

// 1. Vispirms routes web.php
// 2. Nonāk līdz kontrolierim
// 3. Kontrolieris atgriež skatu
