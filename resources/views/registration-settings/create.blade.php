@extends('layout')

@section('content')
    <div class="container">
        <h2>{{ isset($registrationSetting) ? 'Edit' : 'Tambah' }} Setting Pendaftaran</h2>
        <form
            action="{{ isset($registrationSetting) ? route('registration-settings.update', $registrationSetting->id) : route('registration-settings.store') }}"
            method="POST">
            @csrf
            @if (isset($registrationSetting))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="period">Periode</label>
                <input type="text" name="period" class="form-control"
                    value="{{ isset($registrationSetting) ? $registrationSetting->period : old('period') }}" required>
            </div>

            <div class="form-group">
                <label for="program">Program MBKM</label>
                <input type="text" name="program" class="form-control"
                    value="{{ isset($registrationSetting) ? $registrationSetting->program : old('program') }}" required>
            </div>

            <div class="form-group">
                <label for="start_date">Tanggal Mulai</label>
                <input type="datetime-local" name="start_date" class="form-control"
                    value="{{ isset($registrationSetting) ? $registrationSetting->start_date : old('start_date') }}"
                    required>
            </div>

            <div class="form-group">
                <label for="end_date">Tanggal Akhir</label>
                <input type="datetime-local" name="end_date" class="form-control"
                    value="{{ isset($registrationSetting) ? $registrationSetting->end_date : old('end_date') }}" required>
            </div>

            <button type="submit" class="btn btn-success">{{ isset($registrationSetting) ? 'Update' : 'Simpan' }}</button>
        </form>
    </div>
@endsection
