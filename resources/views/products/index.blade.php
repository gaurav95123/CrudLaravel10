@extends('layouts.app')
@section('main')

<div class="container">
    <div class="text-right">
        <a href="products/create" class="btn btn-dark mt-2">New Product</a>

    </div>
    <table class="table table-hover mt-5">
        <thead>
            <tr>
                <th>Sno.</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <img src="products/{{$product->image }}" class="rounded-circle" width="50px" height="50px" />
                </td>

                <td>
                    <a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
                    <a href="products/{{$product->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                    <a href="products/{{$product->id}}/show" class="btn btn-success btn-sm">View</a>

                </td>



            </tr>
            @endforeach

        </tbody>
    </table>
    {{$products->links()}}
</div>
@endsection