<x-layouts.app title="Detail Blog">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="py-3 mb-0">Detail Blog</h4>
        <div class="d-flex gap-2">
            <a href="{{ route('blog.detail', $blog->slug) }}" target="_blank" class="btn btn-info">
                <i class="bx bx-link-external"></i> Lihat di Frontend
            </a>
            <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning">
                <i class="bx bx-edit-alt"></i> Edit
            </a>
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
                <i class="bx bx-arrow-back"></i> Kembali
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    @if($blog->image)
                        <div class="mb-4">
                            <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" 
                                 class="img-fluid rounded" style="width: 100%; max-height: 400px; object-fit: cover;">
                        </div>
                    @endif

                    <h2 class="fw-bold mb-3">{{ $blog->title }}</h2>
                    
                    @if($blog->getOriginal('excerpt'))
                        <div class="alert alert-info">
                            <strong>Ringkasan:</strong><br>
                            {{ $blog->getOriginal('excerpt') }}
                        </div>
                    @endif

                    <div class="content-blog">
                        {!! nl2br($blog->content) !!}
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Informasi Blog</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label text-muted">Slug URL</label>
                        <div class="fw-bold">{{ $blog->slug }}</div>
                        <small class="text-muted">{{ route('blog.detail', $blog->slug) }}</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted">Status</label>
                        <div>
                            <span class="badge {{ $blog->is_active ? 'bg-success' : 'bg-secondary' }} fs-6">
                                {{ $blog->is_active ? 'Aktif' : 'Tidak Aktif' }}
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted">Dibuat</label>
                        <div>{{ $blog->formatted_date }}</div>
                        <small class="text-muted">{{ $blog->created_at->format('H:i') }}</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted">Terakhir diupdate</label>
                        <div>{{ $blog->updated_at->format('d M Y') }}</div>
                        <small class="text-muted">{{ $blog->updated_at->format('H:i') }}</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted">Estimasi waktu baca</label>
                        <div class="fw-bold">{{ $blog->reading_time }}</div>
                    </div>
                    <div class="mb-0">
                        <label class="form-label text-muted">Jumlah kata</label>
                        <div>{{ str_word_count(strip_tags($blog->content)) }} kata</div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Aksi Cepat</h6>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <form action="{{ route('admin.blogs.toggle-status', $blog) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn {{ $blog->is_active ? 'btn-outline-warning' : 'btn-outline-success' }} w-100">
                                <i class="bx {{ $blog->is_active ? 'bx-hide' : 'bx-show' }}"></i>
                                {{ $blog->is_active ? 'Nonaktifkan' : 'Aktifkan' }} Blog
                            </button>
                        </form>
                        
                        <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-outline-primary">
                            <i class="bx bx-edit-alt"></i> Edit Blog
                        </a>
                        
                        <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" 
                              onsubmit="return confirm('Yakin ingin menghapus blog ini? Tindakan ini tidak dapat dibatalkan.')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger w-100">
                                <i class="bx bx-trash"></i> Hapus Blog
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .content-blog {
            line-height: 1.8;
        }
        .content-blog h1, .content-blog h2, .content-blog h3, .content-blog h4 {
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-weight: bold;
        }
        .content-blog p {
            margin-bottom: 1rem;
        }
        .content-blog ul, .content-blog ol {
            margin-bottom: 1rem;
            padding-left: 2rem;
        }
        .content-blog li {
            margin-bottom: 0.5rem;
        }
    </style>
</x-layouts.app> 