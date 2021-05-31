@extends('layout.main')

@section('title', 'Product')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Edit Product</h1>
            <form method="post" action="/edit/{{ $product[0] -> id }}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product[0] -> name }}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $product[0] -> price }}">
                </div>
                <div class=" form-group">
                    <label for="category_id">Category</label>
                    <input type="text" class="form-control" id="category_id" name="category_id" value="{{ $product[0] -> category_id }}">
                </div>
                <button type=" submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection