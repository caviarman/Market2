@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('logs.store') }}">
        @csrf
        <div class="form-group">
            <label for="operation">Операция</label>
            <select class="form-control" id="operation" name="operation">
                <option selected>выбрать тип операции</option>
                <option value="1">Приход</option>
                <option value="0">Расход</option>
            </select>
        </div>
        <div class="form-group">
            <label for="category">Категория</label>
            <select class="form-control" id="category" name="category">
                <option selected>выбрать категорию</option>
                <option value="Продукты">Продукты</option>
                <option value="Хозяйство">Хозяйство</option>
                <option value="Школа">Школа</option>
                <option value="Здоровье">Здоровье</option>
                <option value="Отдых">Отдых</option>
                <option value="Другое">Другое</option>
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
