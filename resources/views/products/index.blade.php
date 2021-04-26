@extends('layout.main')

@section('title', 'Product')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Products</h1>
            <a href="/insert-product" class="btn btn-primary my-3">Insert Product</a>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>
                            {{ $product -> id }}
                        </td>
                        <td>
                            {{ $product -> name }}
                        </td>
                        <td>
                            {{ $product -> price }}
                        </td>
                        <td>
                            {{ $product -> category_id }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection