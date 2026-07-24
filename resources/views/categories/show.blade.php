@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4>{{ $category->name }}</h4>
        <p class="text-muted">Detail Kategori Barang</p>
    </div>
    <div>
        <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>

<div class="row g-4">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h6 class="mb-0">Informasi Kategori</h6>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-4">ID</dt>
                    <dd class="col-sm-8">{{ $category->id }}</dd>
                    <dt class="col-sm-4">Nama</dt>
                    <dd class="col-sm-8">{{ $category->name }}</dd>
                    <dt class="col-sm-4">Deskripsi</dt>
                    <dd class="col-sm-8">{{ $category->description ?? '-' }}</dd>
                    <dt class="col-sm-4">Dibuat</dt>
                    <dd class="col-sm-8">{{ $category->created_at->format('d-m-Y H:i') }}</dd>
                    <dt class="col-sm-4">Diperbarui</dt>
                    <dd class="col-sm-8">{{ $category->updated_at->format('d-m-Y H:i') }}</dd>
                </dl>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h6 class="mb-0">Statistik Barang</h6>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-6">
                        <h3 class="text-primary">{{ $totalItems }}</h3>
                        <p class="text-muted small">Total Barang</p>
                    </div>
                    <div class="col-6">
                        <h3 class="text-success">{{ $totalStock }}</h3>
                        <p class="text-muted small">Total Stok</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card shadow-sm mt-4">
    <div class="card-header bg-white">
        <h6 class="mb-0">Daftar Barang dalam Kategori Ini</h6>
    </div>
    <div class="card-body">
        @if($items->count() > 0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Stok</th>
                        <th>Kondisi</th>
                        <th>Lokasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>{{ $item->condition }}</td>
                            <td>{{ $item->location }}</td>
                            <td>
                                <a href="{{ route('items.show', $item) }}" class="btn btn-sm btn-info text-white">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-muted text-center">Tidak ada barang dalam kategori ini.</p>
        @endif
    </div>
</div>
@endsection
