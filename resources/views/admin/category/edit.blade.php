
@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Update Category</h4>
                        </div>
                        <div class="card-body">
                        <form method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}">
                                @csrf
                                @method('PATCH')
                                <input name="id" type="hidden" value="{{ $category->id }}">
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                        <input type="text" name="title" id="title" class="form-control" value="{{ $category->title }}" placeholder="Title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                                <div class="form-group">
                                                <label for="des">Description</label>
                                                <input type="text" name="des" id="des" class="form-control" value="{{ $category->des }}" placeholder="Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                                <div class="form-group">
                                                <label for="img">Image</label>
                                                <input type="text" name="img" id="img" class="form-control" value="{{ $category->img }}" placeholder="Image">
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
