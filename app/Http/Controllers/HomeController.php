<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil beberapa produk featured untuk ditampilkan di homepage
        $featuredProducts = Product::active()
            ->limit(6)
            ->get();

        // Ambil testimonials aktif untuk ditampilkan di homepage
        $testimonials = Testimonial::active()
            ->limit(8)
            ->get();

        return view('welcome', compact('featuredProducts', 'testimonials'));
    }
}
