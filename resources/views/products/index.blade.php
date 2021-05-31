@extends('layout.main')

@section('title', 'Product')

@section('container')
<?php

use Illuminate\Support\Facades\DB as FacadesDB;
?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Products</h1>
            <a href="/insert-product" class="btn btn-primary my-3">Insert Product</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th>Action</th>
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
                            {{ $product->category->name }}
                        </td>
                        <td>
                            <a href="/edit/{{ $product -> id }}" class="btn btn-primary">Edit</a>
                            <form action="delete-product/{{ $product -> id }}" method="post">
                                @method('delete')
                                @csrf
                                <button type=" submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection