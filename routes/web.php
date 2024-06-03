<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Our Homepage.']);
});

Route::get('/dummy', function () {
    return view('dummy', ['title' => 'Our Homepage.']);
});

Route::get('/fmm', function () {
    return view('fmm', ['title' => 'Find My Makeup.']);
})->name('fmm');

Route::get('/products', function () {
    return view('products', ['title' => 'Products.', 'products' => Product::all()]);
})->name('products');

Route::get('/products/{product:id}', function (Product $product) {
    $product->load('review.user');
    return view('product', ['title' => 'Details Product.', 'product' => $product]);
});
