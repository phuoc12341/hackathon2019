@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title d-inline">List Product</h4>

                            <a href="{{ route('products.create') }}" class="btn btn-success btn-fill pull-right">Create Product</a>
                            {{-- <button type="submit" class="btn btn-success btn-fill pull-right"></button> --}}
                            <p class="card-category">Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Sale</th>
                                    <th>Rate</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($listProduct as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->des }}</td>
                                        <td>{{ $product->titleCategory }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->sale }}</td>
                                        <td>{{ $product->rate }}</td>
                                        <td><img src="{{ $product->img }}" height="50" width="50"></td>
                                        <td>
                                        <a class="btn btn-warning" href="{{ route('products.edit', ['product' => $product->id]) }}"><i class="fas fa-pen-square"></i></a>

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger deleteButton"  data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
