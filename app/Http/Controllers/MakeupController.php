<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MakeupController extends Controller
{
    public function getResults(Request $request)
    {
        // Mendapatkan skintone_id dan undertone_id dari input pengguna
        $skintone_id = $request->input('skintone_id');
        $undertone_id = $request->input('undertone_id');

        // Melakukan query untuk mencari produk berdasarkan skintone_id dan undertone_id
        $products = Product::where('skintone_id', $skintone_id)
            ->where('undertone_id', $undertone_id)
            ->get();

        // Mengembalikan hasil dalam bentuk JSON
        return response()->json($products);
    }
}
