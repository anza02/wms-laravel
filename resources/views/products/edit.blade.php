@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')

<h2 class="mb-4">Edit Produk</h2>

<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">SKU</label>
        <input type="text" name="sku" value="{{ $product->sku }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Stok</label>
        <input type="number" name="stock" value="{{ $product->stock }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="description" class="form-control">{{ $product->description }}</textarea>
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
</form>

@endsection
