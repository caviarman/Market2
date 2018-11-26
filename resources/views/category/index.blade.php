@extends('layouts.app')

@section('content')
<div class="container">
    <p>
        <h2>Категории</h2>
    </p>
</div>
<div class="container">
    <p>
        <a class="btn btn-secondary" href="{{ route('category.create') }}" role="button">Добавить</a>
    </p>
</div>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>{{ $category->name }}</td>
            <td><a href="{{ route('category.edit', ['id' => $category->id]) }}">Редактировать</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
