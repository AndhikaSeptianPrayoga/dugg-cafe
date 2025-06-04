@section('title', __('Dashboard Admin'))
<x-layouts.app :title="__('Dashboard Admin')">
    <!-- Header Dashboard -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Dashboard Admin</h1>
            <p class="text-muted">Kelola konten Dugg Coffee</p>
        </div>
        <div>
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Produk Baru
            </a>
        </div>
    </div>

    <!-- Statistik Cards -->
    <div class="row g-4 mb-4">
        <div class="col-lg-3 col-md-6">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title mb-0">Total Produk</h6>
                            <h2 class="mb-0">{{ $totalProducts }}</h2>
                        </div>
                        <div class="text-white-50">
                            <i class="fas fa-shopping-cart fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-primary border-0">
                    <a href="{{ route('admin.products.index') }}" class="text-white text-decoration-none">
                        <small>Lihat Semua <i class="fas fa-arrow-right"></i></small>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title mb-0">Total Testimoni</h6>
                            <h2 class="mb-0">{{ $totalTestimonials }}</h2>
                        </div>
                        <div class="text-white-50">
                            <i class="fas fa-star fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-info border-0">
                    <a href="{{ route('admin.testimonials.index') }}" class="text-white text-decoration-none">
                        <small>Lihat Semua <i class="fas fa-arrow-right"></i></small>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title mb-0">Total Blog</h6>
                            <h2 class="mb-0">{{ $totalBlogs }}</h2>
                        </div>
                        <div class="text-white-50">
                            <i class="fas fa-book-open fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-success border-0">
                    <a href="{{ route('admin.blogs.index') }}" class="text-white text-decoration-none">
                        <small>Lihat Semua <i class="fas fa-arrow-right"></i></small>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title mb-0">Blog Aktif</h6>
                            <h2 class="mb-0">{{ $activeBlogs }}</h2>
                        </div>
                        <div class="text-white-50">
                            <i class="fas fa-check-circle fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-warning border-0">
                    <a href="{{ route('admin.blogs.index', ['status' => 'active']) }}" class="text-white text-decoration-none">
                        <small>Filter Aktif <i class="fas fa-arrow-right"></i></small>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Aksi Cepat & Statistik Kategori -->
    <div class="row g-4 mb-4">
        <!-- Quick Actions -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-bolt"></i> Aksi Cepat
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <a href="{{ route('admin.products.create') }}" class="btn btn-outline-primary w-100">
                                <i class="fas fa-plus"></i> Tambah Produk
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.products.index') }}" class="btn btn-outline-danger w-100">
                                <i class="fas fa-list"></i> Kelola Produk
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.testimonials.create') }}" class="btn btn-outline-warning w-100">
                                <i class="fas fa-star"></i> Tambah Testimoni
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-info w-100">
                                <i class="fas fa-comments"></i> Kelola Testimoni
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.blogs.create') }}" class="btn btn-outline-success w-100">
                                <i class="fas fa-plus"></i> Tambah Blog
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-dark w-100">
                                <i class="fas fa-book"></i> Kelola Blog
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistik Kategori -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-chart-pie"></i> Produk per Kategori
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="d-flex justify-content-between align-items-center p-2 bg-light rounded">
                                <div>
                                    <strong>Seasoning</strong>
                                    <div class="text-muted small">Bumbu & Tambahan</div>
                                </div>
                                <span class="badge bg-danger">{{ $seasoningCount }}</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-between align-items-center p-2 bg-light rounded">
                                <div>
                                    <strong>Signature</strong>
                                    <div class="text-muted small">Menu Khas</div>
                                </div>
                                <span class="badge bg-danger">{{ $signatureCount }}</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-between align-items-center p-2 bg-light rounded">
                                <div>
                                    <strong>Beverages</strong>
                                    <div class="text-muted small">Minuman</div>
                                </div>
                                <span class="badge bg-danger">{{ $beveragesCount }}</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-between align-items-center p-2 bg-light rounded">
                                <div>
                                    <strong>Main Course</strong>
                                    <div class="text-muted small">Makanan Utama</div>
                                </div>
                                <span class="badge bg-danger">{{ $mainCourseCount }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Konten Terbaru -->
    <div class="row g-4">
        <!-- Produk Terbaru -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-shopping-cart"></i> Produk Terbaru
                    </h5>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-outline-primary">
                        Lihat Semua
                    </a>
                </div>
                <div class="card-body" style="max-height: 400px; overflow-y: auto;">
                    @if($recentProducts->count() > 0)
                        @foreach($recentProducts as $product)
                            <div class="d-flex align-items-center mb-3 p-2 bg-light rounded">
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" 
                                     class="img-thumbnail rounded me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0">{{ Str::limit($product->name, 25) }}</h6>
                                    <small class="text-muted">{{ $product->formatted_price }}</small>
                                    <div class="mt-1">
                                        <span class="badge {{ $product->is_active ? 'bg-success' : 'bg-danger' }}">
                                            {{ $product->is_active ? 'Aktif' : 'Nonaktif' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-4">
                            <i class="fas fa-shopping-cart fa-2x text-muted mb-3"></i>
                            <p class="text-muted">Belum ada produk</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Testimoni Terbaru -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-star"></i> Testimoni Terbaru
                    </h5>
                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-sm btn-outline-primary">
                        Lihat Semua
                    </a>
                </div>
                <div class="card-body" style="max-height: 400px; overflow-y: auto;">
                    @if($recentTestimonials->count() > 0)
                        @foreach($recentTestimonials as $testimonial)
                            <div class="d-flex align-items-start mb-3 p-2 bg-light rounded">
                                <img src="{{ $testimonial->image_url }}" alt="{{ $testimonial->name }}" 
                                     class="img-thumbnail rounded-circle me-3" style="width: 45px; height: 45px; object-fit: cover;">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0">{{ $testimonial->name }}</h6>
                                    <div class="mb-1">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= $testimonial->rating)
                                                <span class="text-warning small">★</span>
                                            @else
                                                <span class="text-muted small">☆</span>
                                            @endif
                                        @endfor
                                    </div>
                                    <p class="mb-1 small text-muted">{{ Str::limit($testimonial->description, 50) }}</p>
                                    <span class="badge {{ $testimonial->is_active ? 'bg-success' : 'bg-danger' }}">
                                        {{ $testimonial->is_active ? 'Aktif' : 'Nonaktif' }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-4">
                            <i class="fas fa-star fa-2x text-muted mb-3"></i>
                            <p class="text-muted">Belum ada testimoni</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Blog Terbaru -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-book-open"></i> Blog Terbaru
                    </h5>
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-sm btn-outline-primary">
                        Lihat Semua
                    </a>
                </div>
                <div class="card-body" style="max-height: 400px; overflow-y: auto;">
                    @if($recentBlogs->count() > 0)
                        @foreach($recentBlogs as $blog)
                            <div class="d-flex align-items-start mb-3 p-2 bg-light rounded">
                                <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" 
                                     class="img-thumbnail rounded me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0">{{ Str::limit($blog->title, 30) }}</h6>
                                    <p class="mb-1 small text-muted">{{ Str::limit($blog->excerpt, 60) }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">{{ $blog->formatted_date }}</small>
                                        <span class="badge {{ $blog->is_active ? 'bg-success' : 'bg-danger' }}">
                                            {{ $blog->is_active ? 'Aktif' : 'Nonaktif' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-4">
                            <i class="fas fa-book-open fa-2x text-muted mb-3"></i>
                            <p class="text-muted">Belum ada blog</p>
                            <a href="{{ route('admin.blogs.create') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus"></i> Tambah Blog
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <style>
    .card {
        border: none;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(33, 40, 50, 0.15);
        transition: all 0.3s;
    }
    .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 0.25rem 2rem 0 rgba(33, 40, 50, 0.2);
    }
    .bg-primary { background-color: #469CED !important; }
    .bg-success { background-color: #28a745 !important; }
    .bg-warning { background-color: #ffc107 !important; }
    .bg-info { background-color: #17a2b8 !important; }
    </style>
</x-layouts.app>
