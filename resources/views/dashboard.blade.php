<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
            <h3>Kampus Merdeka</h3>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Menu Kaprodi</a>
                </li>
            </ul>
        </div>

        <!-- Main content -->
        <div class="container p-5">
            <h1>Dashboard Dosen</h1>
            <div class="row mb-4">
                <div class="col-12">
                    <img src="{{ asset('images/poto-dummy.jpeg') }}" alt="Gedung Bangkit" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Pendaftar</h5>
                            <p class="card-text">{{ $data['jumlah_pendaftar'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Peserta</h5>
                            <p class="card-text">{{ $data['jumlah_peserta'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Laporan</h5>
                            <p class="card-text">{{ $data['jumlah_laporan'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
