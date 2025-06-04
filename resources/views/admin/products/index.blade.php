@extends('layouts.app')

@section('title', 'Kelola Produk')

@section('content')
<div class="container-fluid" style="margin-top: 2rem;">
    <div class="d-flex justify-content-between align-items-center mb-4" style="padding-top: 1rem;">
        <h1 class="h3 text-gray-800 mb-0">Kelola Produk</h1>
        <div class="d-flex align-items-center gap-2 " >
            <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary" title="Kembali ke Dashboard">
                <i class="fas fa-arrow-right"></i> Dashboard
            </a>
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Produk
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
            <form method="GET" action="{{ route('admin.products.index') }}">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="search" class="form-label">Cari Produk</label>
                        <input type="text" class="form-control" id="search" name="search" 
                               value="{{ request('search') }}" placeholder="Nama produk...">
                    </div>
                    <div class="col-md-4">
                        <label for="category" class="form-label">Kategori</label>
                        <select class="form-select" id="category" name="category">
                            <option value="">Semua Kategori</option>
                            @foreach($categories as $key => $value)
                                <option value="{{ $key }}" {{ request('category') == $key ? 'selected' : '' }}>
                                    {{ $value }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 d-flex align-items-end">
                        <button type="submit" class="btn btn-secondary me-2">Filter</button>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">Reset</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabel Produk -->
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th width="60">No</th>
                            <th width="100">Gambar</th>
                            <th>Nama Produk</th>
                            <th width="120">Kategori</th>
                            <th width="100">Harga</th>
                            <th width="80">Status</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td>{{ $loop->iteration + ($products->currentPage() - 1) * $products->perPage() }}</td>
                                <td>
                                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" 
                                         class="img-thumbnail" style="width: 60px; height: 60px; object-fit: cover;">
                                </td>
                                <td>
                                    <strong>{{ $product->name }}</strong>
                                    @if($product->description)
                                        <br><small class="text-muted">{{ Str::limit($product->description, 50) }}</small>
                                    @endif
                                </td>
                                <td>
                                    <span class="badge bg-danger">{{ $product->category_name }}</span>
                                </td>
                                <td>{{ $product->formatted_price }}</td>
                                <td>
                                    <span class="badge {{ $product->is_active ? 'bg-success' : 'bg-secondary' }}">
                                        {{ $product->is_active ? 'Aktif' : 'Nonaktif' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm btn-primary dropdown-toggle" 
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-cogs"></i> Aksi
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('admin.products.show', $product) }}">
                                                    <i class="fas fa-eye text-info me-2"></i>Lihat Detail
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('admin.products.edit', $product) }}">
                                                    <i class="fas fa-edit text-warning me-2"></i>Edit Produk
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('menu.detail', $product) }}" target="_blank">
                                                    <i class="fas fa-external-link-alt text-primary me-2"></i>Lihat di Frontend
                                                </a>
                                            </li>
                                            <li>
                                                <form method="POST" action="{{ route('admin.products.toggle-status', $product) }}" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item">
                                                        @if($product->is_active)
                                                            <i class="fas fa-toggle-off text-secondary me-2"></i>Nonaktifkan
                                                        @else
                                                            <i class="fas fa-toggle-on text-success me-2"></i>Aktifkan
                                                        @endif
                                                    </button>
                                                </form>
                                            </li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li>
                                                <form method="POST" action="{{ route('admin.products.destroy', $product) }}" 
                                                      class="d-inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="fas fa-trash me-2"></i>Hapus Produk
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">
                                    Tidak ada produk ditemukan
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($products->hasPages())
                <div class="row align-items-center mt-4">
                    <div class="col-md-6">
                        <p class="text-muted mb-0">
                            Menampilkan {{ $products->firstItem() }} sampai {{ $products->lastItem() }} 
                            dari {{ $products->total() }} produk
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-end">
                            {{ $products->appends(request()->query())->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            @else
                <div class="text-center mt-4">
                    <p class="text-muted mb-0">Total {{ $products->total() }} produk</p>
                </div>
            @endif
        </div>
    </div>
</div>

<style>
.table-responsive {
    border-radius: 0.375rem;
}
.btn-group .btn {
    border-radius: 0;
}
.btn-group .btn:first-child {
    border-top-left-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
}
.btn-group .btn:last-child {
    border-top-right-radius: 0.375rem;
    border-bottom-right-radius: 0.375rem;
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
@endsection 