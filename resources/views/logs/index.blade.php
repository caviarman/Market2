@extends('layouts.app')

@section('content')
<div class="container">
    <p>
        <h2>Записи</h2>
    </p>
</div>
<div class="container">
    <p>
        <a class="btn btn-secondary" href="{{ route('logs.create') }}" role="button">Добавить</a>
    </p>
</div>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Операция</th>
            <th scope="col">Категория</th>
            <th scope="col">Товар</th>
            <th scope="col">Цена</th>
            <th scope="col">Комментарий</th>
            <th scope="col">Дата</th>
            <th scope="col">Действие</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
            <tr>
            <th scope="row">{{ $log->id }}</th>
            <td>{{ $log->operation }}</td>
            <td>{{ $log->category->name }}</td>
            <td>{{ $log->product }}</td>
            <td>{{ $log->price }}</td>
            <td>{{ $log->comments }}</td>
            <td>{{ $log->created_at }}</td>
            <td><a href="{{ route('logs.edit', ['id' => $log->id]) }}">Редактировать</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="container">
{{ $logs->links() }}
</div>
@endsection
