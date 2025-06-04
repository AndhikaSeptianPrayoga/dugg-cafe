<x-layouts.app title="Kelola Blog">
    <div style="margin-top: 2rem; padding-top: 1rem;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="py-3 mb-0">Kelola Blog</h4>
        <div class="d-flex align-items-center gap-2">
            <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary" title="Kembali ke Dashboard">
                <i class="bx bx-arrow-back"></i> Dashboard
            </a>
            <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
                <i class="bx bx-plus"></i> Tambah Blog
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Filter dan Search -->
    <div class="card mb-4">
        <div class="card-body">
            <form method="GET" action="{{ route('admin.blogs.index') }}">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Pencarian</label>
                        <input type="text" name="search" class="form-control" 
                               placeholder="Cari judul atau konten..." value="{{ request('search') }}">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="">Semua Status</option>
                            <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Aktif</option>
                            <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">&nbsp;</label>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bx bx-search"></i> Cari
                            </button>
                            <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-secondary">
                                <i class="bx bx-refresh"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabel Blog -->
    <div class="card">
        <div class="card-body">
            @if($blogs->count() > 0)
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Ringkasan</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>
                                        <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" 
                                             class="rounded" style="width: 60px; height: 60px; object-fit: cover;">
                                    </td>
                                    <td>
                                        <div class="fw-bold">{{ Str::limit($blog->title, 40) }}</div>
                                        <small class="text-muted">{{ $blog->slug }}</small>
                                    </td>
                                    <td>{{ Str::limit($blog->excerpt, 80) }}</td>
                                    <td>
                                        <form action="{{ route('admin.blogs.toggle-status', $blog) }}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-sm {{ $blog->is_active ? 'btn-success' : 'btn-danger' }}">
                                                {{ $blog->is_active ? 'Aktif' : 'Tidak Aktif' }}
                                            </button>
                                        </form>
                                    </td>
                                    <td>{{ $blog->formatted_date }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-cog"></i> Aksi
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('admin.blogs.show', $blog) }}">
                                                    <i class="bx bx-show text-info me-2"></i>Lihat Detail
                                                </a>
                                                <a class="dropdown-item" href="{{ route('admin.blogs.edit', $blog) }}">
                                                    <i class="bx bx-edit-alt text-warning me-2"></i>Edit Blog
                                                </a>
                                                <a class="dropdown-item" href="{{ route('blog.detail', $blog->slug) }}" target="_blank">
                                                    <i class="bx bx-link-external text-primary me-2"></i>Lihat di Frontend
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" 
                                                      onsubmit="return confirm('Yakin ingin menghapus blog ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="bx bx-trash me-2"></i>Hapus Blog
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="row align-items-center mt-4">
                    <div class="col-md-6">
                        <div>
                            Menampilkan {{ $blogs->firstItem() }} sampai {{ $blogs->lastItem() }} 
                            dari {{ $blogs->total() }} blog
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-end">
                            {{ $blogs->appends(request()->query())->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            @else
                <div class="text-center py-5">
                    <i class="bx bx-book-open display-1 text-muted"></i>
                    <h5 class="mt-3">Belum ada blog</h5>
                    <p class="text-muted">Mulai buat blog pertama Anda.</p>
                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
                        <i class="bx bx-plus"></i> Tambah Blog
                    </a>
                </div>
            @endif
        </div>
    </div>
    </div>

    <style>
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
        box-shadow: 0 2px 4px rgba(70, 156, 237, 0.2);
    }
    .pagination .page-item.active .page-link {
        color: #fff;
        background-color: #469CED;
        border-color: #469CED;
        box-shadow: 0 2px 4px rgba(70, 156, 237, 0.3);
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
    
    /* Custom Dropdown Action Styling */
    .dropdown-menu {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border: 1px solid #e3e6f0;
        border-radius: 0.375rem;
    }
    .dropdown-item {
        padding: 0.5rem 1rem;
        font-size: 0.875rem;
        transition: all 0.15s ease-in-out;
    }
    .dropdown-item:hover {
        background-color: #f8f9fc;
        color: #5a5c69;
    }
    .dropdown-item i {
        width: 16px;
        text-align: center;
    }
    .dropdown-divider {
        margin: 0.25rem 0;
    }
    
    /* Dashboard Button Styling */
    .btn-outline-secondary {
        border-color: #6c757d;
        color: #6c757d;
        transition: all 0.15s ease-in-out;
    }
    .btn-outline-secondary:hover {
        background-color: #6c757d;
        border-color: #6c757d;
        color: #fff;
        transform: translateY(-1px);
        box-shadow: 0 2px 4px rgba(108, 117, 125, 0.2);
    }
    
    /* Button Group Spacing */
    .gap-2 {
        gap: 0.5rem !important;
    }
    .gap-2 > * {
        margin: 0 !important;
    }
    </style>
</x-layouts.app> 