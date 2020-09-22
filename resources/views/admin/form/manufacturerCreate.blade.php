@extends('admin.layout')
@section('admin')
    <div class="col-lg-6" style="margin-left: 450px ">
        <div class="card">
            <div class="card-header"><strong>Manufacturer</strong><small></small></div>
            <form action="manufacturers" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Manufacturer Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter name" class="form-control"></div>
                    <div class="form-group">
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Manufactuerer Category</label>
                            <select  name="category">
                                @foreach ($allcategories as $category)
                                     <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="row form-group">
                        <div class="col-8">
                            <label for="company" class=" form-control-label">Upload image: </label> <input type="file"
                                id="image" name="image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Add</button>
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection

