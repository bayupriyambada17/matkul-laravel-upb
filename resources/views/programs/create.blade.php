@extends('layout')

@section('content')
    <div class="container">
        <h1>Tambah Program MBKM</h1>

        <form action="{{ route('programs.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="periode" class="form-label">Periode</label>
                <input type="text" class="form-control" id="periode" name="periode">
            </div>
            <div class="mb-3">
                <label for="program" class="form-label">Program MBKM</label>
                <input type="text" class="form-control" id="program" name="program">
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="datetime-local" class="form-control" id="start_date" name="start_date">
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="datetime-local" class="form-control" id="end_date" name="end_date">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
