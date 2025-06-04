@extends('layouts.app')
@section('content')
@section('title', 'Home')
  {{-- Navbar --}}
  <x-layouts.navbar.default />

  {{-- Hero Section (Carousel) --}}
  <section class="hero-section position-relative p-0" style="min-height: 850px;">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000" style="min-height: 850px;">
      <div class="carousel-inner" style="min-height: 850px;">
        {{-- Slide 1 --}}
        <div class="carousel-item active" style="min-height: 850px; ">
          <div class="hero-bg position-absolute top-0 start-0 w-100 h-100" style="background: url('/assets/img/image/Hero-1.png') center right/cover no-repeat fixed; "></div>
          <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(90deg,rgba(0,0,0,0.2) 0%,rgba(0,0,0,0.2) 70%,rgba(0,0,0,0) 100%); z-index:1;"></div>
          <div class="container position-relative h-100 d-flex align-items-center justify-content-start" style="z-index:2;">
            <div class="col-lg-7 col-md-9 col-12 text-white text-start" style="margin-top: 250px; margin-left: 650px;">
              <h2 class="fw-bold mb-3 hero-title-hover" style="font-size:3.5rem; color: #469CED; transition: color 0.3s; cursor: pointer;">Lebih dari Sekadar Kopi. Ini Cerita.</h2>
              <p class="mb-4" style="font-size:2rem; margin-top: 40px;">Dugg Coffee bukan cuma soal rasa tapi soal momen. Dari biji pilihan sampai meja nongkrong, semuanya punya cerita.</p>
              <a href="{{ route('cerita') }}" class="btn btn-primary px-4 py-2 mb-2" style="font-size:1.1rem; border-radius: 1.5rem; margin-top: 20px;">Kenalan Yuk</a>
            </div>
          </div>
        </div>
        {{-- Slide 2 --}}
        <div class="carousel-item" style="min-height: 850px;">
          <div class="hero-bg position-absolute top-0 start-0 w-100 h-100" style="background: url('/assets/img/image/Hero-2.png') center right/cover no-repeat fixed;"></div>
          <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(90deg,rgba(0,0,0,0.2) 0%,rgba(0,0,0,0.2) 70%,rgba(0,0,0,0) 100%); z-index:1;"></div>
          <div class="container position-relative h-100 d-flex align-items-center justify-content-start" style="z-index:2;">
          <div class="col-lg-7 col-md-9 col-12 text-white text-start" style="margin-top: 250px; margin-left: 650px;">
              <h2 class="fw-bold mb-3 hero-title-hover" style="font-size:3.5rem; color: #469CED; transition: color 0.3s; cursor: pointer;">Bukan Sekadar Ngopi, Ini Cerita Rasa.</h2>
              <p class="mb-4" style="font-size:2rem; margin-top: 40px;">Dari espresso strong sampai yang manis-manis kek kamu. Kami punya semua mood dalam satu halaman menu.</p>
              <a href="{{ route('menu') }}" class="btn btn-primary px-4 py-2 mb-2" style="font-size:1.1rem; border-radius: 1.5rem; margin-top: 20px;">Lihat Menu</a>
            </div>
          </div>
        </div>
        {{-- Slide 3 --}}
        <div class="carousel-item" style="min-height: 850px;">
          <div class="hero-bg position-absolute top-0 start-0 w-100 h-100" style="background: url('/assets/img/image/Hero-3.png') center right/cover no-repeat fixed;"></div>
          <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(90deg,rgba(0,0,0,0.2) 0%,rgba(0,0,0,0.2) 70%,rgba(0,0,0,0) 100%); z-index:1;"></div>
          <div class="container position-relative h-100 d-flex align-items-center justify-content-start" style="z-index:2;">
          <div class="col-lg-7 col-md-9 col-12 text-white text-start" style="margin-top: 250px; margin-left: 650px;">
              <h2 class="fw-bold mb-3 hero-title-hover" style="font-size:3.5rem; color: #469CED; transition: color 0.3s; cursor: pointer;">Lagi di mana? Dugg Ada Dekat Kamu.</h2>
              <p class="mb-4" style="font-size:2rem; margin-top: 40px;">Mau chill, nugas, atau quality time bareng temen? Tinggal melipir. Cek lokasi terdekat & langsung ngopi bareng kami!</p>
              <a href="{{ route('lokasi') }}" class="btn btn-primary px-4 py-2 mb-2" style="font-size:1.1rem; border-radius: 1.5rem; margin-top: 20px;">Cek Lokasi</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-indicators mb-0" style="bottom: 30px;">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
    </div>
    <style>
      .hero-title-hover:hover {
        color: #fff !important;
      }
      .carousel-indicators [data-bs-target] {
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background-color: #469CED;
        margin: 10px;
        opacity: 0.5;
        transition: opacity 0.2s;
      }
      .carousel-indicators .active {
        opacity: 1;
        background-color: #469CED;
      }

      /* Responsive Styles */
      @media (max-width: 1200px) {
        .hero-section .col-lg-7 {
          margin-left: 400px !important;
        }
      }

      @media (max-width: 991px) {
        .hero-section .col-lg-7 {
          margin-left: 50px !important;
          margin-right: 50px !important;
          margin-top: 150px !important;
        }
        .hero-section h2 {
          font-size: 2.5rem !important;
        }
        .hero-section p {
          font-size: 1.25rem !important;
        }
      }

      @media (max-width: 767px) {
        .hero-section .col-lg-7 {
          margin-left: 20px !important;
          margin-right: 20px !important;
          margin-top: 80px !important;
          text-align: center !important;
        }
        .hero-section h2 {
          font-size: 1.8rem !important;
          line-height: 1.3 !important;
        }
        .hero-section p {
          font-size: 1rem !important;
          line-height: 1.4 !important;
          margin-top: 20px !important;
        }
        .hero-section .btn {
          font-size: 1rem !important;
          margin-top: 15px !important;
        }
      }

      @media (max-width: 575px) {
        .hero-section .col-lg-7 {
          margin-left: 15px !important;
          margin-right: 15px !important;
          margin-top: 60px !important;
          padding: 0 10px !important;
        }
        .hero-section h2 {
          font-size: 1.5rem !important;
          line-height: 1.2 !important;
        }
        .hero-section p {
          font-size: 0.9rem !important;
          line-height: 1.3 !important;
          margin-top: 15px !important;
        }
        .hero-section .btn {
          font-size: 0.9rem !important;
          padding: 8px 20px !important;
          margin-top: 10px !important;
        }
        .hero-overlay {
          background: linear-gradient(90deg,rgba(0,0,0,0.4) 0%,rgba(0,0,0,0.4) 100%) !important;
        }
      }

      @media (max-width: 400px) {
        .hero-section .col-lg-7 {
          margin-left: 10px !important;
          margin-right: 10px !important;
          margin-top: 50px !important;
        }
        .hero-section h2 {
          font-size: 1.3rem !important;
        }
        .hero-section p {
          font-size: 0.85rem !important;
        }
        .hero-section .btn {
          font-size: 0.85rem !important;
          padding: 6px 16px !important;
        }
      }
    </style>
  </section>

  {{-- Menu Pilihan --}}
  <section class="menu-section py-5 position-relative" style="background: #469CED; overflow: hidden; height: 690px; ">
    <img src="/assets/img/image/decor-1.png" alt="" style="position:absolute;top:0;right:0;width:350px;opacity:0.7;z-index:1; filter: brightness(0) invert(1);">
    <img src="/assets/img/image/decor-2.png" alt="" style="position:absolute;top:40px;left:0;width:500px;opacity:0.7;z-index:1; filter: brightness(0) invert(1);">
    <div class="container position-relative" style="z-index:2;">
      <h3 class="text-center fw-bold mb-2 text-white" style="font-size:2rem; margin-top: 50px;">Menu Pilihan</h3>
      <div class="mx-auto mb-4" style="width:80px;height:4px;background:#fff;border-radius:2px;"></div>
      
      <div class="menu-carousel-container position-relative" style="margin-top: 50px;">
        <!-- Navigation Arrows -->
        <button class="menu-arrow-prev position-absolute btn btn-link p-0" id="menuPrev" 
                style="font-size:2.5rem;color:#fff;z-index:3;left:-20px;top:50%;transform:translateY(-50%);width:40px;height:40px;display:flex;align-items:center;justify-content:center;border-radius:50%;background:rgba(255,255,255,0.2);transition:all 0.3s; margin-left: -100px;">
          <span aria-hidden="true">&#8249;</span>
        </button>
        
        <button class="menu-arrow-next position-absolute btn btn-link p-0" id="menuNext"
                style="font-size:2.5rem;color:#fff;z-index:3;right:-20px;top:50%;transform:translateY(-50%);width:40px;height:40px;display:flex;align-items:center;justify-content:center;border-radius:50%;background:rgba(255,255,255,0.2);transition:all 0.3s; margin-right: -100px;">
          <span aria-hidden="true">&#8250;</span>
        </button>

        <!-- Slider Container -->
        <div class="menu-slider-wrapper overflow-hidden" style="width:100%;">
          <div class="menu-slider d-flex" id="menuSlider" style="gap:2rem;transition:transform 0.5s ease-in-out;">
            @forelse($featuredProducts as $product)
              <div class="menu-slide d-flex flex-column align-items-center" style="min-width: 320px; flex: 0 0 320px;">
                <div style="width:100%; aspect-ratio:1/1; overflow:hidden; border-radius:18px; box-shadow:0 4px 20px rgba(0,0,0,0.15); background:#fff; cursor: pointer; transition: transform 0.3s ease, box-shadow 0.3s ease;" 
                     class="menu-item-image">
                  <a href="{{ route('menu.detail', $product) }}" class="d-block w-100 h-100">
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" style="width:100%; height:100%; object-fit:cover; border-radius:18px;">
                  </a>
                </div>
                <div class="mt-3 text-center">
                  <h5 class="fw-bold mb-1 text-white" style="font-size:1.25rem;">
                    <a href="{{ route('menu.detail', $product) }}" class="text-white text-decoration-none">{{ $product->name }}</a>
                  </h5>
                  <div class="mb-2 text-white" style="font-weight:500;font-size:1.1rem;">{{ $product->formatted_price }}</div>
                </div>
                <a href="{{ route('menu.detail', $product) }}" class="btn btn-white border-0 px-4 py-2 fw-bold mt-2" style="background:#fff;border-radius: 1.5rem;color:#469CED;box-shadow:0 2px 8px rgba(0,0,0,0.04);font-size:1.1rem;min-width:140px;transition:all 0.3s;">Lihat Detail</a>
              </div>
            @empty
              <div class="menu-slide d-flex flex-column align-items-center" style="min-width: 320px; flex: 0 0 320px;">
                <div style="width:100%; aspect-ratio:1/1; overflow:hidden; border-radius:18px; box-shadow:0 4px 20px rgba(0,0,0,0.15); background:#fff;">
                  <img src="/assets/img/image/Produk-1.jpg" alt="Belum ada produk" style="width:100%; height:100%; object-fit:cover; border-radius:18px;">
                </div>
                <div class="mt-3 text-center">
                  <h5 class="fw-bold mb-1 text-white" style="font-size:1.25rem;">Belum Ada Produk</h5>
                  <div class="mb-2 text-white" style="font-weight:500;font-size:1.1rem;">Segera Hadir</div>
                </div>
                <a href="{{ route('menu') }}" class="btn btn-white border-0 px-4 py-2 fw-bold mt-2" style="background:#fff;border-radius: 1.5rem;color:#469CED;box-shadow:0 2px 8px rgba(0,0,0,0.04);font-size:1.1rem;min-width:140px;">Lihat Menu</a>
              </div>
            @endforelse
          </div>
        </div>

        <!-- Dots Indicator -->
        <div class="menu-dots d-flex justify-content-center mt-4" id="menuDots" style="gap:8px;">
          <!-- Dots akan diisi dengan JavaScript -->
        </div>
      </div>
    </div>

    <style>
      .menu-arrow-prev:hover, .menu-arrow-next:hover {
        background: rgba(255,255,255,0.4) !important;
        transform: translateY(-50%) scale(1.1);
      }
      .menu-arrow-prev:focus, .menu-arrow-next:focus { 
        outline: none; 
        box-shadow: none; 
      }
      .btn-white:hover, .btn-white:focus { 
        background: #469CED !important; 
        color: #fff !important; 
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      }
      .menu-item-image:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0,0,0,0.25);
      }
      .menu-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255,255,255,0.4);
        cursor: pointer;
        transition: all 0.3s;
      }
      .menu-dot.active {
        background: #fff;
        transform: scale(1.2);
      }
      .menu-dot:hover {
        background: rgba(255,255,255,0.8);
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .menu-slide {
          min-width: 260px !important;
          flex: 0 0 260px !important;
        }
        .menu-arrow-prev, .menu-arrow-next {
          font-size: 2rem !important;
          width: 35px !important;
          height: 35px !important;
        }
      }
      @media (max-width: 576px) {
        .menu-slide {
          min-width: 280px !important;
          flex: 0 0 280px !important;
        }
      }
    </style>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const slider = document.getElementById('menuSlider');
        const slides = slider.querySelectorAll('.menu-slide');
        const dotsContainer = document.getElementById('menuDots');
        const prevBtn = document.getElementById('menuPrev');
        const nextBtn = document.getElementById('menuNext');
        
        let currentIndex = 0;
        let slidesToShow = 3;
        let slideWidth = 320;
        
        // Responsive slides per view
        function updateSlidesToShow() {
          if (window.innerWidth <= 576) {
            slidesToShow = 1;
            slideWidth = 280;
          } else if (window.innerWidth <= 768) {
            slidesToShow = 2;
            slideWidth = 260;
          } else {
            slidesToShow = 3;
            slideWidth = 320;
          }
        }
        
        // Create dots
        function createDots() {
          dotsContainer.innerHTML = '';
          const totalDots = Math.max(0, Math.ceil(slides.length - slidesToShow + 1));
          
          for (let i = 0; i < totalDots; i++) {
            const dot = document.createElement('div');
            dot.classList.add('menu-dot');
            if (i === currentIndex) dot.classList.add('active');
            dot.addEventListener('click', function() { 
              goToSlide(i); 
            });
            dotsContainer.appendChild(dot);
          }
        }
        
        // Go to specific slide
        function goToSlide(index) {
          const maxIndex = Math.max(0, slides.length - slidesToShow);
          currentIndex = Math.max(0, Math.min(index, maxIndex));
          
          const translateX = -(currentIndex * (slideWidth + 32)); // 32px adalah gap
          slider.style.transform = 'translateX(' + translateX + 'px)';
          
          // Update dots
          document.querySelectorAll('.menu-dot').forEach(function(dot, i) {
            if (i === currentIndex) {
              dot.classList.add('active');
            } else {
              dot.classList.remove('active');
            }
          });
          
          // Update arrow visibility
          prevBtn.style.opacity = currentIndex === 0 ? '0.5' : '1';
          nextBtn.style.opacity = currentIndex >= slides.length - slidesToShow ? '0.5' : '1';
        }
        
        // Navigation events
        prevBtn.addEventListener('click', function() {
          if (currentIndex > 0) {
            goToSlide(currentIndex - 1);
          }
        });
        
        nextBtn.addEventListener('click', function() {
          if (currentIndex < slides.length - slidesToShow) {
            goToSlide(currentIndex + 1);
          }
        });
        
        // Initialize
        function init() {
          updateSlidesToShow();
          createDots();
          goToSlide(0);
        }
        
        // Handle resize
        window.addEventListener('resize', function() {
          updateSlidesToShow();
          createDots();
          goToSlide(Math.min(currentIndex, slides.length - slidesToShow));
        });
        
        // Auto-play (optional)
        setInterval(function() {
          if (slides.length > slidesToShow) {
            if (currentIndex < slides.length - slidesToShow) {
              goToSlide(currentIndex + 1);
            } else {
              goToSlide(0);
            }
          }
        }, 5000);
        
        init();
      });
    </script>
  </section>

  {{-- Info Section with Interactive Slider --}}
  <section class="info-section d-flex align-items-center justify-content-center position-relative" style="min-height: 1150px; overflow: hidden;">
    
    {{-- Background Images --}}
    <div class="slider-images position-absolute top-0 start-0 w-100 h-100">
      <div class="slider-image active" data-category="fish-pond" style="background: url('/assets/img/image/lokasi/fish.JPG') center center/cover no-repeat; transition: opacity 0.6s ease;"></div>
      <div class="slider-image" data-category="meeting-room" style="background: url('/assets/img/image/lokasi/meet.WEBP') center center/cover no-repeat; transition: opacity 0.6s ease;"></div>
      <div class="slider-image" data-category="game-room" style="background: url('/assets/img/image/lokasi/game.WEBP') center center/cover no-repeat; transition: opacity 0.6s ease;"></div>
    </div>
    
    {{-- Overlay --}}
    <div class="info-overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(22, 21, 21, 0.7); z-index:1;"></div>
    
    {{-- Content --}}
    <div class="container position-relative d-flex flex-column align-items-center justify-content-center" style="z-index:2; min-height: 420px;">
      <div class="text-center mb-4" style="max-width:700px; margin:0 auto;">
        <h4 class="fw-bold mb-3 slider-title" style="color:#469CED; font-size:2.5rem; text-shadow:0 2px 8px rgba(255, 255, 255, 0.1);">Ngumpul, Nugas, atau Main? Semua Bisa di Dugg.</h4>
        <p class="mb-4 slider-description" style="font-size:1.15rem; color:#ffff;">Di sini kamu bisa recharge, reconnect, atau ngambil jeda sebentar dari sibuknya hari.</p>
        <a href="{{ route('lokasi') }}" class="btn btn-primary px-4 py-2" style="border-radius: 1.5rem; font-size:1.1rem; min-width:200px;">Cek Lokasi</a>
      </div>
      
      {{-- Pin Points Navigation --}}
      <div class="d-flex justify-content-center align-items-start gap-75 flex-wrap" style="width:100%; max-width:1200px; margin-top: 100px; column-gap: 500px; row-gap: 40px;">
      
        <!-- Fish Pond Pin Point -->
        <div class="pin-point d-flex flex-column align-items-center active" data-category="fish-pond" style="min-width:320px; cursor: pointer;">
          <div class="d-flex justify-content-center mb-4" style="z-index:2;">
            <div class="info-shape rounded-circle shadow d-flex flex-column align-items-center justify-content-center" style="width:120px; height:120px; background:#F7EBDC; color:#9F775E; transition: all 0.3s;">
              <img src="/assets/img/image/ikan.png" alt="Fish Pond" class="info-icon" style="height:70px; filter: brightness(0) invert(0.3); transition: filter 0.3s;">
            </div>
          </div>
          <div class="fw-bold mb-2 pin-title" style="font-size:1.3rem; color:#469CED; transition: color 0.3s;">Fish Pond</div>
          <div class="text-center pin-description" style="color:#fff; font-size:1rem; transition: color 0.3s;">Tenangin pikiran sambil denger gemericik air.</div>
        </div>
        
        <!-- Meeting Room Pin Point -->
        <div class="pin-point d-flex flex-column align-items-center" data-category="meeting-room" style="min-width:320px; cursor: pointer;">
          <div class="d-flex justify-content-center mb-4" style="z-index:2;">
            <div class="info-shape rounded-circle shadow d-flex flex-column align-items-center justify-content-center" style="width:120px; height:120px; background:#F7EBDC; color:#9F775E; transition: all 0.3s;">
              <img src="/assets/img/image/meet.png" alt="Meeting Room" class="info-icon" style="height:60px; filter: brightness(0) invert(0.3); transition: filter 0.3s;">
            </div>
          </div>
          <div class="fw-bold mb-2 pin-title" style="font-size:1.3rem; color:#469CED; transition: color 0.3s;">Meeting Room</div>
          <div class="text-center pin-description" style="color:#fff; font-size:1rem; transition: color 0.3s;">Ruang nyaman buat kerja bareng<br>atau ngobrol produktif.</div>
        </div>
        
        <!-- Game Room Pin Point -->
        <div class="pin-point d-flex flex-column align-items-center" data-category="game-room" style="min-width:320px; cursor: pointer;">
          <div class="d-flex justify-content-center mb-4" style="z-index:2;">
            <div class="info-shape rounded-circle shadow d-flex flex-column align-items-center justify-content-center" style="width:120px; height:120px; background:#F7EBDC; color:#9F775E; transition: all 0.3s;">
              <img src="/assets/img/image/game.png" alt="Game Room" class="info-icon" style="height:70px; filter: brightness(0) invert(0.3); transition: filter 0.3s;">
            </div>
          </div>
          <div class="fw-bold mb-2 pin-title" style="font-size:1.3rem; color:#469CED; transition: color 0.3s;">Game Room</div>
          <div class="text-center pin-description" style="color:#fff; font-size:1rem; transition: color 0.3s;">Tempat lepas stres dan seru-seruan<br>bareng temen.</div>
        </div>
      </div>
    </div>
    
    {{-- Slider Indicators --}}
    <div class="slider-indicators position-absolute d-flex gap-2" style="bottom: 30px; left: 50%; transform: translateX(-50%); z-index: 3;">
      <div class="indicator active" data-category="fish-pond" style="width: 12px; height: 12px; border-radius: 50%; background: #469CED; cursor: pointer; transition: all 0.3s;"></div>
      <div class="indicator" data-category="meeting-room" style="width: 12px; height: 12px; border-radius: 50%; background: rgba(255,255,255,0.5); cursor: pointer; transition: all 0.3s;"></div>
      <div class="indicator" data-category="game-room" style="width: 12px; height: 12px; border-radius: 50%; background: rgba(255,255,255,0.5); cursor: pointer; transition: all 0.3s;"></div>
    </div>
    
    <style>
      /* Slider Images */
      .slider-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        z-index: 0;
      }
      
      .slider-image.active {
        opacity: 1;
      }
      
      /* Pin Point Styles */
      .pin-point {
        transition: transform 0.3s ease;
      }
      
      .pin-point:hover {
        transform: translateY(-5px);
      }
      
      .pin-point.active .info-shape {
        background: #469CED !important;
        color: #fff !important;
        transform: scale(1.1);
        box-shadow: 0 8px 25px rgba(70, 156, 237, 0.4);
      }
      
      .pin-point.active .info-icon {
        filter: brightness(0) invert(1) !important;
      }
      
      .pin-point.active .pin-title {
        color: #ffffff !important;
        text-shadow: 0 2px 8px rgba(70, 156, 237, 0.6);
      }
      
      /* Hover Effects */
      .pin-point:hover .info-shape {
        background: #469CED !important;
        color: #fff !important;
        transform: scale(1.05);
      }
      
      .pin-point:hover .info-icon {
        filter: brightness(0) invert(1) !important;
      }
      
      /* Indicators */
      .indicator.active {
        background: #469CED !important;
        transform: scale(1.2);
      }
      
      .indicator:hover {
        background: #469CED !important;
        transform: scale(1.1);
      }
      
      /* Content Data */
      .slider-content {
        transition: all 0.6s ease;
      }
    </style>
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Content data untuk setiap kategori
        const contentData = {
          'fish-pond': {
            title: 'Nikmati Ketenangan di Fish Pond',
            description: 'Tempat sempurna untuk menenangkan pikiran sambil menikmati suara gemericik air dan pemandangan ikan yang berenang.'
          },
          'meeting-room': {
            title: 'Produktif di Meeting Room',
            description: 'Ruang meeting yang nyaman dan modern, dilengkapi fasilitas lengkap untuk rapat atau kerja kelompok yang produktif.'
          },
          'game-room': {
            title: 'Seru-seruan di Game Room',
            description: 'Zona hiburan dengan berbagai permainan menarik untuk melepas penat dan bersenang-senang bersama teman.'
          }
        };
        
        const pinPoints = document.querySelectorAll('.pin-point');
        const sliderImages = document.querySelectorAll('.slider-image');
        const indicators = document.querySelectorAll('.indicator');
        const sliderTitle = document.querySelector('.slider-title');
        const sliderDescription = document.querySelector('.slider-description');
        
        // Function untuk mengubah slide
        function changeSlide(category) {
          // Update pin points
          pinPoints.forEach(point => {
            point.classList.remove('active');
            if (point.dataset.category === category) {
              point.classList.add('active');
            }
          });
          
          // Update slider images
          sliderImages.forEach(image => {
            image.classList.remove('active');
            if (image.dataset.category === category) {
              image.classList.add('active');
            }
          });
          
          // Update indicators
          indicators.forEach(indicator => {
            indicator.classList.remove('active');
            indicator.style.background = 'rgba(255,255,255,0.5)';
            if (indicator.dataset.category === category) {
              indicator.classList.add('active');
              indicator.style.background = '#469CED';
            }
          });
          
          // Update content
          if (contentData[category]) {
            sliderTitle.textContent = contentData[category].title;
            sliderDescription.textContent = contentData[category].description;
          }
        }
        
        // Event listeners untuk pin points
        pinPoints.forEach(point => {
          point.addEventListener('click', function() {
            const category = this.dataset.category;
            changeSlide(category);
          });
        });
        
        // Event listeners untuk indicators
        indicators.forEach(indicator => {
          indicator.addEventListener('click', function() {
            const category = this.dataset.category;
            changeSlide(category);
          });
        });
        
        // Auto slide (opsional)
        let currentSlideIndex = 0;
        const categories = ['fish-pond', 'meeting-room', 'game-room'];
        
        function autoSlide() {
          currentSlideIndex = (currentSlideIndex + 1) % categories.length;
          changeSlide(categories[currentSlideIndex]);
        }
        
        // Uncomment baris di bawah untuk mengaktifkan auto slide setiap 5 detik
        // setInterval(autoSlide, 5000);
      });
    </script>
  </section>

  {{-- Testimoni Section --}}
  <section class="testimoni-section py-5 position-relative" style="background: #469CED; color: #fff; min-height: 500px; overflow: hidden; padding-left: 32px; padding-right: 32px;">
    <!-- Dekorasi gambar -->
    <img src="/assets/img/image/decor-3.png" alt="" style="position:absolute;top:0;right:0;width:220px;opacity:0.5;z-index:1; filter: brightness(0) invert(1);">
    <img src="/assets/img/image/decor-2.png" alt="" style="position:absolute;bottom:0;left:0;width:320px;opacity:0.2;z-index:1; filter: brightness(0) invert(1);">
    <div class="container position-relative" style="margin-top: 40px; z-index:2;">
      <h3 class="text-center fw-bold mb-2 text-white" style="font-size:2rem; margin-top: 20px;">Kata Mereka tentang Dugg</h3>
      <div class="mx-auto mb-4" style="width:180px;height:4px;background:#fff;border-radius:2px;"></div>
      
      <div class="testi-carousel-container position-relative" style="margin-top: 50px;">
        <!-- Navigation Arrows -->
        <button class="testi-arrow-prev position-absolute btn btn-link p-0" id="testiPrev" 
                style="font-size:2.5rem;color:#fff;z-index:3;left:-20px;top:50%;transform:translateY(-50%);width:40px;height:40px;display:flex;align-items:center;justify-content:center;border-radius:50%;background:rgba(255,255,255,0.2);transition:all 0.3s; margin-left: -100px;">
          <span aria-hidden="true">&#8249;</span>
        </button>
        
        <button class="testi-arrow-next position-absolute btn btn-link p-0" id="testiNext"
                style="font-size:2.5rem;color:#fff;z-index:3;right:-20px;top:50%;transform:translateY(-50%);width:40px;height:40px;display:flex;align-items:center;justify-content:center;border-radius:50%;background:rgba(255,255,255,0.2);transition:all 0.3s; margin-right: -100px;">
          <span aria-hidden="true">&#8250;</span>
        </button>

        <!-- Slider Container -->
        <div class="testi-slider-wrapper overflow-hidden" style="width:100%;">
          <div class="testi-slider d-flex" id="testiSlider" style="gap:2rem;transition:transform 0.5s ease-in-out;">
            @forelse($testimonials as $testimonial)
              <div class="testi-slide d-flex flex-column align-items-center" style="min-width: 350px; flex: 0 0 350px;">
                <div class="bg-white text-dark rounded-4 shadow p-4 position-relative d-flex flex-column align-items-center" style="min-width:320px; max-width:370px; margin-top: 30px; transition: transform 0.3s ease, box-shadow 0.3s ease;"
                     onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 30px rgba(0,0,0,0.25)'"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.15)'">
                  <img src="{{ $testimonial->image_url }}" alt="{{ $testimonial->name }}" class='rounded-circle border border-3 border-white' style='width:60px;height:60px;object-fit:cover;position:absolute;top:-30px;left:50%;transform:translateX(-50%);background:#fff;'>
                  <div class="fw-bold mt-4 mb-1 text-center">{{ $testimonial->name }}</div>
                  <div class="mb-2 text-center" style="color:#FFC107; font-size:1.2rem;">
                    @for($i = 1; $i <= 5; $i++)
                      @if($i <= $testimonial->rating)
                        <span>&#9733;</span>
                      @else
                        <span style="color:#ddd;">&#9734;</span>
                      @endif
                    @endfor
                  </div>
                  <div class="text-center" style="font-size:1rem;">{{ $testimonial->description }}</div>
                </div>
              </div>
            @empty
              <!-- Default cards kalau tidak ada testimoni -->
              <div class="testi-slide d-flex flex-column align-items-center" style="min-width: 350px; flex: 0 0 350px;">
                <div class="bg-white text-dark rounded-4 shadow p-4 position-relative d-flex flex-column align-items-center" style="min-width:320px; max-width:370px; margin-top: 30px;">
                  <img src='/assets/img/image/profile1.jpg' alt='profile' class='rounded-circle border border-3 border-white' style='width:60px;height:60px;object-fit:cover;position:absolute;top:-30px;left:50%;transform:translateX(-50%);background:#fff;'>
                  <div class="fw-bold mt-4 mb-1 text-center">Belum Ada Testimoni</div>
                  <div class="mb-2 text-center" style="color:#FFC107; font-size:1.2rem;">
                    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="text-center" style="font-size:1rem;">Testimoni pelanggan akan tampil di sini setelah admin menambahkannya</div>
                </div>
              </div>
              <div class="testi-slide d-flex flex-column align-items-center" style="min-width: 350px; flex: 0 0 350px;">
                <div class="bg-white text-dark rounded-4 shadow p-4 position-relative d-flex flex-column align-items-center" style="min-width:320px; max-width:370px; margin-top: 30px;">
                  <img src='/assets/img/image/profile1.jpg' alt='profile' class='rounded-circle border border-3 border-white' style='width:60px;height:60px;object-fit:cover;position:absolute;top:-30px;left:50%;transform:translateX(-50%);background:#fff;'>
                  <div class="fw-bold mt-4 mb-1 text-center">Review Akan Muncul</div>
                  <div class="mb-2 text-center" style="color:#FFC107; font-size:1.2rem;">
                    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="text-center" style="font-size:1rem;">Kami menunggu review dari pelanggan setia Dugg Coffee</div>
                </div>
              </div>
              <div class="testi-slide d-flex flex-column align-items-center" style="min-width: 350px; flex: 0 0 350px;">
                <div class="bg-white text-dark rounded-4 shadow p-4 position-relative d-flex flex-column align-items-center" style="min-width:320px; max-width:370px; margin-top: 30px;">
                  <img src='/assets/img/image/profile1.jpg' alt='profile' class='rounded-circle border border-3 border-white' style='width:60px;height:60px;object-fit:cover;position:absolute;top:-30px;left:50%;transform:translateX(-50%);background:#fff;'>
                  <div class="fw-bold mt-4 mb-1 text-center">Pengalaman Terbaik</div>
                  <div class="mb-2 text-center" style="color:#FFC107; font-size:1.2rem;">
                    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="text-center" style="font-size:1rem;">Bagikan pengalaman terbaik Anda bersama Dugg Coffee</div>
                </div>
              </div>
            @endforelse
          </div>
        </div>

        <!-- Dots Indicator -->
        <div class="testi-dots d-flex justify-content-center mt-4" id="testiDots" style="gap:8px;">
          <!-- Dots akan diisi dengan JavaScript -->
        </div>
      </div>
    </div>

    <style>
      .testi-arrow-prev:hover, .testi-arrow-next:hover {
        background: rgba(255,255,255,0.4) !important;
        transform: translateY(-50%) scale(1.1);
      }
      .testi-arrow-prev:focus, .testi-arrow-next:focus { 
        outline: none; 
        box-shadow: none; 
      }
      .testi-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255,255,255,0.4);
        cursor: pointer;
        transition: all 0.3s;
      }
      .testi-dot.active {
        background: #fff;
        transform: scale(1.2);
      }
      .testi-dot:hover {
        background: rgba(255,255,255,0.8);
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .testi-slide {
          min-width: 280px !important;
          flex: 0 0 280px !important;
        }
        .testi-arrow-prev, .testi-arrow-next {
          font-size: 2rem !important;
          width: 35px !important;
          height: 35px !important;
        }
      }
      @media (max-width: 576px) {
        .testi-slide {
          min-width: 300px !important;
          flex: 0 0 300px !important;
        }
      }
    </style>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const testiSlider = document.getElementById('testiSlider');
        const testiSlides = testiSlider.querySelectorAll('.testi-slide');
        const testiDotsContainer = document.getElementById('testiDots');
        const testiPrevBtn = document.getElementById('testiPrev');
        const testiNextBtn = document.getElementById('testiNext');
        
        let testiCurrentIndex = 0;
        let testiSlidesToShow = 3;
        let testiSlideWidth = 350;
        
        // Responsive slides per view
        function updateTestiSlidesToShow() {
          if (window.innerWidth <= 576) {
            testiSlidesToShow = 1;
            testiSlideWidth = 300;
          } else if (window.innerWidth <= 768) {
            testiSlidesToShow = 2;
            testiSlideWidth = 280;
          } else {
            testiSlidesToShow = 3;
            testiSlideWidth = 350;
          }
        }
        
        // Create dots
        function createTestiDots() {
          testiDotsContainer.innerHTML = '';
          const totalDots = Math.max(0, Math.ceil(testiSlides.length - testiSlidesToShow + 1));
          
          for (let i = 0; i < totalDots; i++) {
            const dot = document.createElement('div');
            dot.classList.add('testi-dot');
            if (i === testiCurrentIndex) dot.classList.add('active');
            dot.addEventListener('click', function() { 
              goToTestiSlide(i); 
            });
            testiDotsContainer.appendChild(dot);
          }
        }
        
        // Go to specific slide
        function goToTestiSlide(index) {
          const maxIndex = Math.max(0, testiSlides.length - testiSlidesToShow);
          testiCurrentIndex = Math.max(0, Math.min(index, maxIndex));
          
          const translateX = -(testiCurrentIndex * (testiSlideWidth + 32)); // 32px adalah gap
          testiSlider.style.transform = 'translateX(' + translateX + 'px)';
          
          // Update dots
          document.querySelectorAll('.testi-dot').forEach(function(dot, i) {
            if (i === testiCurrentIndex) {
              dot.classList.add('active');
            } else {
              dot.classList.remove('active');
            }
          });
          
          // Update arrow visibility
          testiPrevBtn.style.opacity = testiCurrentIndex === 0 ? '0.5' : '1';
          testiNextBtn.style.opacity = testiCurrentIndex >= testiSlides.length - testiSlidesToShow ? '0.5' : '1';
        }
        
        // Navigation events
        testiPrevBtn.addEventListener('click', function() {
          if (testiCurrentIndex > 0) {
            goToTestiSlide(testiCurrentIndex - 1);
          }
        });
        
        testiNextBtn.addEventListener('click', function() {
          if (testiCurrentIndex < testiSlides.length - testiSlidesToShow) {
            goToTestiSlide(testiCurrentIndex + 1);
          }
        });
        
        // Initialize
        function initTesti() {
          updateTestiSlidesToShow();
          createTestiDots();
          goToTestiSlide(0);
        }
        
        // Handle resize
        window.addEventListener('resize', function() {
          updateTestiSlidesToShow();
          createTestiDots();
          goToTestiSlide(Math.min(testiCurrentIndex, testiSlides.length - testiSlidesToShow));
        });
        
        // Auto-play (optional)
        setInterval(function() {
          if (testiSlides.length > testiSlidesToShow) {
            if (testiCurrentIndex < testiSlides.length - testiSlidesToShow) {
              goToTestiSlide(testiCurrentIndex + 1);
            } else {
              goToTestiSlide(0);
            }
          }
        }, 6000); // 6 detik untuk testimoni
        
        initTesti();
      });
    </script>
  </section>

  {{-- About Section --}}
  <section class="about-section position-relative py-5" style="min-height: 820px; overflow:hidden;">
    <video autoplay loop muted playsinline class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" style="object-fit:cover; z-index:0; filter: brightness(0.5) blur(1px);">
      <source src="/assets/img/image/about-vid2.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="about-overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.2); z-index:1;"></div>
    <div class="container position-relative" style="z-index:2; margin-top: 250px;">
      <div class="row justify-content-center">
        <div class="col-md-10 text-center mx-auto" style="position:relative;">
          <div style="font-size:10rem; font-weight:900; color:rgba(70,156,237,0.10); letter-spacing:1rem; position:absolute; left:50%; top:50%; transform:translate(-50%,-50%); z-index:0; user-select:none; margin-top: -30px;">DUGG</div>
          <h2 class="fw-bold mb-3 position-relative" style="color:#469CED; font-size:2.2rem; z-index:1; margin-top: 20px;">Satu Cangkir. Satu Cerita. Awal dari Dugg.</h2>
          <div class="mb-3 position-relative" style="color:#fff; font-size:1.15rem; z-index:1;  margin-top: 50px;">
            Kami percaya kopi bukan cuma minuman.<br>
            Kopi adalah medium untuk terkoneksi dengan diri sendiri, orang lain, dan cerita yang bermakna.<br>
            Dugg tumbuh bareng komunitas. Dari biji kopi pilihan sampai ruang yang hangat untuk istirahat sejenak.<br>
            <span class="fw-bold d-block mt-4">Dugg bukan singkatan.<br>Dugg adalah rasa 'pulang' di tengah kota.</span>
          </div>
          <a href="{{ route('cerita') }}" class="btn btn-primary px-4 py-2" style="border-radius: 1.5rem; font-size:1.1rem; z-index:1; margin-top: 50px;">Cerita Kami</a>
        </div>
      </div>
    </div>
  </section>

  {{-- Footer --}}
  <x-layouts.footer.default />
@endsection

