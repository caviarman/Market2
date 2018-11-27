@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Наименование</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="buyPrice">Цена покупки</label>
            <input type="text" name="buyPrice" class="form-control" id="buyPrice">
        </div>
        <div class="form-group">
            <label for="sellPrice">Цена продажи</label>
            <input type="text" name="sellPrice" class="form-control" id="sellPrice">
        </div>
        <div class="form-group">
            <label for="profit">Маржа</label>
            <input type="text" name="profit" class="form-control" id="profit">
        </div>
        <div class="form-group">
            <label for="measure">Ед измерения</label>
            <select class="form-control" id="measure" name="measure">
                <option selected>...</option>
                <option value="kg">kg</option>
            </select>
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
