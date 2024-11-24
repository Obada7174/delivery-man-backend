<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\FavoriteController;


// Users routes
Route::apiResource('users', UserController::class);

// Markets routes
Route::apiResource('markets', MarketController::class);

// Products routes
Route::apiResource('products', ProductController::class);

// Images routes
Route::apiResource('images', ProductImageController::class);

// Carts routes
Route::apiResource('carts', CartController::class);

// Cart items routes
Route::apiResource('cart-items', CartItemController::class);

// Orders routes
Route::apiResource('orders', OrderController::class);

// Categories routes
Route::apiResource('categories', CategoryController::class);

// Subcategories routes
Route::apiResource('subcategories', SubcategoryController::class);

// Favorites routes
Route::apiResource('favorites', FavoriteController::class);
 
//
// تسجيل الدخول
Route::post('login', [UserController::class, 'login']);

// البحث في المنتجات
Route::get('products/search', [ProductController::class, 'search']);
 
// 
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('carts', CartController::class);
    Route::apiResource('orders', OrderController::class);
    // أضف الموارد المحمية هنا
});
