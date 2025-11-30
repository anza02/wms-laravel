@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2>Daftar Produk</h2>
    <a href="{{ route('products.create') }}" class="btn btn-success">Tambah Produk</a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>SKU</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th width="150">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->sku }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>

                <form action="{{ route('products.destroy', $product->id) }}" 
                      method="POST" class="d-inline"
                      onsubmit="return confirm('Hapus produk ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
