@extends('layouts.app')

@section('content')

<div class="container">
    <form method="POST" action="{{ route('filter.get') }}">
        @csrf
        <div class="form-group">
            <label for="day">День</label>
            <input type="text" name="day" class="form-control" id="day" value="{{ $day }}" required>
        </div>
        <div class="form-group">
            <label for="month">Месяц</label>
            <input type="text" name="month" class="form-control" id="month" value="{{ $month }}" required>
        </div>
        <div class="form-group">
            <label for="year">Год</label>
            <input type="text" name="year" class="form-control" id="year" value="{{ $year }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
