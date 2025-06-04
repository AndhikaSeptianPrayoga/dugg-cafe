{{-- filepath: f:\Coding\Laragon\laragon\www\sneat-bootstrap-laravel-livewire-starter-kit\resources\views\blog.blade.php --}}
@extends('layouts.app')

@section('title', 'Blog')

{{-- Navbar --}}
<x-layouts.navbar.default />

{{-- Hero Section --}}

@section('content')
<style>
.blog-card:hover {
    transform: translateY(-5px);
}
.blog-card:hover .rounded {
    box-shadow: 0 8px 25px rgba(58, 123, 213, 0.15);
}

/* Custom Pagination Styling */
.pagination {
    margin-bottom: 0;
}
.pagination .page-link {
    color: #469CED;
    border-color: #dee2e6;
    padding: 0.5rem 0.75rem;
    font-size: 0.875rem;
    border-radius: 0.375rem;
    margin: 0 2px;
    transition: all 0.15s ease-in-out;
}
.pagination .page-link:hover {
    color: #fff;
    background-color: #469CED;
    border-color: #469CED;
    transform: translateY(-1px);
    box-shadow: 0 2px 4px rgba(58, 123, 213, 0.2);
}
.pagination .page-item.active .page-link {
    color: #fff;
    background-color: #469CED;
    border-color: #469CED;
    box-shadow: 0 2px 4px rgba(58, 123, 213, 0.3);
}
.pagination .page-item.disabled .page-link {
    color: #6c757d;
    background-color: #fff;
    border-color: #dee2e6;
    opacity: 0.5;
}
.pagination .page-item:first-child .page-link {
    border-top-left-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
}
.pagination .page-item:last-child .page-link {
    border-top-right-radius: 0.375rem;
    border-bottom-right-radius: 0.375rem;
}

/* Remove unwanted pagination elements */
.pagination .page-item .page-link svg,
.pagination .page-item .page-link span:not(.sr-only) {
    display: none !important;
}

/* Custom pagination arrows */
.pagination .page-item:first-child .page-link::before {
    content: '‹ Previous';
    font-size: 0.875rem;
}
.pagination .page-item:last-child .page-link::before {
    content: 'Next ›';
    font-size: 0.875rem;
}
.pagination .page-item:first-child .page-link,
.pagination .page-item:last-child .page-link {
    padding: 0.5rem 1rem;
}
</style>
<div style="background: #F8F1E8; min-height: 100vh; padding-bottom: 100px;">
{{-- Hero Section (Carousel) --}}
<section class="hero-section d-flex align-items-center justify-content-center" style="min-height: 650px; background: #469CED; position: relative; z-index: 1;">
    {{-- Dekorasi gambar --}}
    {{-- Dekorasi gambar --}}
    <img src="/assets/img/image/decor2/decor11.png" alt="" style="position:absolute;top:0;right:0;width:100%;height:100%;object-fit:cover;opacity:0.5;z-index:1; filter: brightness(0) invert(1);">
  <div class="text-center w-100">
    <h1 class="text-white fw-bold" style="font-size: 2.5rem;">Waktu Luang? Baca Ini Dulu</h1>
  </div>
</section>


    {{-- Grid Cerita --}}
    <div class="container py-5" style="margin-bottom: 100px; margin-top: -150px; position: relative; z-index: 2; padding-top: 200px;">
        <div class="row g-5">
            @forelse($blogs as $blog)
            <div class="col-12 col-md-4">
                <a href="{{ route('blog.detail', $blog->slug) }}" class="text-decoration-none">
                    <div class="h-100 d-flex flex-column align-items-center blog-card" style="min-height: 350px; cursor: pointer; transition: transform 0.3s ease;">
                        <div class="rounded mb-3" style="width: 100%; aspect-ratio: 1/1; background: url('{{ $blog->image_url }}') center/cover; transition: all 0.3s ease; border-radius: 15px;"></div>
                        <div class="text-center mt-auto px-3">
                            <div class="fw-bold mb-2" style="color: #469CED; font-size: 1.1rem;">{{ $blog->title }}</div>
                            <div class="text-muted small mb-2" style=" color: #2f2f2f;">{{ $blog->excerpt }}</div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <small class="text-muted">{{ $blog->formatted_date }}</small>
                                <small class="text-muted">{{ $blog->reading_time }}</small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-12">
                <div class="text-center py-5">
                    <i class="bx bx-book-open display-1 text-muted"></i>
                    <h4 class="mt-3" style="color: #469CED;">Belum Ada Blog</h4>
                    <p class="text-muted">Blog akan segera hadir. Pantau terus update terbaru dari Dugg Coffee!</p>
                </div>
            </div>
            @endforelse
        </div>
        
        @if($blogs->hasPages())
        <!-- Pagination -->
        <div class="row align-items-center mt-5">
            <div class="col-md-6">
                <p class="text-muted mb-0">
                    Menampilkan {{ $blogs->firstItem() }} sampai {{ $blogs->lastItem() }} 
                    dari {{ $blogs->total() }} artikel
                </p>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-end">
                    {{ $blogs->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

{{-- Footer --}}
  <x-layouts.footer.default />

@endsection
