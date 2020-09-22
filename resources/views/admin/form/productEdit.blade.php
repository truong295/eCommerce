@extends('admin.layout')
@section('admin')

    <div class="col-lg-6" style="margin-left: 450px ">
        <div class="card">
            <div class="card-header"><strong>Products</strong><small></small></div>
        <form action="products/{{$product->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Product Name</label>
                    <input value="{{$product->name}}" type="text" name="name" id="name" placeholder="Enter your product name" class="form-control"></div>
                    <div class="form-group">
                        <label for="vat" class=" form-control-label">Price</label>
                        <input  value="{{$product->price}}" type="text" name="price" id="price" placeholder="Price" class="form-control"></div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Product Category</label>
                            <select  name="category">
                                <option value="{{$defaultCate->id}}" selected>{{$defaultCate->name}}</option>
                                @foreach ($allcategories as $category)
                                    @if ($category->id!==$defaultCate->id)
                                     <option value="{{$category->id}}">{{$category->name}}</option>
                                     @endif
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Product Manufacturer</label>
                            <select  name="manufacturer">
                                <option value="{{$defaultManu->id}}" selected>{{$defaultManu->name}}</option>
                                @foreach ($allmanufacturers as $manufacturer)
                                     @if ($manufacturer->id!==$defaultManu->id)
                                     <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
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

