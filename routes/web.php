<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\ProductSuperCategoryController;
use App\Models\ProductSuperCategory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get("parser", [ProductSuperCategoryController::class, "index"]);
Route::get("parser", [productController::class, "pc_notebooky"]);
