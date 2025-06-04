@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Detail Produk</h1>
        <div>
            <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center mb-3">
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" 
                                     class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="120">Nama Produk</th>
                                    <td>: {{ $product->name }}</td>
                                </tr>
                                <tr>
                                    <th>Kategori</th>
                                    <td>: <span class="badge bg-secondary">{{ $product->category_name }}</span></td>
                                </tr>
                                <tr>
                                    <th>Harga</th>
                                    <td>: <strong class="text-success">{{ $product->formatted_price }}</strong></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>: <span class="badge {{ $product->is_active ? 'bg-success' : 'bg-danger' }}">
                                        {{ $product->is_active ? 'Aktif' : 'Nonaktif' }}
                                    </span></td>
                                </tr>
                                <tr>
                                    <th>Dibuat</th>
                                    <td>: {{ $product->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <th>Diperbarui</th>
                                    <td>: {{ $product->updated_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    @if($product->description)
                        <hr>
                        <div>
                            <h6>Deskripsi</h6>
                            <p>{{ $product->description }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 