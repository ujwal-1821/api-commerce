<?php

use App\Http\Controllers\web\CategoryController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\ProductdetailController;
use App\Http\Controllers\web\SubcategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('category/{slug}' , [CategoryController::class, 'category'])->name('category');
Route::get('electronics/{slug}', [SubcategoryController::class, 'subCategory'])->name('subCategory');
Route::get('categoryName/{slug}', [ProductdetailController::class, 'productDetail'])->name('productDetail');