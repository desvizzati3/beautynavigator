<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use App\Models\Skintone;
use App\Models\Undertone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create', [
            'categories' => Category::all(),
            'undertones' => Undertone::all(),
            'skintones' => Skintone::all()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_produk' => 'required|max:20',
            'brand' => 'required',
            'deskripsi' => 'required',
            'image' => 'image',
            'skintone_id' => 'required',
            'undertone_id' => 'required',
            'category_id' => 'required'
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-image');
        }

        Product::create($validateData);

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', [
            'product' => $product,
            'categories' => Category::all(),
            'undertones' => Undertone::all(),
            'skintones' => Skintone::all()

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validateData = $request->validate([
            'nama_produk' => 'required|max:20',
            'brand' => 'required',
            'deskripsi' => 'required',
            'image' => 'image',
            'skintone_id' => 'required',
            'undertone_id' => 'required',
            'category_id' => 'required'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('post-image');
        }

        Product::where('id', $product->id)->update($validateData);

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Ambil semua review yang terkait dengan produk
        $reviews = Review::where('product_id', $product->id)->get();

        // Hapus setiap review yang terkait dengan produk
        foreach ($reviews as $review) {
            $review->delete();
        }

        if ($product->image) {
            Storage::delete($product->image);
        }

        // Hapus produk itu sendiri
        $product->delete();

        return redirect('/products');
    }
}
