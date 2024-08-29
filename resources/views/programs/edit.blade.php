@extends('layout')

@section('content')
    <div class="container">
        <h1>Edit Program MBKM</h1>

        <form action="{{ route('programs.update', $program->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="periode" class="form-label">Periode</label>
                <input type="text" class="form-control" id="periode" name="periode" value="{{ $program->periode }}">
            </div>
            <div class="mb-3">
                <label for="program" class="form-label">Program MBKM</label>
                <input type="text" class="form-control" id="program" name="program" value="{{ $program->program }}">
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="datetime-local" class="form-control" id="start_date" name="start_date"
                    value="{{ $program->start_date->format('Y-m-d\TH:i:s') }}">
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="datetime-local" class="form-control" id="end_date" name="end_date"
                    value="{{ $program->end_date->format('Y-m-d\TH:i:s') }}">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
