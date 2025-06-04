<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of published blogs
     */
    public function index()
    {
        $blogs = Blog::published()->paginate(9);
        return view('blog', compact('blogs'));
    }

    /**
     * Display the specified blog
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->active()->firstOrFail();
        
        // Get related blogs (exclude current blog)
        $relatedBlogs = Blog::published()
            ->where('id', '!=', $blog->id)
            ->limit(3)
            ->get();

        return view('detail-blog', compact('blog', 'relatedBlogs'));
    }
}
