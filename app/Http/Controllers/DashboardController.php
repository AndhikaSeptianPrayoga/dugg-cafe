<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Blog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistik Produk
        $totalProducts = Product::count();
        $activeProducts = Product::where('is_active', true)->count();
        $inactiveProducts = Product::where('is_active', false)->count();
        
        // Statistik Testimoni
        $totalTestimonials = Testimonial::count();
        $activeTestimonials = Testimonial::where('is_active', true)->count();
        $inactiveTestimonials = Testimonial::where('is_active', false)->count();
        
        // Statistik Blog
        $totalBlogs = Blog::count();
        $activeBlogs = Blog::where('is_active', true)->count();
        $inactiveBlogs = Blog::where('is_active', false)->count();
        
        // Statistik per kategori
        $seasoningCount = Product::where('category', 'seasoning')->count();
        $signatureCount = Product::where('category', 'signature')->count();
        $beveragesCount = Product::where('category', 'beverages')->count();
        $mainCourseCount = Product::where('category', 'main-course')->count();
        
        // Produk terbaru (5 terakhir)
        $recentProducts = Product::latest()->limit(5)->get();
        
        // Testimoni terbaru (3 terakhir)
        $recentTestimonials = Testimonial::latest()->limit(3)->get();
        
        // Blog terbaru (3 terakhir)
        $recentBlogs = Blog::latest()->limit(3)->get();
        
        // Data untuk chart kategori
        $categoryData = [
            'labels' => ['Seasoning', 'Signature', 'Beverages', 'Main Course'],
            'data' => [$seasoningCount, $signatureCount, $beveragesCount, $mainCourseCount]
        ];
        
        return view('dashboard', compact(
            'totalProducts',
            'activeProducts', 
            'inactiveProducts',
            'totalTestimonials',
            'activeTestimonials',
            'inactiveTestimonials',
            'totalBlogs',
            'activeBlogs',
            'inactiveBlogs',
            'seasoningCount',
            'signatureCount',
            'beveragesCount',
            'mainCourseCount',
            'recentProducts',
            'recentTestimonials',
            'recentBlogs',
            'categoryData'
        ));
    }
}
