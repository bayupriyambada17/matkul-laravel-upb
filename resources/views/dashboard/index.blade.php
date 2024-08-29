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
            <h1>Selamat Datang di Pengelolaan MBKM</h1>
            <p>Aplikasi Pengelolaan MBKM ini meliputi proses Pengajuan Peserta MBKM, Pengumpulan Laporan MBKM hingga
                Jadwal Presentasi Akhir.</p>
            <p>Mahasiswa yang akan mengikuti program MBKM diwajibkan melakukan proses pengajuan (registrasi) hingga
                menerima status sebagai arsip bukti registrasi bahwa telah disetujui/tidak mengikuti Program MBKM.</p>
            <div class="d-flex justify-content-between my-4">
                <a href="#" class="btn btn-primary">Login</a>
                <a href="#" class="btn btn-secondary">Registrasi</a>
                <a href="#" class="btn btn-success">Verifikasi</a>
                <a href="#" class="btn btn-info">Selesai</a>
            </div>

            <div class="alert alert-primary" role="alert">
                Masa Akhir Batch-3: 30-07-2024 00:00
            </div>
            <div class="alert alert-info" role="alert">
                Pengumpulan Laporan Bulanan Januari: 31-07-2024 00:00
            </div>
            <div class="alert alert-danger" role="alert">
                Jadwal Presentasi: Tidak tersedia
            </div>

            <div class="mt-5">
                <h5>Kontak Informasi</h5>
                <ul>
                    <li>Service Desk Program Studi Teknik Informatika (PuTI): +62 81219705485</li>
                    <li>Link User Manual</li>
                    <li>Link FAQ Dirmik</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
