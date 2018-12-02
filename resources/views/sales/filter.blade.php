@extends('layouts.app')

@section('content')

<div class="container">
    <form method="POST" action="{{ route('filter.get') }}">
        @csrf

        <div class="form-group">
            <label for="start">Начало</label>
            <input type="date" id="start" name="start" min="2018-01-01" max="2021-12-31">
        </div>
        <div class="form-group">
            <label for="finish">Окончание</label>
            <input type="date" id="finish" name="finish" min="2018-01-01" max="2021-12-31">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
