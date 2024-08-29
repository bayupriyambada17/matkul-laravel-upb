@extends('layout')

@section('content')
    <div class="container">
        <h2>Setting Pendaftaran MBKM</h2>
        <a href="{{ route('registration-settings.create') }}" class="btn btn-primary">Tambah</a>
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
                @foreach ($settings as $setting)
                    <tr>
                        <td>{{ $setting->period }}</td>
                        <td>{{ $setting->program }}</td>
                        <td>START : {{ $setting->start_date }}<br>END : {{ $setting->end_date }}</td>
                        <td>
                            <a href="{{ route('registration-settings.edit', $setting->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('registration-settings.destroy', $setting->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
