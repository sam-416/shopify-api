<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopifyController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/shopify/products', [ShopifyController::class, 'getProducts']);

// In a route or controller
Route::get('/check-config', function() {
    $config = config('shopify');
    dd($config);
});
