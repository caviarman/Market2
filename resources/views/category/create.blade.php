@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('category.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Наименование</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Подтвердить</button>
    </form>
</div>
@endsection
