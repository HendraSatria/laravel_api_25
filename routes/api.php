<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductCategoriesController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductVariantController;

Route::prefix('v1')->group(function () {
    
    Route::Resource('products', ProductController::class);
    Route::Resource('product_categories', ProductCategoriesController ::class);
Route::Resource('product_variants', ProductVariantController::class);
   
    

});
