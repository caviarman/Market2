@extends('layouts.app')

@section('content')

<div class="container">
    <form method="POST" action="{{ route('test.test') }}">
        @csrf
        <div class="form-group">
            <label for="day">Стоимость</label>
            <input type="text" name="day" class="form-control" id="day" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
