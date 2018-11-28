@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('goods.update', ['id' => $good->id]) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Наименование</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $good->name }}">
        </div>
        <div class="form-group">
            <label for="buyPrice">Цена покупки</label>
            <input type="text" name="buyPrice" class="form-control" id="buyPrice" value="{{ $good->buyPrice }}">
        </div>
        <div class="form-group">
            <label for="sellPrice">Цена продажи</label>
            <input type="text" name="sellPrice" class="form-control" id="sellPrice" value="{{ $good->sellPrice }}">
        </div>
        <div class="form-group">
            <label for="profit">Маржа</label>
            <input type="text" name="profit" class="form-control" id="profit" value="{{ $good->profit }}">
        </div>
        <div class="form-group">
            <label for="measure">Ед измерения</label>
            <select class="form-control" id="measure" name="measure" value="{{ $good->measure }}">
                <option selected>...</option>
                <option value="kg">kg</option>
            </select>
        </div>
        <div class="form-group">
            <label for="comments">Комментарий</label>
            <textarea class="form-control" id="comments" name="comments" rows="3">{{ $good->comments }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Подтвердить</button>
        <button type="reset" class="btn btn-primary">Сброс</button>
    </form>
</div>
<br>
<div class="container">
    <form method="POST" action="{{ route('goods.delete', ['id' => $good->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Удалить</button>
    </form>
</div>
@endsection
