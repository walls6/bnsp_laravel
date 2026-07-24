@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4>Profile Administrator</h4>
    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali</a>
</div>

<div class="row g-4">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h6 class="mb-0">Informasi Akun</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <div class="form-control-plaintext">{{ auth()->user()->name }}</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <div class="form-control-plaintext">{{ auth()->user()->email }}</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tipe Pengguna</label>
                    <div class="form-control-plaintext"><span class="badge bg-primary">Administrator</span></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Akun Dibuat</label>
                    <div class="form-control-plaintext">{{ auth()->user()->created_at->format('d-m-Y H:i') }}</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Terakhir Diperbarui</label>
                    <div class="form-control-plaintext">{{ auth()->user()->updated_at->format('d-m-Y H:i') }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h6 class="mb-0">Ringkasan Sistem</h6>
            </div>
            <div class="card-body">
                <div class="row text-center mb-4">
                    <div class="col-6">
                        <div class="p-3 bg-light rounded">
                            <h5 class="text-primary">{{ $totalCategories }}</h5>
                            <p class="small text-muted">Total Kategori</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 bg-light rounded">
                            <h5 class="text-success">{{ $totalItems }}</h5>
                            <p class="small text-muted">Total Barang</p>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-6">
                        <div class="p-3 bg-light rounded">
                            <h5 class="text-warning">{{ $totalStock }}</h5>
                            <p class="small text-muted">Total Stok</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 bg-light rounded">
                            <h5 class="text-info">{{ $averageStock }}</h5>
                            <p class="small text-muted">Rata-rata Stok</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card shadow-sm mt-4">
    <div class="card-header bg-white">
        <h6 class="mb-0">Akses Cepat</h6>
    </div>
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-3">
                <a href="{{ route('categories.index') }}" class="btn btn-light btn-block w-100 text-start border">
                    <i class="bi bi-tags text-primary"></i> Kelola Kategori
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('items.index') }}" class="btn btn-light btn-block w-100 text-start border">
                    <i class="bi bi-box text-success"></i> Kelola Barang
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('reports.index') }}" class="btn btn-light btn-block w-100 text-start border">
                    <i class="bi bi-file-earmark-pdf text-danger"></i> Lihat Laporan
                </a>
            </div>
            <div class="col-md-3">
                <form action="{{ route('logout') }}" method="POST" class="w-100">
                    @csrf
                    <button class="btn btn-light btn-block w-100 text-start border" style="border-color: #dee2e6;">
                        <i class="bi bi-box-arrow-right text-secondary"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
