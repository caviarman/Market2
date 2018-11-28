@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('sales.store') }}">
        @csrf
        <div class="form-group">
            <label for="good">Наименование</label>
            <select class="form-control" id="good" name="good">
                <option selected>выбрать товар</option>
                @foreach ($goods as $good)
                <option value="{{ $good->id }}"> {{ $good->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="weight">Вес</label>
            <input type="text" name="weight" class="form-control" id="weight">
        </div>
        <div class="form-group">
            <label for="discount">Скидка</label>
            <input type="text" name="discount" class="form-control" id="discount" value="0">
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
