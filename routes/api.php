<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Api\ProductCategoriesController;


Route::prefix('v1')->group(function () {
    Route::Resource('product_categories', ProductCategoriesController::class);
    //Route::resource('product-categories', ProductCategoriesController::class);

    //Route::get('/product-categories', [ProductCategoriesController::class, 'index']);
    
    Route::get('/user', function(request $request){
        return $request->user();
    });
    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products', [ProductController::class, 'store']);

    
});

