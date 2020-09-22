@extends('admin.layout')
@section('admin')

    <div class="col-lg-6" style="margin-left: 450px ">
        <div class="card">
            <div class="card-header"><strong>Category</strong><small></small></div>
        <form action="categories/{{$category->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Category Name</label>
                    <input value="{{$category->name}}" type="text" name="name" id="name" placeholder="Enter your product name" class="form-control"></div>
                    <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection

