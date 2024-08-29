@extends('layout')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <h2>Form Pendaftaran MBKM</h2>
        <form action="{{ route('pendaftarans.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="program_mbkm" class="form-label">Program MBKM</label>
                <input type="text" class="form-control" id="program_mbkm" name="program_mbkm">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim">
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas">
            </div>
            <div class="mb-3">
                <label for="nomor_whatsapp" class="form-label">Nomor WhatsApp</label>
                <input type="text" class="form-control" id="nomor_whatsapp" name="nomor_whatsapp">
            </div>
            <div class="mb-3">
                <label for="periode" class="form-label">Periode</label>
                <input type="text" class="form-control" id="periode" name="periode">
            </div>
            <div class="mb-3">
                <label for="program_mbkm" class="form-label">Program MBKM</label>
                <input type="text" class="form-control" id="program_mbkm" name="program_mbkm">
            </div>
            <div class="mb-3">
                <label for="ipk" class="form-label">IPK</label>
                <input type="number" class="form-control" id="ipk" name="ipk" step="0.01" min="0"
                    max="4">
            </div>
            <div class="mb-3">
                <label for="total_sks" class="form-label">Total SKS</label>
                <input type="number" class="form-control" id="total_sks" name="total_sks">
                <div class="form-text text-danger">
                    Total SKS tidak memenuhi syarat! Minimal 80 SKS dan Maksimal 160 SKS.
                </div>
            </div>
            <div class="mb-3">
                <label for="cv" class="form-label">CV (.pdf)</label>
                <input type="file" class="form-control" id="cv" name="cv" accept=".pdf">
            </div>
            <div class="mb-3">
                <label for="khs" class="form-label">KHS (.pdf)</label>
                <input type="file" class="form-control" id="khs" name="khs" accept=".pdf">
            </div>
            <div class="mb-3">
                <label for="portofolio" class="form-label">Portofolio (.zip)</label>
                <input type="file" class="form-control" id="portofolio" name="portofolio" accept=".zip">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('pendaftarans.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
