@extends('layouts.app')
@section('content')
@section('title', 'Menu')
  {{-- Navbar --}}
  <x-layouts.navbar.default />

  {{-- Hero Section (Carousel) --}}
  <section class="hero-section position-relative p-0" style="min-height: 550px; margin-top: 50px; ">
    <img src="/assets/img/image/Hero-menu.png" alt="" style="width:100%; height:100%; object-fit:cover; filter: brightness(0.8); ">

  </section>

  <section class="py-5 position-relative" id="menu-section" style="background: #F8F1E8; min-height: 100vh; overflow: hidden;">
    <!-- Dekorasi gambar -->
    <img src="/assets/img/image/decor/decor- (7,1).png" alt="" style="position:absolute;top:0;right:0;width:500px;opacity:0.5;z-index:1;">
    <img src="/assets/img/image/decor/decor- (19).png" alt="" style="position:absolute;bottom:0;left:0;width:520px;opacity:0.2;z-index:1; ">
    <img src="/assets/img/image/decor/decor- (20).png" alt="" style="position:absolute;bottom:0;right:0;width:220px;opacity:0.2;z-index:1; margin-bottom:-100px;">
    <div class="container position-relative" style="z-index:2;">
      @php
        $categories = [
          'seasoning' => ['title' => 'Seasoning', 'products' => $seasoningProducts],
          'signature' => ['title' => 'Signature', 'products' => $signatureProducts],
          'beverages' => ['title' => 'Beverages', 'products' => $beveragesProducts],
          'main-course' => ['title' => 'Main Course', 'products' => $mainCourseProducts],
        ];
      @endphp
      
      @foreach($categories as $categoryKey => $categoryData)
        @if($categoryData['products']->count() > 0)
          <div class="row mb-5">
            <div class="col-12" style="margin-top: 150px;">
              <h3 class="fw-bold text-center mb-2" style="color:#469CED; font-size:2rem; letter-spacing:2px;">{{ $categoryData['title'] }}</h3>
              <div class="mx-auto mb-4" style="width:80px;height:4px;background:#9F775E;border-radius:2px;"></div>
              <div class="row justify-content-center g-4 mt-10">
                @foreach($categoryData['products'] as $product)
                  <div class="col-lg-4 col-md-6 col-12 d-flex align-items-stretch justify-content-center" style="margin-top: 80px;">
                    <div class="d-flex flex-column align-items-center w-100" style="max-width: 260px; margin: 0 auto;">
                      <div style="width:100%; aspect-ratio:1/1; overflow:hidden; border-radius:18px; box-shadow:0 2px 8px rgba(0,0,0,0.08); background:#fff; cursor: pointer; transition: transform 0.3s ease;" 
                           onclick="window.location.href='{{ route('menu.detail', $product) }}'"
                           onmouseover="this.style.transform='scale(1.05)'" 
                           onmouseout="this.style.transform='scale(1)'">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" style="width:100%; height:100%; object-fit:cover; border-radius:18px;">
                      </div>
                      <div class="mt-3 text-center">
                        <h5 class="fw-bold mb-1" style="font-size:1.15rem; color:#5F3C2C; cursor: pointer;" 
                            onclick="window.location.href='{{ route('menu.detail', $product) }}'">{{ $product->name }}</h5>
                        <div class="mb-2" style="font-weight:500;font-size:1.05rem; color:#469CED;">{{ $product->formatted_price }}</div>
                        @if($product->description)
                          <p class="text-muted small">{{ Str::limit($product->description, 50) }}</p>
                        @endif
                      </div>
                      <a href="{{ route('menu.detail', $product) }}" class="btn btn-white border-0 px-4 py-2 fw-bold mt-2 w-75" style="background:#469CED;border-radius: 1.5rem;color:#fff;box-shadow:0 2px 8px rgba(0,0,0,0.04);font-size:1.05rem;max-width:100%; transition: background 0.2s, color 0.2s;">Lihat Detail</a>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        @endif
      @endforeach
      
      <!-- Jika tidak ada produk -->
      @if($seasoningProducts->count() == 0 && $signatureProducts->count() == 0 && $beveragesProducts->count() == 0 && $mainCourseProducts->count() == 0)
        <div class="row">
          <div class="col-12 text-center" style="margin-top: 100px;">
            <h3 class="text-muted">Belum ada produk yang tersedia</h3>
            <p class="text-muted">Silakan kembali lagi nanti</p>
          </div>
        </div>
      @endif
    </div>
    <style>
      .btn-white { background: #469CED; color: #fff; }
      .btn-white:hover, .btn-white:focus { background: #fff !important; color: #469CED !important; border: 1px solid #469CED !important; }
      @media (max-width: 991px) {
        .col-lg-4 { max-width: 50%; flex: 0 0 50%; }
      }
      @media (max-width: 767px) {
        .col-lg-4, .col-md-6 { max-width: 100%; flex: 0 0 100%; }
      }
    </style>
  </section>

  {{-- Footer --}}
  <x-layouts.footer.default />
@endsection
