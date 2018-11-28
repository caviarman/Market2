@extends('layouts.app')

@section('content')
<div class="container">
    <p>
        <h2>Продажи</h2>
    </p>
</div>
<div class="container">
    <p>
        <a class="btn btn-secondary" href="{{ route('sales.create') }}" role="button">Добавить</a>
    </p>
</div>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Наименование</th>
            <th scope="col">Вес</th>
            <th scope="col">Цена</th>
            <th scope="col">Скидка</th>
            <th scope="col">Сумма</th>
            <th scope="col">Маржа</th>
            <th scope="col">Дата</th>
            <th scope="col">Комментарий</th>
            <th scope="col">Действие</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
            <tr>
            <th scope="row">{{ $sale->id }}</th>
            <td>{{ $sale->good->name }}</td>
            <td>{{ $sale->weight }}</td>
            <td>{{ $sale->price }}</td>
            <td>{{ $sale->discount }}</td>
            <td>{{ $sale->sum }}</td>
            <td>{{ $sale->profit }}</td>
            <td>{{ $sale->created_at }}</td>
            <td>{{ $sale->comments }}</td>
            <td><a href="{{ route('sales.edit', ['id' => $sale->id]) }}">Редактировать</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="container">
{{ $sales->links() }}
</div>
@endsection
