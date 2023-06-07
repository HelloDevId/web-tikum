<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ApiProductController extends Controller
{
    public function all()
    {
        $products = Product::orderByDesc('id')->get();

        return response()->json([
            'message' => 'success',
            'data' => $products
        ]);
    }
    public function topSoldProducts()
    {
        $products = Product::orderBy('rating', 'desc')
            ->take(5)
            ->get();

        return response()->json([
            'message' => 'success',
            'data' => $products
        ]);
    }
}
