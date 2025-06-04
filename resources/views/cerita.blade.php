@extends('layouts.app')

@section('title', 'Cerita')

{{-- Navbar --}}
<x-layouts.navbar.default />

@section('content')
<div style="background: #F8F1E8; min-height: 100vh;">
    
    {{-- Hero Section --}}
    <section class="py-5" style="background: #F8F1E8; min-height: 400px; margin-top: 50px;">
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 50px;">
                <div class="col-md-8 text-center">
                    <h1 class="fw-bold mb-4" style="color: #3a7bd5; font-size: 2.5rem;">
                        Dimulai dari satu cangkir dan banyak pertanyaan.
                    </h1>
                    <p class="lead text-dark mb-4">
                        Kami percaya, kopi bukan cuma minuman.<br>
                        Tetapi kopi adalah medium untuk terkoneksi.<br>
                        Terkoneksi dengan diri sendiri, dengan orang lain, dengan cerita-<br>
                        cerita yang tumbuh dari meja yang sama.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Video Section --}}
    <section class="py-5" style="position: relative; z-index: 2;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="position-relative" style="border-radius: 10px; overflow: hidden; aspect-ratio: 16/9;">
                        <video 
                            autoplay
                            muted
                            loop
                            playsinline
                            poster="/assets/img/image/cerita-vid2.mp4" 
                            style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;"
                            preload="metadata">
                            <source src="/assets/img/image/cerita-vid2.mp4" type="video/mp4">
                            <source src="/assets/img/image/cerita-vid2.mp4" type="video/webm">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Story Section --}}
    <section class="py-5" style="background: #469CED; margin-top: -250px; position: relative; z-index: 1;">
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 400px;">
                <div class="col-md-8 text-center">
                    <h2 class="text-white fw-bold mb-4" style="font-size: 2rem;">
                        Kami bukan barista profesional saat memulai.
                    </h2>
                    <p class="text-white mb-4">
                        Kami cuma sekelompok teman dengan impian sederhana:<br>
                        membuat ruang yang hangat, otentik, dan bikin siapa pun pengen kembali.
                    </p>
                    <p class="text-white mb-4">
                        Mulai dari roasting sendiri biji kopi lokal terbaik, meracik menu yang relevan sama lidah<br>
                        hingga menciptakan tempat di mana kamu bisa lepas penat,<br>
                        gaming room buat ngelepas stres, dan meeting room buat ngerjain mimpi.<br>
                        Dugg tumbuh bareng komunitasnya.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Cards Section --}}
    <section class="py-5" style="background: #469CED;">
        {{-- Dekorasi gambar --}}
        <img src="/assets/img/image/decor/decor- (5.2).png" alt="" style="position:absolute;bottom:0;left:0;width:620px;opacity:0.5;z-index:1; margin-bottom:-1200px; margin-left:-100px; filter: brightness(0) invert(1);">
        <img src="/assets/img/image/decor/decor- (5.1).png" alt="" style="position:absolute;bottom:0;right:0;width:620px;opacity:0.5;z-index:1; margin-bottom:-600px; filter: brightness(0) invert(1);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div id="imageCarousel" class="position-relative">
                        <!-- Carousel Container -->
                        <div class="carousel-container" style="overflow: hidden; position: relative; height: 600px;">
                            <div class="carousel-track d-flex justify-content-center align-items-center gap-4 transition-all" style="transform: translateX(0); transition: transform 0.3s ease;">
                                <!-- Card 1 -->
                                <div class="carousel-card" style="width: 320px; height: 400px; border-radius: 10px; opacity: 0.7; transform: scale(0.8); transition: all 0.3s ease; overflow: hidden;">
                                    <img src="/assets/img/image/cerita/cerita1.jpg" alt="Dugg Story 1" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px; aspect-ratio: 4/5;">
                                </div>
                                <!-- Card 2 (Active/Center) -->
                                <div class="carousel-card active" style="width: 400px; height: 500px; border-radius: 10px; opacity: 1; transform: scale(1); transition: all 0.3s ease; overflow: hidden;">
                                    <img src="/assets/img/image/cerita/cerita2.jpg" alt="Dugg Story 2" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px; aspect-ratio: 4/5;">
                                </div>
                                <!-- Card 3 -->
                                <div class="carousel-card" style="width: 320px; height: 400px; border-radius: 10px; opacity: 0.7; transform: scale(0.8); transition: all 0.3s ease; overflow: hidden;">
                                    <img src="/assets/img/image/cerita/cerita3.jpg" alt="Dugg Story 3" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px; aspect-ratio: 4/5;">
                                </div>
                                <!-- Card 4 (Hidden) -->
                                <div class="carousel-card" style="width: 320px; height: 400px; border-radius: 10px; opacity: 0.7; transform: scale(0.8); transition: all 0.3s ease; display: none; overflow: hidden;">
                                    <img src="/assets/img/image/cerita/cerita4.jpg" alt="Dugg Story 4" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px; aspect-ratio: 4/5;">
                                </div>
                                <!-- Card 5 (Hidden) -->
                                <div class="carousel-card" style="width: 320px; height: 400px; border-radius: 10px; opacity: 0.7; transform: scale(0.8); transition: all 0.3s ease; display: none; overflow: hidden;">
                                    <img src="/assets/img/image/cerita/cerita1.jpg" alt="Dugg Story 5" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px; aspect-ratio: 4/5;">
                                </div>
                                <!-- Card 6 (Hidden) -->
                                <div class="carousel-card" style="width: 320px; height: 400px; border-radius: 10px; opacity: 0.7; transform: scale(0.8); transition: all 0.3s ease; display: none; overflow: hidden;">
                                    <img src="/assets/img/image/cerita/cerita2.jpg" alt="Dugg Story 6" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px; aspect-ratio: 4/5;">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Navigation Buttons -->
                        <div class="text-center mt-4">
                            <button id="prevBtn" class="btn btn-link text-white me-3" style="font-size: 24px; border: none; background: none;">‹</button>
                            <button id="nextBtn" class="btn btn-link text-white" style="font-size: 24px; border: none; background: none;">›</button>
                        </div>

                        <!-- Dots Indicator -->
                        <div class="text-center mt-3">
                            <span class="carousel-dot active" data-slide="0" style="display: inline-block; width: 10px; height: 10px; border-radius: 50%; background: white; margin: 0 5px; cursor: pointer; opacity: 1;"></span>
                            <span class="carousel-dot" data-slide="1" style="display: inline-block; width: 10px; height: 10px; border-radius: 50%; background: white; margin: 0 5px; cursor: pointer; opacity: 0.5;"></span>
                            <span class="carousel-dot" data-slide="2" style="display: inline-block; width: 10px; height: 10px; border-radius: 50%; background: white; margin: 0 5px; cursor: pointer; opacity: 0.5;"></span>
                            <span class="carousel-dot" data-slide="3" style="display: inline-block; width: 10px; height: 10px; border-radius: 50%; background: white; margin: 0 5px; cursor: pointer; opacity: 0.5;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Final Section --}}
    <section class="py-5" style="background: #469CED;">
        <div class="container" style="margin-top: 50px; margin-bottom: 100px;">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h3 class="text-white fw-bold mb-3">Dugg itu bukan singkatan.</h3>
                    <p class="text-white">
                        Tapi kalau kamu mau tahu,<br>
                        Dugg adalah rasa 'pulang' di tengah kota.
                    </p>
                </div>
            </div>
        </div>
    </section>

