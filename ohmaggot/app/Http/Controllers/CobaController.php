<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use PhpParser\Node\Expr\Cast\String_;

class CobaController extends Controller
{
    public function index(String $id)
    {
        $produk = Product::find($id);
        return view('coba', [
            "produk" => $produk
        ]);
    }

    public function calculate(Request $request)
    {
        $harga = $request->input('harga');
        $quantity = $request->input('quantity');
        $total = $harga * $quantity;

        return response()->json(['total' => $total]);
    }
}
