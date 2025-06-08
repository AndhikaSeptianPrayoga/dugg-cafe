{{-- filepath: f:\Coding\Laragon\laragon\www\sneat-bootstrap-laravel-livewire-starter-kit\resources\views\lokasi.blade.php --}}
@extends('layouts.app')

@section('page-style')
@section('title', 'Lokasi')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
<style>
    .hero-background {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #4a90e2 100%);
        background-size: 400% 400%;
        animation: gradientShift 8s ease infinite;
    }

    .hero-background::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('/assets/img/image/Lokasi/Hero.png') center/cover;

    }

    @keyframes gradientShift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .hero-overlay {
        background: rgba(0,0,0,0.2);
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        line-height: 1.2;
        letter-spacing: -0.02em;
        color: white !important;
        text-shadow: 0 2px 15px rgba(0,0,0,0.5);
    }

    .hero-subtitle {
        font-size: 1.25rem;
        font-weight: 400;
        line-height: 1.6;
        opacity: 0.95;
        max-width: 600px;
        margin: 0 auto;
        color: white !important;
        text-shadow: 0 2px 10px rgba(0,0,0,0.4);
    }

    .btn-google-maps {
        background: #4a90e2;
        border: 2px solid rgba(255,255,255,0.4);
        color: white !important;
        font-weight: 600;
        font-size: 1.1rem;
        padding: 15px 40px;
        border-radius: 50px;
        backdrop-filter: blur(15px);
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        text-shadow: 0 1px 3px rgba(0,0,0,0.3);
    }

    .btn-google-maps:hover {
        background: rgba(255,255,255,0.35);
        border-color: rgba(255,255,255,0.6);
        color: white !important;
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        text-decoration: none;
    }

    .hover-scale {
        transition: all 0.3s ease;
    }

    .hover-scale:hover {
        transform: translateY(-2px) scale(1.05);
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }

    /* Smooth scroll */
    html {
        scroll-behavior: smooth;
    }

    /* Hero responsive adjustments */
    @media (max-width: 768px) {
        .hero-section {
            margin-top: 70px !important;
            min-height: 500px !important;
        }

        .hero-title {
            font-size: 2.5rem !important;
        }

        .hero-subtitle {
            font-size: 1.1rem !important;
            padding: 0 20px;
        }

        .btn-google-maps {
            padding: 12px 30px;
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .hero-title {
            font-size: 2rem !important;
        }

        .hero-subtitle {
            font-size: 1rem !important;
        }
    }

    /* Image aspect ratio 1:1 dengan fixed zoom */
    .img-1-1-ratio {
        aspect-ratio: 1/1;
        object-fit: cover;
        object-position: center;
        width: 100%;
        height: auto;
        max-width: 500px;
        border-radius: 0.5rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .img-1-1-ratio:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    /* Container untuk gambar */
    .image-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Image aspect ratio 16:9 untuk kolam ikan (1920x1080) */
    .img-kolam-ratio {
        aspect-ratio: 16/9;
        object-fit: cover;
        object-position: center;
        width: 100%;
        height: auto;
        max-width: 1200px;
        border-radius: 0.5rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .img-kolam-ratio:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
</style>
@endsection

{{-- Navbar --}}
<x-layouts.navbar.default />

  <section class="hero-section position-relative p-0" style="min-height: 650px; margin-top: 50px;">
    {{-- Background dengan efek blur biru --}}
    <div class="hero-background position-absolute top-0 start-0 w-100 h-100"></div>

    {{-- Hero Content Overlay --}}
    <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
      <div class="text-center text-white px-4">
        <h1 class="hero-title fw-bold mb-4 animate__animated animate__fadeInUp">
          Tempat Cozy Buat Ngopi, Nugas, dan Recharge.
        </h1>
        <p class="hero-subtitle mb-5 animate__animated animate__fadeInUp animate__delay-1s">
          Lokasi Dugg bukan cuma soal tempat duduk.<br>
          Kami bikin ruang yang bikin kamu betah, sendiri atau ramean.
        </p>
        <div class="animate__animated animate__fadeInUp animate__delay-2s">
          <a href="https://www.google.com/maps/place/Dugg+Coffee/@-6.86294,107.5855323,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68e74564f9cd7d:0xa6e7ef35f31695bb!8m2!3d-6.86294!4d107.5881072!16s%2Fg%2F11jsn15txn?entry=ttu&g_ep=EgoyMDI1MDUyNi4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-google-maps btn-lg hover-scale">
            Google Maps
          </a>
        </div>
      </div>
    </div>
  </section>


@section('content')

<div id="lokasi-content" style="background: #F8F1E8; min-height: 100vh; padding-bottom: 40px;">
    <div class="container py-5">

        {{-- Meeting Room --}}
        <div class="row align-items-center mb-5" style="margin-left: 100px;">
            <div class="col-md-6 mb-3 mb-md-0">
                <h4 class="fw-bold" style="color: #3a7bd5; font-size: 3rem;">Meeting Room</h4>
                <p>Buat yang mau kerja bareng atau rapat santai.<br>
                Ditemani colokan, suasana tenang, dan kopi yang nemenin fokusmu.</p>
            </div>
            <div class="col-md-6 image-container" style="margin-top: 100px;">
                <img src="/assets/img/image/Lokasi/meet.WEBP" alt="Meeting Room" class="img-1-1-ratio">
            </div>
        </div>

        {{-- Game Room --}}
        <div class="row align-items-center mb-5 flex-md-row-reverse" ">
            <div class="col-md-6 mb-3 mb-md-0"  >
                <h4 class="fw-bold" style="color: #3a7bd5; font-size: 3rem;">Game Room</h4>
                <p>Nongkrong tapi tetap seru? Di sini tempatnya.<br>
                Main bareng temen, healing habis kelas atau kerja. Siap push rank juga boleh.</p>
            </div>
            <div class="col-md-6 image-container" style="margin-top: 100px;">
                <img src="/assets/img/image/Lokasi/game.WEBP" alt="Game Room" class="img-1-1-ratio">
            </div>
        </div>

        {{-- Kolam Ikan --}}
        <div class="mb-5" style="margin-top: 100px; ">
            <div class="image-container" style="margin-top: 100px;">
                <img src="/assets/img/image/Lokasi/fish.png" alt="Kolam Ikan" class="img-kolam-ratio">
            </div>
            <h4  class="fw-bold text-center" style="color: #3a7bd5; margin-top: 100px; font-size: 3rem;">Kolam Ikan</h4>
            <p class="text-center">
                Tempat paling tenang di Dugg.<br>
                Duduk di pinggir kolam, sambil ngopi atau mikirin hidup (atau mantan).<br>
                Adem dan rileks.
            </p>
            <div class="text-center mb-2">
                <a href="https://www.google.com/maps/place/Dugg+Coffee/@-6.86294,107.5855323,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68e74564f9cd7d:0xa6e7ef35f31695bb!8m2!3d-6.86294!4d107.5881072!16s%2Fg%2F11jsn15txn?entry=ttu&g_ep=EgoyMDI1MDUyNi4wIKXMDSoASAFQAw%3D%3D" class="fw-bold" style="color: #3a7bd5; margin-bottom: 100px;" target="_blank">Kunjungi Dugg Coffee</a>
            </div>
            <div class="text-center text-muted mb-2">
                <i class="bi bi-geo-alt"></i> Alamat: Jl. Gegerkalong Girang No. 66, Bandung<br>
                <i class="bi bi-clock"></i> Jam Operasional: 08:00 - 22:30 WIB
            </div>
            <div class="text-center">
                <a href="https://www.google.com/maps/place/Dugg+Coffee/@-6.86294,107.5855323,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68e74564f9cd7d:0xa6e7ef35f31695bb!8m2!3d-6.86294!4d107.5881072!16s%2Fg%2F11jsn15txn?entry=ttu&g_ep=EgoyMDI1MDUyNi4wIKXMDSoASAFQAw%3D%3D" class="btn btn-primary btn-sm" target="_blank">Google Maps</a>
            </div>
        </div>

        {{-- Instagram Feed --}}
        <div class="rounded p-4" style="background: #9F775E; margin-top: 100px;">
            <h5 class="text-center text-white mb-4">Follow Kami di Instagram</h5>
            <div class="row g-3 margin-top: 100px;">
                <div class="col-4">
                    <img src="/assets/img/image/Lokasi/1.jpg" class="img-1-1-ratio" alt="IG 1" style="max-width: 100%;">
                </div>
                <div class="col-4">
                    <img src="/assets/img/image/Lokasi/2.png" class="img-1-1-ratio" alt="IG 2" style="max-width: 100%;">
                </div>
                <div class="col-4">
                    <img src="/assets/img/image/Lokasi/3.png" class="img-1-1-ratio" alt="IG 3" style="max-width: 100%;">
                </div>
                <div class="col-4">
                    <img src="/assets/img/image/Lokasi/4.png" class="img-1-1-ratio" alt="IG 4" style="max-width: 100%;">
                </div>
                <div class="col-4">
                    <img src="/assets/img/image/Lokasi/5.png" class="img-1-1-ratio" alt="IG 5" style="max-width: 100%;">
                </div>
                <div class="col-4">
                    <img src="/assets/img/image/Lokasi/6.jpg" class="img-1-1-ratio" alt="IG 6" style="max-width: 100%; " >
                </div>
            </div>
        </div>
        {{--decorations--}}
  <img src="/assets/img/image/decor/decor- (21).png" alt="" style="position:absolute;bottom:0;left:0;width:620px;opacity:0.2;z-index:1; margin-bottom:-500px; margin-left:-100px;">
  <img src="/assets/img/image/decor/decor- (22).png" alt="" style="position:absolute;bottom:0;right:0;width:620px;opacity:0.2;z-index:1; margin-bottom:-200px;">
  <img src="/assets/img/image/decor/decor- (23).png" alt="" style="position:absolute;bottom:0;right:0;width:620px;opacity:0.2;z-index:1; margin-bottom:-2000px;">
    </div>
</div>


{{-- Footer --}}
  <x-layouts.footer.default />
@endsection

@section('page-script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Auto-hide scroll indicator after first scroll
        let hasScrolled = false;
        window.addEventListener('scroll', function() {
            if (!hasScrolled && window.scrollY > 50) {
                const scrollIndicator = document.querySelector('.scroll-indicator');
                if (scrollIndicator) {
                    scrollIndicator.style.transition = 'opacity 0.5s ease';
                    scrollIndicator.style.opacity = '0';
                    setTimeout(() => {
                        scrollIndicator.style.display = 'none';
                    }, 500);
                }
                hasScrolled = true;
            }
        });

        // Add parallax effect to hero image
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const heroImage = document.querySelector('.hero-section img');
            if (heroImage && scrolled < window.innerHeight) {
                heroImage.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });
    });
</script>
@endsection