</div>

{{-- Footer --}}
<x-layouts.footer.default />

<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('imageCarousel');
    const track = carousel.querySelector('.carousel-track');
    const cards = carousel.querySelectorAll('.carousel-card');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dots = carousel.querySelectorAll('.carousel-dot');
    
    let currentSlide = 0;
    const totalSlides = 4; // Total slides available
    
    function updateCarousel() {
        // Hide all cards first
        cards.forEach(card => {
            card.style.display = 'none';
            card.classList.remove('active');
        });
        
        // Show 3 cards: previous, current, next
        const prevIndex = currentSlide;
        const centerIndex = (currentSlide + 1) % cards.length;
        const nextIndex = (currentSlide + 2) % cards.length;
        
        // Show and position cards
        cards[prevIndex].style.display = 'block';
        cards[centerIndex].style.display = 'block';
        cards[nextIndex].style.display = 'block';
        
        // Reset all cards to side style
        cards.forEach(card => {
            card.style.width = '200px';
            card.style.height = '350px';
            card.style.opacity = '0.7';
            card.style.transform = 'scale(0.8)';
        });
        
        // Make center card active (big)
        cards[centerIndex].style.width = '250px';
        cards[centerIndex].style.height = '500px';
        cards[centerIndex].style.opacity = '1';
        cards[centerIndex].style.transform = 'scale(1)';
        cards[centerIndex].classList.add('active');
        
        // Update dots
        dots.forEach((dot, index) => {
            dot.style.opacity = index === currentSlide ? '1' : '0.5';
        });
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateCarousel();
    }
    
    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateCarousel();
    }
    
    // Event listeners
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);
    
    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            updateCarousel();
        });
    });
    
    // Auto-slide (optional)
    setInterval(nextSlide, 5000);
    
    // Initialize
    updateCarousel();
});
</script>
@endsection

