@extends('layout')

@section('content')
    <div class="container">
        <h1>Edit Pendaftaran MBKM</h1>

        <form action="{{ route('pendaftarans.update', $pendaftaran->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="program_mbkm" class="form-label">Program MBKM</label>
                <input type="text" class="form-control" id="program_mbkm" name="program_mbkm"
                    value="{{ $pendaftaran->program_mbkm }}">
            </div>
            <div class="mb-3">
                <label for="periode" class="form-label">Periode</label>
                <input type="text" class="form-control" id="periode" name="periode"
                    value="{{ $pendaftaran->periode }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $pendaftaran->nama }}">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="{{ $pendaftaran->nim }}">
            </div>
            <div class="mb-3">
                <label for="dosen_wali" class="form-label">Dosen Wali</label>
                <input type="text" class="form-control" id="dosen_wali" name="dosen_wali"
                    value="{{ $pendaftaran->dosen_wali }}">
            </div>
            <div class="mb-3">
                <label for="ipk" class="form-label">IPK</label>
                <input type="number" class="form-control" id="ipk" name="ipk" step="0.01" min="0"
                    max="4" value="{{ $pendaftaran->ipk }}">
            </div>
            <div class="mb-3">
                <label for="total_sks" class="form-label">Total SKS</label>
                <input type="number" class="form-control" id="total_sks" name="total_sks"
                    value="{{ $pendaftaran->total_sks }}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="{{ $pendaftaran->status }}">
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" id="keterangan" name="keterangan">{{ $pendaftaran->keterangan }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
