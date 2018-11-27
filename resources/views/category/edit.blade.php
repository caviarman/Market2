@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('category.update', ['id' => $category->id]) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Наименование</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Подтвердить</button>
    </form>
</div>
@endsection