<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

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
