<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $seasoningProducts = Product::where('category', 'seasoning')->active()->get();
        $signatureProducts = Product::where('category', 'signature')->active()->get();
        $beveragesProducts = Product::where('category', 'beverages')->active()->get();
        $mainCourseProducts = Product::where('category', 'main-course')->active()->get();

        return view('menu', compact(
            'seasoningProducts',
            'signatureProducts', 
            'beveragesProducts',
            'mainCourseProducts'
        ));
    }

    public function show(Product $product)
    {
        if (!$product->is_active) {
            abort(404);
        }

        $relatedProducts = Product::where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->active()
            ->limit(4)
            ->get();

        return view('menu-detail', compact('product', 'relatedProducts'));
    }

    public function getByCategory($category)
    {
        $products = Product::where('category', $category)->active()->get();
        return response()->json($products);
    }
}
