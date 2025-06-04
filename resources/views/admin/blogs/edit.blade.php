<x-layouts.app title="Edit Blog">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="py-3 mb-0">Edit Blog</h4>
        <div class="d-flex gap-2">
            <a href="{{ route('blog.detail', $blog->slug) }}" target="_blank" class="btn btn-info">
                <i class="bx bx-link-external"></i> Lihat di Frontend
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
                    <form method="POST" action="{{ route('admin.blogs.update', $blog) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Blog <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                   id="title" name="title" value="{{ old('title', $blog->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="excerpt" class="form-label">Ringkasan</label>
                            <textarea class="form-control @error('excerpt') is-invalid @enderror" 
                                      id="excerpt" name="excerpt" rows="3" 
                                      placeholder="Ringkasan singkat untuk preview blog (opsional)">{{ old('excerpt', $blog->getOriginal('excerpt')) }}</textarea>
                            @error('excerpt')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Jika kosong, akan diambil 150 karakter pertama dari konten</small>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Konten Blog <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('content') is-invalid @enderror" 
                                      id="content" name="content" rows="15" required>{{ old('content', $blog->content) }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Gunakan HTML untuk formatting teks</small>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar Blog</label>
                            
                            @if($blog->image)
                                <div class="mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" 
                                             class="rounded" style="width: 100px; height: 100px; object-fit: cover;">
                                        <div>
                                            <p class="mb-1"><strong>Gambar saat ini</strong></p>
                                            <small class="text-muted">Upload gambar baru untuk mengganti</small>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                            <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                   id="image" name="image" accept="image/*">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Format: JPG, PNG, GIF. Maksimal: 2MB</small>
                            
                            <!-- Preview Image -->
                            <div id="imagePreview" class="mt-3" style="display: none;">
                                <img id="previewImg" src="" alt="Preview" class="img-fluid rounded" style="max-height: 200px;">
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" 
                                       {{ old('is_active', $blog->is_active) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">
                                    Aktifkan blog
                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-2">
                                <i class="bx bx-save"></i> Update Blog
                            </button>
                            <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-secondary">
                                Batal
                            </a>
                        </div>
                    </form>
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
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted">Dibuat</label>
                        <div>{{ $blog->formatted_date }}</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted">Terakhir diupdate</label>
                        <div>{{ $blog->updated_at->format('d M Y, H:i') }}</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted">Estimasi waktu baca</label>
                        <div>{{ $blog->reading_time }}</div>
                    </div>
                    <div class="mb-0">
                        <label class="form-label text-muted">Status</label>
                        <div>
                            <span class="badge {{ $blog->is_active ? 'bg-success' : 'bg-secondary' }}">
                                {{ $blog->is_active ? 'Aktif' : 'Tidak Aktif' }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Tips Menulis Blog</h6>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2">
                            <i class="bx bx-check text-success me-2"></i>
                            Gunakan judul yang menarik dan informatif
                        </li>
                        <li class="mb-2">
                            <i class="bx bx-check text-success me-2"></i>
                            Buat ringkasan yang menggambarkan isi blog
                        </li>
                        <li class="mb-2">
                            <i class="bx bx-check text-success me-2"></i>
                            Gunakan gambar berkualitas tinggi
                        </li>
                        <li class="mb-2">
                            <i class="bx bx-check text-success me-2"></i>
                            Tulis konten yang mudah dibaca
                        </li>
                        <li class="mb-0">
                            <i class="bx bx-check text-success me-2"></i>
                            Gunakan HTML tag seperti &lt;h3&gt;, &lt;p&gt;, &lt;ul&gt; untuk formatting
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Image preview
        document.getElementById('image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const preview = document.getElementById('imagePreview');
            const previewImg = document.getElementById('previewImg');
            
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                preview.style.display = 'none';
            }
        });
    </script>
</x-layouts.app> 