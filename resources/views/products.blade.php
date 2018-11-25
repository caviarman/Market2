@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <p>
        <a class="btn btn-secondary" href="{{ route('products.create') }}" role="button">Create</a>
    </p>
</div> -->
<div class="container">
    <form action="#">
        @csrf
        <div class="form-group">
            <label for="product">Товар</label>
            <select class="form-control" id="product" name="product">
                <option selected>выбрать товар</option>
                @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
