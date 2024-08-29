@extends('layout')

@section('content')
    <div class="container">
        <h1>Pendaftaran MBKM</h1>
        <a href="{{ route('pendaftarans.create') }}" class="btn btn-primary mb-3">Tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Program MBKM</th>
                    <th>Periode</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Dosen Wali</th>
                    <th>IPK</th>
                    <th>Total SKS</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pendaftarans as $pendaftaran)
                    <tr>
                        <td>{{ $pendaftaran->program_mbkm }}</td>
                        <td>{{ $pendaftaran->periode }}</td>
                        <td>{{ $pendaftaran->nama }}</td>
                        <td>{{ $pendaftaran->nim }}</td>
                        <td>{{ $pendaftaran->dosen_wali }}</td>
                        <td>{{ $pendaftaran->ipk }}</td>
                        <td>{{ $pendaftaran->total_sks }}</td>
                        <td>{{ $pendaftaran->status }}</td>
                        <td>{{ $pendaftaran->keterangan }}</td>
                        <td>
                            <a href="{{ route('pendaftarans.edit', $pendaftaran->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pendaftarans.destroy', $pendaftaran->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center">No data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $pendaftarans->links() }}
    </div>
@endsection
