@extends('layout.main')

@section('title', 'Product')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Insert Product</h1>
            <form method="post" action="/product-insert">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="custom-select" id="category_id" name="category_id">
                        <option selected>Pilih Category</option>
                        @foreach ($category as $cat )
                        <option value="{{ $cat -> id }}">{{ $cat -> name }}</option>
                        @endforeach
                    </select>
                    <!--<input type="text" class="form-control" id="category_id" name="category_id">-->
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection