@extends('layouts.app')

@section('title', 'Kelola Testimoni')

@section('content')
<div class="container-fluid" style="margin-top: 2rem;">
    <div class="d-flex justify-content-between align-items-center mb-4" style="padding-top: 1rem;">
        <h1 class="h3 text-gray-800 mb-0">Kelola Testimoni</h1>
        <div class="d-flex align-items-center gap-2">
            <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary" title="Kembali ke Dashboard">
                <i class="fas fa-arrow-right"></i> Dashboard
            </a>
            <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Testimoni
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
            <form method="GET" action="{{ route('admin.testimonials.index') }}">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="search" class="form-label">Cari Testimoni</label>
                        <input type="text" class="form-control" id="search" name="search" 
                               value="{{ request('search') }}" placeholder="Nama atau deskripsi...">
                    </div>
                    <div class="col-md-3">
                        <label for="rating" class="form-label">Rating</label>
                        <select class="form-select" id="rating" name="rating">
                            <option value="">Semua Rating</option>
                            @for($i = 5; $i >= 1; $i--)
                                <option value="{{ $i }}" {{ request('rating') == $i ? 'selected' : '' }}>
                                    {{ $i }} Bintang
                                </option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status">
                            <option value="">Semua Status</option>
                            <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Aktif</option>
                            <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Nonaktif</option>
                        </select>
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button type="submit" class="btn btn-secondary me-2">Filter</button>
                        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-secondary">Reset</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabel Testimoni -->
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th width="60">No</th>
                            <th width="80">Foto</th>
                            <th>Nama</th>
                            <th width="100">Rating</th>
                            <th>Deskripsi</th>
                            <th width="80">Status</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($testimonials as $testimonial)
                            <tr>
                                <td>{{ $loop->iteration + ($testimonials->currentPage() - 1) * $testimonials->perPage() }}</td>
                                <td>
                                    <img src="{{ $testimonial->image_url }}" alt="{{ $testimonial->name }}" 
                                         class="img-thumbnail rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                                </td>
                                <td>
                                    <strong>{{ $testimonial->name }}</strong>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= $testimonial->rating)
                                                <span class="text-warning">★</span>
                                            @else
                                                <span class="text-muted">☆</span>
                                            @endif
                                        @endfor
                                        <small class="ms-1">({{ $testimonial->rating }})</small>
                                    </div>
                                </td>
                                <td>{{ Str::limit($testimonial->description, 80) }}</td>
                                <td>
                                    <span class="badge {{ $testimonial->is_active ? 'bg-success' : 'bg-danger' }}">
                                        {{ $testimonial->is_active ? 'Aktif' : 'Nonaktif' }}
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
                                                <a class="dropdown-item" href="{{ route('admin.testimonials.show', $testimonial) }}">
                                                    <i class="fas fa-eye text-info me-2"></i>Lihat Detail
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('admin.testimonials.edit', $testimonial) }}">
                                                    <i class="fas fa-edit text-warning me-2"></i>Edit Testimoni
                                                </a>
                                            </li>
                                            <li>
                                                <form method="POST" action="{{ route('admin.testimonials.toggle-status', $testimonial) }}" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item">
                                                        @if($testimonial->is_active)
                                                            <i class="fas fa-toggle-off text-secondary me-2"></i>Nonaktifkan
                                                        @else
                                                            <i class="fas fa-toggle-on text-success me-2"></i>Aktifkan
                                                        @endif
                                                    </button>
                                                </form>
                                            </li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li>
                                                <form method="POST" action="{{ route('admin.testimonials.destroy', $testimonial) }}" 
                                                      class="d-inline" onsubmit="return confirm('Yakin ingin menghapus testimoni ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="fas fa-trash me-2"></i>Hapus Testimoni
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
                                    Tidak ada testimoni ditemukan
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($testimonials->hasPages())
                <div class="row align-items-center mt-4">
                    <div class="col-md-6">
                        <p class="text-muted mb-0">
                            Menampilkan {{ $testimonials->firstItem() }} sampai {{ $testimonials->lastItem() }} 
                            dari {{ $testimonials->total() }} testimoni
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-end">
                            {{ $testimonials->appends(request()->query())->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            @else
                <div class="text-center mt-4">
                    <p class="text-muted mb-0">Total {{ $testimonials->total() }} testimoni</p>
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