<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index () {
        $products = Product::with('category')->get();
        return response()->json($products);
    }

    public function indexSome (Request $request, $q) {
        $products = Product::search($q)->get();

        $data = $products->map(function($record) {
            $filteredData = array_filter($record->toArray());

            return new Product($filteredData);
        });

        return response()->json($data);

        // return response()->json($products);
    }
}
