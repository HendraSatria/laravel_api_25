<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductCategoriesController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductVariantController;

use App\Http\Controllers\Api\AuthController;

Route::prefix('v1')->group(function () {
    
    // Auth Routes
    Route::post('/auth/register', [AuthController::class, 'register']);
    Route::post('/auth/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/auth/logout', [AuthController::class, 'logout']);
        Route::get('/auth/user', [AuthController::class, 'user']);
    });

    Route::Resource('products', ProductController::class);
    Route::Resource('product_categories', ProductCategoriesController ::class);
    Route::Resource('product_variants', ProductVariantController::class);
   
    

});
