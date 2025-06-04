@extends('layouts.app')

@section('title', $blog->title . ' - Blog')

{{-- Navbar --}}
<x-layouts.navbar.default />

@section('content')
<div style="background: #F8F1E8; min-height: 100vh; padding-bottom: 100px; ">
    
    {{-- Hero Section with Blue Background --}}
    <section class="hero-section d-flex align-items-center justify-content-center" style="min-height: 400px; background: #469CED; position: relative; z-index: 1; margin-bottom:-100px; ">
        {{-- Dekorasi gambar --}}
        <img src="/assets/img/image/decor2/decor11.png" alt="" style="position:absolute;top:0;right:0;width:100%;height:100%;object-fit:cover;opacity:0.5;z-index:1; filter: brightness(0) invert(1);">

        <div class="text-center w-100">
            <h1 class="text-white fw-bold" style="font-size: 2.5rem;">{{ $blog->title }}</h1>
            <div class="mt-3">
                <span class="badge bg-light text-dark me-2">{{ $blog->formatted_date }}</span>
                <span class="badge bg-light text-dark">{{ $blog->reading_time }}</span>
            </div>
        </div>
    </section>

    {{-- Main Content --}}
    <div class="container" style="margin-top: -150px; position: relative; z-index: 2; padding-top: 200px; margin-bottom: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                {{-- Featured Image --}}
                @if($blog->image)
                <div class="text-center mb-5">
                    <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" 
                         class="img-fluid rounded" style="max-width: 100%; height: auto; border-radius: 15px; max-height: 500px; object-fit: cover; margin-top: -120px;">
                </div>
                @endif

                {{-- Blog Content --}}
                <div class="content-blog text-dark" style="line-height: 1.8; font-size: 1.1rem;">
                    {!! nl2br($blog->content) !!}
                </div>

                {{-- Navigation --}}
                @if($relatedBlogs->count() > 0)
                <div class="mt-5 pt-4 border-top">
                    <h5 class="fw-bold mb-4" style="color: #469CED;">Blog Lainnya</h5>
                    <div class="row">
                        @foreach($relatedBlogs->take(3) as $relatedBlog)
                        <div class="col-md-4 mb-3">
                            <a href="{{ route('blog.detail', $relatedBlog->slug) }}" class="text-decoration-none">
                                <div class="card h-100 border-0 shadow-sm" style="transition: transform 0.3s ease;">
                                    <div style="height: 150px; background: url('{{ $relatedBlog->image_url }}') center/cover; border-radius: 8px 8px 0 0;"></div>
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold" style="color: #469CED; font-size: 0.9rem;">{{ Str::limit($relatedBlog->title, 50) }}</h6>
                                        <p class="card-text text-muted small">{{ Str::limit($relatedBlog->excerpt, 80) }}</p>
                                        <small class="text-muted">{{ $relatedBlog->formatted_date }}</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Back to Blog List --}}
                <div class="text-center mt-5">
                    <a href="{{ route('blog') }}" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-left me-2"></i>Kembali ke Blog
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
.content-blog h1, .content-blog h2, .content-blog h3, .content-blog h4 {
    margin-top: 2rem;
    margin-bottom: 1rem;
    font-weight: bold;
    color: #469CED;
}
.content-blog h1 { font-size: 2rem; }
.content-blog h2 { font-size: 1.75rem; }
.content-blog h3 { font-size: 1.5rem; }
.content-blog h4 { font-size: 1.25rem; }
.content-blog p {
    margin-bottom: 1rem;
}
.content-blog ul, .content-blog ol {
    margin-bottom: 1rem;
    padding-left: 2rem;
}
.content-blog li {
    margin-bottom: 0.5rem;
}
.content-blog strong {
    font-weight: 600;
    color: #2c3e50;
}
.card:hover {
    transform: translateY(-3px);
}
</style>

{{-- Footer --}}
<x-layouts.footer.default />
@endsection 