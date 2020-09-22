@extends('admin.layout')
@section('admin')
    <div class="col-lg-6" style="margin-left: 450px ">
        <div class="card">
            <div class="card-header"><strong>Manufacturers</strong><small></small></div>
        <form action="manufacturers/{{$manufacturer->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Manufacturer Name</label>
                    <input value="{{$manufacturer->name}}" type="text" name="name" id="name" placeholder="Enter your manufacturer name" class="form-control"></div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Manufactuerer Category</label>
                    <select  name="category">
                        <option value="{{$default->id}}" selected>{{$default->name}}</option>
                                @foreach ($allcategories as $category)
                                    @if ($category->id!==$default->id)
                                         <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                    </div>
                    <div class="row form-group">
                        <div class="col-8">
                            <label for="company" class=" form-control-label">Upload image: </label> <input type="file"
                                id="image" name="image">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection

