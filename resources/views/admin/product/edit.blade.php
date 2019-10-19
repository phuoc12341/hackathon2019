
@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Update Product</h4>
                        </div>
                        <div class="card-body">
                        <form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
                                @csrf
                                @method('PATCH')
                                <input name="id" type="hidden" value="{{ $product->id }}">
                                <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" id="title" class="form-control" value="{{ $product->title }}" placeholder="Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                    <div class="form-group">
                                                    <label for="des">Description</label>
                                                    <input type="text" name="des" id="des" class="form-control" value="{{ $product->des }}" placeholder="Description">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                    <div class="form-group">
                                                    <label for="img">Image</label>
                                                    <input type="text" name="img" id="img" class="form-control" value="{{ $product->img }}" placeholder="Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                    <div class="form-group">
                                                    <label for="categoryId">Category</label>
                                                    <select name="categoryId" id="categoryId" class="form-control" placeholder="Category">
                                                        @foreach ($listCategory as $category)
                                                            @if ($category->id == $product->categoryId)
                                                                <option value="{{ $category->id }}" selected>{{ $category->title }}</option>
                                                            @else
                                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                    <div class="form-group">
                                                    <label for="price">Price</label>
                                                    <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}" placeholder="Price">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                    <div class="form-group">
                                                    <label for="sale">Sale</label>
                                                    <input type="text" name="sale" id="sale" class="form-control" value="{{ $product->sale }}" placeholder="Sale">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                    <div class="form-group">
                                                    <label for="rate">Rate</label>
                                                    <input type="text" name="rate" id="rate" class="form-control" value="{{ $product->rate }}" placeholder="Rate">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
