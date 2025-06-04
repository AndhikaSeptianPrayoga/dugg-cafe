@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')

{{-- Navbar --}}
<x-layouts.navbar.default />

<div class="min-vh-100" style="background: #469CED; padding: 60px 0; margin-top: 50px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-8" style="margin-top: 100px; margin-bottom: 100px; padding-top: 100px;">
                <div class="card shadow-lg border-0" style="border-radius: 20px; background: white;">
                    <div class="card-body p-5">
                        <!-- Header -->
                        <div class="text-center mb-4">
                            <h2 class="fw-bold text-dark mb-3" style="font-size: 2rem;">Kontak Kami</h2>
                            <p class="text-muted">Punya pertanyaan atau ingin berbagi cerita? Kami senang mendengar dari Anda!</p>
                        </div>

                        <!-- Alert Messages -->
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <!-- Contact Form -->
                        <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                            @csrf
                            
                            <!-- Row 1: Nama Depan & Belakang -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="nama_depan" class="form-label fw-medium text-dark">Nama Depan</label>
                                    <input type="text" 
                                           class="form-control @error('nama_depan') is-invalid @enderror" 
                                           id="nama_depan" 
                                           name="nama_depan" 
                                           placeholder="Masukan nama depan" 
                                           value="{{ old('nama_depan') }}"
                                           style="padding: 12px 15px; border-radius: 10px; border: 2px solid #F8F1E8;">
                                    @error('nama_depan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="nama_belakang" class="form-label fw-medium text-dark">Nama Belakang</label>
                                    <input type="text" 
                                           class="form-control @error('nama_belakang') is-invalid @enderror" 
                                           id="nama_belakang" 
                                           name="nama_belakang" 
                                           placeholder="Masukan nama belakang" 
                                           value="{{ old('nama_belakang') }}"
                                           style="padding: 12px 15px; border-radius: 10px; border: 2px solid #F8F1E8;">
                                    @error('nama_belakang')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Row 2: Email & Nomor HP -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="email" class="form-label fw-medium text-dark">Email</label>
                                    <input type="email" 
                                           class="form-control @error('email') is-invalid @enderror" 
                                           id="email" 
                                           name="email" 
                                           placeholder="Masukan email" 
                                           value="{{ old('email') }}"
                                           style="padding: 12px 15px; border-radius: 10px; border: 2px solid #F8F1E8;">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="nomor_handphone" class="form-label fw-medium text-dark">Nomor Handphone</label>
                                    <input type="text" 
                                           class="form-control @error('nomor_handphone') is-invalid @enderror" 
                                           id="nomor_handphone" 
                                           name="nomor_handphone" 
                                           placeholder="Masukan nomor handphone" 
                                           value="{{ old('nomor_handphone') }}"
                                           style="padding: 12px 15px; border-radius: 10px; border: 2px solid #F8F1E8;">
                                    @error('nomor_handphone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Textarea: Pesan -->
                            <div class="mb-4">
                                <label for="pesan" class="form-label fw-medium text-dark">Apa yang ingin anda katakan</label>
                                <textarea class="form-control @error('pesan') is-invalid @enderror" 
                                          id="pesan" 
                                          name="pesan" 
                                          rows="5" 
                                          placeholder="Masukan pesan anda..."
                                          style="padding: 15px; border-radius: 10px; border: 2px solid #F8F1E8; resize: vertical;">{{ old('pesan') }}</textarea>
                                @error('pesan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-5 py-3 fw-medium submit-btn" 
                                        style="background: #469CED; border: none; border-radius: 25px; font-size: 1.1rem; box-shadow: 0 4px 15px rgba(70, 156, 237, 0.3);">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Footer --}}
<x-layouts.footer.default />

<style>
.contact-form .form-control:focus {
    border-color: #469CED;
    box-shadow: 0 0 0 0.2rem rgba(70, 156, 237, 0.25);
}

.submit-btn:hover {
    background: #3a7bd5 !important;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(70, 156, 237, 0.4) !important;
    transition: all 0.3s ease;
}

.contact-form {
    animation: fadeInUp 0.6s ease-out;
}

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

.card {
    animation: fadeIn 0.8s ease-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.95);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

@media (max-width: 768px) {
    .card-body {
        padding: 2rem !important;
    }
    
    h2 {
        font-size: 1.5rem !important;
    }
}
</style>
@endsection 