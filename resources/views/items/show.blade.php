@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Detail Barang</h5>
        <a href="{{ route('items.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Kode Barang</dt>
            <dd class="col-sm-9">{{ $item->code }}</dd>
            <dt class="col-sm-3">Nama Barang</dt>
            <dd class="col-sm-9">{{ $item->name }}</dd>
            <dt class="col-sm-3">Kategori</dt>
            <dd class="col-sm-9">{{ $item->category->name ?? '-' }}</dd>
            <dt class="col-sm-3">Stok</dt>
            <dd class="col-sm-9">{{ $item->stock }}</dd>
            <dt class="col-sm-3">Kondisi</dt>
            <dd class="col-sm-9">{{ $item->condition }}</dd>
            <dt class="col-sm-3">Lokasi</dt>
            <dd class="col-sm-9">{{ $item->location }}</dd>
            <dt class="col-sm-3">Tanggal Masuk</dt>
            <dd class="col-sm-9">{{ $item->entry_date->format('d-m-Y') }}</dd>
            <dt class="col-sm-3">Keterangan</dt>
            <dd class="col-sm-9">{{ $item->description }}</dd>
        </dl>
    </div>
</div>
@endsection
