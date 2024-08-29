@extends('layout')

@section('content')
    <div class="container">
        <h1>Setting Pendaftaran MBKM</h1>
        <a href="{{ route('programs.create') }}" class="btn btn-primary mb-3">Tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Periode</th>
                    <th>Program MBKM</th>
                    <th>Batas Program</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($programs as $program)
                    <tr>
                        <td>{{ $program->periode }}</td>
                        <td>{{ $program->program }}</td>
                        <td>
                            START: {{ $program->start_date }} <br>
                            END: {{ $program->end_date }}
                        </td>
                        <td>
                            <a href="{{ route('programs.edit', $program->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('programs.destroy', $program->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
