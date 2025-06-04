@extends('layouts.app')

@section('title', $product->name . ' - Detail Menu')

@section('content')
  {{-- Navbar --}}
  <x-layouts.navbar.default />

  {{-- Detail Menu Section --}}
  <section class="detail-menu-section py-5" style="background: #F8F1E8; min-height: 40vh; padding-top: 120px;">
    <div class="container" style="margin-top: 100px;">
      <div class="row g-5" style="margin-top: 100px;">
        <!-- Product Image -->
        <div class="col-lg-6 mb-4">
          <div class="product-image-container position-relative">
            <div class="main-image mb-3 position-relative overflow-hidden rounded-4">
              <img src="{{ $product->image_url }}" alt="{{ $product->name }}" 
                   class="img-fluid w-100 main-product-image" 
                   style="aspect-ratio: 1/1; object-fit: cover; max-height: 550px;" 
                   id="mainImage">
              
              <!-- Decorative Elements -->
              <div class="image-decoration position-absolute" style="top: -20px; right: -20px; width: 100px; height: 100px; background: linear-gradient(45deg, #469CED, #3a7bd5); border-radius: 50%; opacity: 0.1; z-index: 1;"></div>
              <div class="image-decoration position-absolute" style="bottom: -15px; left: -15px; width: 60px; height: 60px; background: linear-gradient(45deg, #ff6b6b, #ee5a52); border-radius: 50%; opacity: 0.1; z-index: 1;"></div>
            </div>
            
            <!-- Category Badge -->
            <span class="position-absolute badge rounded-pill m-3 px-4 py-2 fw-bold" 
                  style="top: 20px; left: 20px; background: linear-gradient(45deg, #469CED, #3a7bd5); font-size: 0.9rem; z-index: 10; box-shadow: 0 4px 15px rgba(70, 156, 237, 0.3);">
              {{ $product->category_name }}
            </span>
            
            <!-- Status Badge -->
            @if($product->is_active)
              <span class="position-absolute badge rounded-pill m-3 px-4 py-2 fw-bold" 
                    style="top: 20px; right: 20px; background: linear-gradient(45deg, #28a745, #20c997); font-size: 0.9rem; z-index: 10; box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);">
                <i class="fas fa-check me-1"></i>Tersedia
              </span>
            @endif
          </div>
        </div>

        <!-- Product Info -->
        <div class="col-lg-6">
          <div class="product-info h-100 d-flex flex-column">
            <!-- Product Header -->
            <div class="product-header mb-5">
              <div class="title-decoration mb-3">
                <div class="title-line" style="width: 60px; height: 4px; background: linear-gradient(45deg, #469CED, #3a7bd5); border-radius: 2px; margin-bottom: 20px;"></div>
              </div>
              <h1 class="product-title display-4 fw-bold mb-3 animate-title" style="color: #2c3e50; line-height: 1.2;">
                {{ $product->name }}
              </h1>
              
              <div class="price-section p-4 rounded-4 mb-4" style="background: linear-gradient(135deg, #fff, #f8f9fa); border: 3px solid #469CED; box-shadow: 0 8px 30px rgba(70, 156, 237, 0.1);">
                <div class="price display-5 fw-bold mb-1" style="color: #469CED;">
                  {{ $product->formatted_price }}
                </div>
                <small class="text-muted d-flex align-items-center">
                  <i class="fas fa-info-circle me-2"></i>Harga sudah termasuk pajak
                </small>
              </div>
            </div>

            <!-- Product Description -->
            @if($product->description)
              <div class="product-description mb-5">
                <h5 class="fw-bold mb-3 d-flex align-items-center" style="color: #34495e;">
                  <i class="fas fa-file-alt me-2" style="color: #469CED;"></i>Deskripsi
                </h5>
                <div class="description-text p-4 rounded-4 position-relative" style="background: linear-gradient(135deg, #fff, #f8f9fa); border-left: 5px solid #469CED; box-shadow: 0 8px 25px rgba(0,0,0,0.08);">
                  <div class="description-icon position-absolute" style="top: 15px; right: 20px; color: #469CED; opacity: 0.1; font-size: 3rem;">
                    <i class="fas fa-quote-right"></i>
                  </div>
                  <p class="mb-0 lh-lg position-relative" style="font-size: 1.1rem; color: #555; z-index: 2;">{{ $product->description }}</p>
                </div>
              </div>
            @endif

            <!-- Product Details -->
            <div class="product-details mb-5">
              <h5 class="fw-bold mb-4 d-flex align-items-center" style="color: #34495e;">
                <i class="fas fa-info-circle me-2" style="color: #469CED;"></i>Informasi Produk
              </h5>
              <div class="details-grid">
                <div class="row g-4">
                  <div class="col-md-6">
                    <div class="detail-item p-4 rounded-4 h-100 position-relative overflow-hidden" style="background: linear-gradient(135deg, #fff, #f8f9fa); box-shadow: 0 8px 25px rgba(0,0,0,0.08); border: 2px solid transparent; transition: all 0.3s ease;">
                      <div class="detail-bg position-absolute" style="top: -20px; right: -20px; width: 80px; height: 80px; background: linear-gradient(45deg, #469CED, #3a7bd5); border-radius: 50%; opacity: 0.05;"></div>
                      <div class="d-flex align-items-center position-relative">
                        <div class="icon-wrapper me-3 p-3 rounded-circle" style="background: linear-gradient(45deg, #469CED, #3a7bd5); box-shadow: 0 4px 15px rgba(70, 156, 237, 0.3);">
                          <i class="fas fa-tag text-white"></i>
                        </div>
                        <div>
                          <small class="text-muted d-block fw-semibold">Kategori</small>
                          <strong class="fw-bold" style="color: #2c3e50;">{{ $product->category_name }}</strong>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-item p-4 rounded-4 h-100 position-relative overflow-hidden" style="background: linear-gradient(135deg, #fff, #f8f9fa); box-shadow: 0 8px 25px rgba(0,0,0,0.08); border: 2px solid transparent; transition: all 0.3s ease;">
                      <div class="detail-bg position-absolute" style="top: -20px; right: -20px; width: 80px; height: 80px; background: linear-gradient(45deg, #28a745, #20c997); border-radius: 50%; opacity: 0.05;"></div>
                      <div class="d-flex align-items-center position-relative">
                        <div class="icon-wrapper me-3 p-3 rounded-circle" style="background: linear-gradient(45deg, #28a745, #20c997); box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);">
                          <i class="fas fa-check-circle text-white"></i>
                        </div>
                        <div>
                          <small class="text-muted d-block fw-semibold">Status</small>
                          <strong class="text-success fw-bold">Tersedia</strong>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Action Buttons -->
            <div class="action-buttons mt-auto">
              <div class="d-flex gap-3 flex-wrap">
                <a href="https://gofood.co.id/bandung/restaurant/dugg-jl-gegerkalong-girang-no-66-43c12420-3691-44b4-aeae-874e08274ab3" 
                   target="_blank"
                   class="btn btn-primary btn-lg px-5 py-3 rounded-pill fw-bold flex-fill order-button" 
                   style="background: linear-gradient(45deg, #469CED, #3a7bd5); border: none; box-shadow: 0 8px 25px rgba(70, 156, 237, 0.3); transition: all 0.3s ease; text-decoration: none;">
                  <i class="fas fa-shopping-cart me-2"></i>Pesan Sekarang
                </a>
                <button class="btn btn-outline-secondary btn-lg px-4 py-3 rounded-pill fw-semibold share-btn"  onclick="shareProduct()" style="transition: all 0.3s ease; background-color: #469CED; color: white;">
                  <i class="fas fa-share-alt me-2"></i>Bagikan
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Related Products Section --}}
  @if($relatedProducts->count() > 0)
    <section class="related-products-section py-5" style="background: #F8F1E8; ">
      <div class="container" style="margin-top: 100px;">
        <div class="section-header text-center mb-5">

          <h2 class="fw-bold mb-3" style="color: #469CED;">Pilihan Menu Lainnya</h2>
          <p class="text-muted mb-4">Coba juga menu lain dari kategori {{ $product->category_name }}</p>
          <div class="mx-auto" style="width: 100px; height: 4px; background: linear-gradient(45deg, #469CED, #3a7bd5); border-radius: 2px;"></div>
        </div>

        <div class="row g-4">
          @foreach($relatedProducts as $relatedProduct)
            <div class="col-lg-3 col-md-6">
              <div class="product-card h-100 border-0 rounded-4 overflow-hidden position-relative" 
                   style="background: #fff; box-shadow: 0 8px 25px rgba(0,0,0,0.08); transition: all 0.4s ease; cursor: pointer;"
                   onclick="window.location.href='{{ route('menu.detail', $relatedProduct) }}'">
                <div class="product-image position-relative overflow-hidden">
                  <img src="{{ $relatedProduct->image_url }}" alt="{{ $relatedProduct->name }}" 
                       class="w-100" style="aspect-ratio: 1/1; object-fit: cover; transition: all 0.4s ease;">
                  <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" 
                       style="background: linear-gradient(45deg, rgba(70, 156, 237, 0.9), rgba(58, 123, 213, 0.9)); opacity: 0; transition: all 0.4s ease;">
                    <div class="text-center text-white">
                      <i class="fas fa-eye fa-2x mb-2"></i>
                      <div class="fw-bold">Lihat Detail</div>
                    </div>
                  </div>
                  <!-- Card decoration -->
                  <div class="card-decoration position-absolute" style="top: -10px; right: -10px; width: 50px; height: 50px; background: linear-gradient(45deg, #ff6b6b, #ee5a52); border-radius: 50%; opacity: 0.1;"></div>
                </div>
                <div class="card-body p-4">
                  <div class="category-badge mb-2">
                    <span class="badge rounded-pill px-3 py-1" style="background: linear-gradient(45deg, #469CED, #3a7bd5); font-size: 0.75rem;">{{ $relatedProduct->category_name }}</span>
                  </div>
                  <h5 class="card-title fw-bold mb-2" style="color: #2c3e50;">{{ $relatedProduct->name }}</h5>
                  <p class="text-muted small mb-3" style="line-height: 1.5;">{{ Str::limit($relatedProduct->description, 60) }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold" style="color: #469CED; font-size: 1.2rem;">{{ $relatedProduct->formatted_price }}</span>
                    <div class="rating text-warning">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="text-center mt-5">
          <a href="{{ route('menu') }}" class="btn btn-outline-primary btn-lg px-5 py-3 rounded-pill fw-bold" style="border: 2px solid #469CED; transition: all 0.3s ease; margin-top: 20px; margin-bottom: 20px;">
            <i class="fas fa-arrow-left me-2"></i>Kembali ke Menu
          </a>
        </div>
      </div>
    </section>
  @endif

  {{-- Footer --}}
  <x-layouts.footer.default />

  <style>
    /* Main Image Animations */
    .main-product-image {
      transition: all 0.4s ease;
    }
    .main-image:hover .main-product-image {
      transform: scale(1.05);
    }

    /* Product Cards */
    .product-card {
      transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    }
    .product-card:hover {
      transform: translateY(-15px) scale(1.02);
      box-shadow: 0 20px 40px rgba(0,0,0,0.15) !important;
    }
    .product-card:hover .overlay {
      opacity: 1 !important;
    }
    .product-card:hover img {
      transform: scale(1.1);
    }

    /* Breadcrumb */
    .breadcrumb-item a {
      color: #469CED;
      transition: all 0.3s ease;
    }
    .breadcrumb-item a:hover {
      color: #2980b9;
      transform: translateX(3px);
    }

    /* Action Buttons */
    .order-button:hover {
      transform: translateY(-3px) scale(1.05);
      box-shadow: 0 12px 35px rgba(25, 33, 41, 0.4) !important;
    }
    
    .favorite-btn:hover {

    }
    
    .share-btn:hover {
      transform: translateY(-2px);
      background: linear-gradient(45deg, #dc3545, #c82333);
      color: white;
      border-color: #dc3545;
    }

    /* Detail Items */
    .detail-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0,0,0,0.12) !important;
      border-color: #469CED !important;
    }

    /* Animations */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-title {
      animation: fadeInUp 0.8s ease-out;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .product-header .display-4 {
        font-size: 2rem;
      }
      .price-section .display-5 {
        font-size: 1.8rem;
      }
      .action-buttons .btn {
        font-size: 0.9rem;
        padding: 0.75rem 1.5rem !important;
      }
    }

    /* Smooth scroll for better UX */
    html {
      scroll-behavior: smooth;
    }

    /* Loading animation for images */
    img {
      transition: opacity 0.3s ease;
    }
    img:not([src]) {
      opacity: 0;
    }

    /* Back to menu button hover */
    .btn-outline-primary:hover {
      background: linear-gradient(45deg, #469CED, #3a7bd5);
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(70, 156, 237, 0.3);
    }

    /* Section badge animation */
    .section-badge {
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% {
        box-shadow: 0 4px 15px rgba(70, 156, 237, 0.3);
      }
      50% {
        box-shadow: 0 8px 25px rgba(70, 156, 237, 0.5);
      }
      100% {
        box-shadow: 0 4px 15px rgba(70, 156, 237, 0.3);
      }
    }
  </style>

  <script>
    function shareProduct() {
      if (navigator.share) {
        navigator.share({
          title: '{{ $product->name }} - Dugg Coffee',
          text: 'Lihat menu {{ $product->name }} di Dugg Coffee. {{ $product->description }}',
          url: window.location.href
        });
      } else {
        // Fallback: copy to clipboard
        navigator.clipboard.writeText(window.location.href).then(function() {
          // Create toast notification
          const toast = document.createElement('div');
          toast.innerHTML = '<i class="fas fa-check me-2"></i>Link berhasil disalin!';
          toast.className = 'position-fixed alert alert-success';
          toast.style.cssText = 'top: 20px; right: 20px; z-index: 9999; animation: slideIn 0.3s ease;';
          document.body.appendChild(toast);
          
          setTimeout(() => {
            toast.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => document.body.removeChild(toast), 300);
          }, 2000);
        });
      }
    }

    // Enhanced page load animations
    document.addEventListener('DOMContentLoaded', function() {
      // Staggered fade-in animation for elements
      const elements = [
        '.product-image-container',
        '.product-header',
        '.product-description',
        '.product-details',
        '.action-buttons'
      ];
      
      elements.forEach((selector, index) => {
        const el = document.querySelector(selector);
        if (el) {
          el.style.opacity = '0';
          el.style.transform = 'translateY(40px)';
          setTimeout(() => {
            el.style.transition = 'all 0.8s cubic-bezier(0.25, 0.8, 0.25, 1)';
            el.style.opacity = '1';
            el.style.transform = 'translateY(0)';
          }, index * 150);
        }
      });

      // Related products animation
      const relatedCards = document.querySelectorAll('.product-card');
      relatedCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(40px)';
        setTimeout(() => {
          card.style.transition = 'all 0.6s ease';
          card.style.opacity = '1';
          card.style.transform = 'translateY(0)';
        }, 1000 + (index * 100));
      });

      // Image lazy loading effect
      const images = document.querySelectorAll('img');
      images.forEach(img => {
        img.addEventListener('load', function() {
          this.style.opacity = '1';
        });
      });
    });

    // Add CSS for toast animations
    const style = document.createElement('style');
    style.textContent = `
      @keyframes slideIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
      }
      @keyframes slideOut {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100%); opacity: 0; }
      }
    `;
    document.head.appendChild(style);
  </script>
@endsection 