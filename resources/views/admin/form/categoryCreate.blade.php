@extends('admin.layout')
@section('admin')

    <div class="col-lg-6" style="margin-left: 450px ">
        <div class="card">
            <div class="card-header"><strong>Category</strong><small></small></div>
            <form action="categories" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Category Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your product name" class="form-control"></div>
                    <button type="submit" class="btn btn-outline-primary">Add</button>
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection

