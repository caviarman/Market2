@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('logs.store') }}">
        @csrf
        <div class="form-group">
            <label for="operation">Операция</label>
            <select class="form-control" id="operation" name="operation">
                <option selected>выбрать тип операции</option>
                <option value="Приход">Приход</option>
                <option value="Расход">Расход</option>
            </select>
        </div>
        <div class="form-group">
            <label for="category">Категория</label>
            <select class="form-control" id="category" name="category">
                <option selected>выбрать категорию</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}"> {{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="product">Товар</label>
            <input type="text" name="product" class="form-control" id="product">
        </div>
        <div class="form-group">
            <label for="price">Стоимость</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="руб" required>
        </div>
        <div class="form-group">
            <label for="comments">Комментарий</label>
            <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Подтвердить</button>
        <button type="reset" class="btn btn-primary">Сброс</button>
    </form>
</div>
@endsection
