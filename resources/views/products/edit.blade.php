@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')

<h2 class="mb-4">Tambah Produk</h2>

<form method="POST" action="{{ route('products.store') }}">
    @csrf

    <div class="mb-3">
        <label class="form-label">SKU</label>
        <input type="text" name="sku" class="form-control" placeholder="Contoh: WID-001" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <input type="text" name="name" class="form-control" placeholder="Contoh: Wireless Mouse" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Stok</label>
        <input type="number" name="stock" class="form-control" placeholder="Contoh: 150" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="description" class="form-control" placeholder="Opsional"></textarea>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
</form>

@endsection
