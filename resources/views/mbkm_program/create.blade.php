<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Program MBKM</title>
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
                    <a href="#" class="nav-link text-white">Pendaftar MBKM</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Laporan Peserta</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Presentasi & Input Nilai</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Setting Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Setting Laporan</a>
                </li>
            </ul>
        </div>

        <!-- Main content -->
        <div class="container p-5">
            <h1>Tambah Program MBKM</h1>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('mbkm-program.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama_program" class="form-label">Nama Program MBKM</label>
                    <input type="text" class="form-control" id="nama_program" name="nama_program"
                        placeholder="Masukkan Program MBKM" required>
                </div>

                <div class="mb-3">
                    <label for="batch_program" class="form-label">Batch Program MBKM</label>
                    <input type="text" class="form-control" id="batch_program" name="batch_program"
                        placeholder="Masukkan Batch Program MBKM" required>
                </div>

                <div class="mb-3">
                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
                </div>

                <div class="mb-3">
                    <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-secondary">Batal</button>
            </form>
        </div>
    </div>
</body>

</html>
