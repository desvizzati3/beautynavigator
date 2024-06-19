<?php

use App\Models\Product;
use App\Models\Category;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakeupController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dummy', function () {
    return view('dummy', ['title' => 'Our Homepage.']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', function () {
        return view('dashboard', ['categories' => Category::all()]);
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/fmm', function (Product $product) {
        return view('fmm', ['title' => 'Find My Makeup.', 'products' => $product]);
    })->middleware(['auth', 'verified'])->name('fmm');


    Route::get('/products', function () {
        return view('products', ['title' => 'Products.', 'products' => Product::all()]);
    })->middleware(['auth', 'verified'])->name('products');

    Route::get('/products/{product:id}', function (Product $product) {
        $product->load('review.user');
        return view('product', ['title' => 'Details Product.', 'product' => $product]);
    })->middleware(['auth', 'verified']);

    Route::get('/categories/{category:id}', function (Category $category) {
        return view('products', ['title' => ' Products in: ' . $category->name, 'products' => $category->product]);
    })->middleware(['auth', 'verified']);

    Route::resource('/product', ProductController::class)->middleware(IsAdmin::class);

    Route::post('/products/{product}/review', [ReviewController::class, 'store'])->name('review.store');

    Route::delete('review/{review:id}', [ReviewController::class, 'destroy'])->name('review.destroy');

    Route::get('/products', [ProductController::class, 'index'])->middleware(['auth', 'verified'])->name('products');


    Route::post('/find-my-makeup/results', [MakeupController::class, 'getResults'])->name('find-my-makeup.results');
});

require __DIR__ . '/auth.php';
