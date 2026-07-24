<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Inventaris Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar text-white p-3 min-vh-100">
                <h4 class="mb-4"><i class="bi bi-box-seam"></i> Inventaris</h4>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link text-white {{ request()->routeIs('dashboard') ? 'active bg-secondary rounded' : '' }}" href="{{ route('dashboard') }}"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link text-white {{ request()->routeIs('categories.*') ? 'active bg-secondary rounded' : '' }}" href="{{ route('categories.index') }}"><i class="bi bi-tags me-2"></i>Data Kategori</a></li>
                    <li class="nav-item"><a class="nav-link text-white {{ request()->routeIs('items.*') ? 'active bg-secondary rounded' : '' }}" href="{{ route('items.index') }}"><i class="bi bi-box me-2"></i>Data Barang</a></li>
                    <li class="nav-item"><a class="nav-link text-white {{ request()->routeIs('reports.*') ? 'active bg-secondary rounded' : '' }}" href="{{ route('reports.index') }}"><i class="bi bi-file-earmark-bar-graph me-2"></i>Laporan</a></li>
                    <li class="nav-item"><a class="nav-link text-white {{ request()->routeIs('profile') ? 'active bg-secondary rounded' : '' }}" href="{{ route('profile') }}"><i class="bi bi-person-circle me-2"></i>Profile</a></li>
                    <li class="nav-item mt-4">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-outline-light w-100" type="submit"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>
                        </form>
                    </li>
                </ul>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow-sm mb-4 px-3">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-0 h5">Sistem Informasi Inventaris Barang</span>
                        <span class="text-muted">{{ auth()->user()->name }}</span>
                    </div>
                </nav>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
