@extends('layouts.app')

@section('content')
<div class="container">
    <p>
        <h2>Товары</h2>
    </p>
</div>
<div class="container">
    <p>
        <a class="btn btn-secondary" href="{{ route('goods.create') }}" role="button">Добавить</a>
    </p>
</div>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Наименование</th>
            <th scope="col">Себестоимость</th>
            <th scope="col">Цена продажи</th>
            <th scope="col">Маржа</th>
            <th scope="col">Ед измерения</th>
            <th scope="col">Комментарий</th>
            <th scope="col">Действие</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($goods as $good)
            <tr>
            <th scope="row">{{ $good->id }}</th>
            <td>{{ $good->name }}</td>
            <td>{{ $good->buyPrice }}</td>
            <td>{{ $good->sellPrice }}</td>
            <td>{{ $good->profit }}</td>
            <td>{{ $good->measure }}</td>
            <td>{{ $good->comments }}</td>
            <td><a href="{{ route('goods.edit', ['id' => $good->id]) }}">Редактировать</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
