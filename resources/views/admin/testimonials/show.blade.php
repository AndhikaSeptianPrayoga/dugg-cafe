@extends('layouts.app')

@section('title', 'Detail Testimoni')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Detail Testimoni</h1>
        <div>
            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="mb-3">
                                <img src="{{ $testimonial->image_url }}" alt="{{ $testimonial->name }}" 
                                     class="img-fluid rounded-circle border" style="width: 200px; height: 200px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="120">Nama</th>
                                    <td>: {{ $testimonial->name }}</td>
                                </tr>
                                <tr>
                                    <th>Rating</th>
                                    <td>: 
                                        <div class="d-flex align-items-center">
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <= $testimonial->rating)
                                                    <span class="text-warning">★</span>
                                                @else
                                                    <span class="text-muted">☆</span>
                                                @endif
                                            @endfor
                                            <strong class="ms-2">({{ $testimonial->rating }}/5)</strong>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>: <span class="badge {{ $testimonial->is_active ? 'bg-success' : 'bg-danger' }}">
                                        {{ $testimonial->is_active ? 'Aktif' : 'Nonaktif' }}
                                    </span></td>
                                </tr>
                                <tr>
                                    <th>Dibuat</th>
                                    <td>: {{ $testimonial->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <th>Diperbarui</th>
                                    <td>: {{ $testimonial->updated_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    <hr>
                    <div>
                        <h6>Testimoni</h6>
                        <div class="bg-light p-3 rounded">
                            <em>"{{ $testimonial->description }}"</em>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 