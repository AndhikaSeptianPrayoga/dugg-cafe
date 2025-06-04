<!-- Footer Baru Dugg -->
<footer class="footer-dugg py-5" style="background: #469CED; color: #fff; position: relative; overflow: hidden;">
  <!-- Dekorasi gambar -->
  <img src="/assets/img/image/decor/decor- (8).png" alt="" style="position:absolute;top:10;right:0;width:230px;opacity:0.5;z-index:1; filter: brightness(0) invert(1); margin-right: 50px;">
  <img src="/assets/img/image/decor-2.png" alt="" style="position:absolute;bottom:0;left:0;width:260px;opacity:0.2;z-index:1; filter: brightness(0) invert(1);">
  <img src="/assets/img/image/decor/decor- (18).png" alt="" style="position:absolute;top:10;right:0;width:230px;opacity:0.5;z-index:1; filter: brightness(0) invert(1); margin-top: 80px; margin-right: 1000px;">
  <div class="container position-relative" style="z-index:2;">
    <div class="row align-items-start">
      <!-- Kiri: Logo & Deskripsi -->
      <div class="col-md-4 mb-4 mb-md-0 d-flex flex-column align-items-start">
        <img src="/assets/img/image/white-logo.png" alt="Dugg Logo" style="height: 72px; margin-bottom: 12px;">
        <div class="footer-desc pe-4" style="font-size: 1rem; max-width: 280px; line-height: 1.6;">
          Tempat di mana kopi, cerita, dan suasana hangat berpadu dalam setiap cangkir
        </div>
      </div>
      <!-- Tengah: Navigasi & Sosmed -->
      <div class="col-md-4 mb-4 mb-md-0 d-flex flex-column align-items-start" style="border-right: 1px solid rgba(255,255,255,0.2); min-height: 180px;">
        <div class="fw-bold mb-3" style="font-size: 1.2rem;">DUGG</div>
        <ul class="list-unstyled mb-3">
          <li class="mb-2"><a href="/cerita" class="footer-link text-white text-decoration-none hover-effect"><i class="fas fa-mug-hot me-2"></i>Cerita Kami</a></li>
          <li class="mb-2"><a href="/menu" class="footer-link text-white text-decoration-none hover-effect"><i class="fas fa-coffee me-2"></i>Menu</a></li>
          <li class="mb-2"><a href="/lokasi" class="footer-link text-white text-decoration-none hover-effect"><i class="fas fa-map-marker-alt me-2"></i>Lokasi</a></li>
          <li class="mb-2"><a href="/blog" class="footer-link text-white text-decoration-none hover-effect"><i class="fas fa-book-open me-2"></i>Blog</a></li>
          <li class="mb-2"><a href="{{ route('contact') }}" class="footer-link text-white text-decoration-none hover-effect"><i class="fas fa-envelope me-2"></i>Kontak</a></li>
        </ul>
      </div>
      <!-- Kanan: Social Media -->
      <div class="col-md-4 d-flex flex-column align-items-start ps-md-4" style="position:relative;">
        <div class="fw-bold mb-3" style="font-size: 1.2rem;">Ikuti Kami</div>
        <div class="d-flex gap-4">
          <a href="https://www.instagram.com/duggcoffee.66/" target="_blank" class="text-white social-link" title="Instagram Dugg Coffee">
            <img src="/assets/img/image/icon/instagram.png" alt="Instagram" style="width: 20px; height: 20px; filter: brightness(0) invert(1);">
          </a>
          <a href="https://tiktok.com/@duggcoffee" target="_blank" class="text-white social-link" title="TikTok Dugg Coffee">
            <img src="/assets/img/image/icon/tik-tok.png" alt="TikTok" style="width: 20px; height: 20px; filter: brightness(0) invert(1);">
          </a>
          <a href="https://facebook.com/duggcoffee" target="_blank" class="text-white social-link" title="Facebook Dugg Coffee">
            <img src="/assets/img/image/icon/facebook.png" alt="Facebook" style="width: 20px; height: 20px; filter: brightness(0) invert(1);">
          </a>
          <a href="https://wa.me/6285700649117" target="_blank" class="text-white social-link" title="WhatsApp Dugg Coffee">
            <img src="/assets/img/image/icon/whatsapp.png" alt="WhatsApp" style="width: 20px; height: 20px; filter: brightness(0) invert(1);">
          </a>
        </div>
        <div class="d-flex gap-4" style="margin-top: 10px;">
          <p>Ada yang spesial bakal kami bisikin ke inbox kamu</p>
        </div>
        <form class="newsletter-form" id="newsletterForm">
            @csrf
            <div class="input-group">
                <input type="email" name="email" class="form-control" placeholder="Masukkan email kamu" required 
                       style="background: rgba(255, 255, 255, 0); border: 1px solid rgb(250, 250, 250); color: white; border-radius: 25px 0 0 25px; padding: 12px 20px;">
                <button type="submit" class="btn btn-light" 
                        style="border-radius: 0 25px 25px 0; padding: 12px 25px; font-weight: 600; background: white; color: #469CED;">
                    Daftar
                </button>
            </div>
            <div id="newsletterMessage" class="text-white mt-2" style="display: none;"></div>
        </form>

        <script>
            document.getElementById('newsletterForm').addEventListener('submit', function(e) {
                e.preventDefault();
                const messageDiv = document.getElementById('newsletterMessage');
                messageDiv.textContent = 'Email Anda telah terdaftar!';
                messageDiv.style.display = 'block';
                this.reset();
            });
        </script>
        <!-- Dekorasi kopi kanan bawah -->
        <img src="/assets/img/footer-decor.png" alt="" style="position: absolute; right: -40px; bottom: -30px; max-width: 180px; opacity: 0.18; pointer-events: none;">
      </div>
    </div>
    
    <!-- Copyright -->
    <div class="row mt-5 pt-4" style="border-top: 1px solid rgba(255,255,255,0.2);">
      <div class="col-12 text-center">
        <p class="mb-0" style="font-size: 0.9rem; opacity: 0.8;">
          &copy; {{ date('Y') }} Dugg Coffee. All rights reserved.
        </p>
      </div>
    </div>
  </div>
  <style>
    .footer-dugg .hover-effect {
      transition: all 0.3s ease;
      opacity: 0.9;
    }
    .footer-dugg .hover-effect:hover {
      opacity: 1;
      transform: translateX(5px);
    }
    .footer-dugg .social-link {
      transition: all 0.3s ease;
      opacity: 0.9;
      padding: 12px;
      border-radius: 50%;
      background: rgba(255,255,255,0.1);
      display: flex;
      align-items: center;
      justify-content: center;
      width: 45px;
      height: 45px;
    }
    .footer-dugg .social-link:hover {
      opacity: 1;
      background: rgba(255,255,255,0.2);
      transform: translateY(-3px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    @media (max-width: 991px) {
      .footer-dugg .row { flex-direction: column !important; }
      .footer-dugg .col-md-4 { 
        border-right: none !important; 
        padding-bottom: 32px;
        min-height: auto !important;
      }
      .footer-dugg .col-md-4:last-child { padding-bottom: 0; }
    }
    @media (max-width: 767px) {
      .footer-dugg { 
        font-size: 0.95rem;
        padding: 3rem 0 !important;
      }
      .footer-dugg .col-md-4 { 
        padding-left: 0 !important; 
        padding-right: 0 !important;
        text-align: center;
        align-items: center !important;
      }
      .footer-dugg .footer-desc {
        padding-right: 0 !important;
        margin: 0 auto;
      }
      .footer-dugg .social-link {
        padding: 6px;
      }
    }
  </style>
</footer>
<!--/ Footer Baru Dugg -->
