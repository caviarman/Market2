@extends('layouts.app')

@section('content')
<div class="container">
    <p>
        <h2>Товары</h2>
    </p>
</div>
<div class="container">
    <p>
        <a class="btn btn-secondary" href="{{ route('products.create') }}" role="button">Добавить</a>
    </p>
</div>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Наименование</th>
            <th scope="col">Цена покупки</th>
            <th scope="col">Цена продажи</th>
            <th scope="col">Маржа</th>
            <th scope="col">Ед измерения</th>
            <th scope="col">Комментарий</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product-name }}</td>
            <td>{{ $product->buyPrice }}</td>
            <td>{{ $product->sellPrice }}</td>
            <td>{{ $product->profit }}</td>
            <td>{{ $product->measure }}</td>
            <td>{{ $product->comments }}</td>
            <td>{{ $log->created_at }}</td>
            <td><a href="{{ route('products.edit', ['id' => $product->id]) }}">Редактировать</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
