@extends('layouts.app');
@section('content')
    <div id="container">
        <div class="container">
            <div id="content" class="col-sm-9">
                <h1 class="title">Electronics</h1>
                <div class="product-filter">
                    <div class="row">
                        <div class="col-md-4 col-sm-5">
                            <div class="btn-group">
                                <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip"
                                    title="List"><i class="fa fa-th-list"></i></button>
                                <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip"
                                    title="Grid"><i class="fa fa-th"></i></button>
                            </div>
                            <a href="compare.html" id="compare-total">Product Compare (0)</a>
                        </div>
                        <div class="col-sm-2 text-right">
                            <label class="control-label" for="input-sort">Sort By:</label>
                        </div>
                    </div>
                </div>
                <br />
                <div class="row products-category">
                    @foreach ($productsCate as $product)
                        <div class="product-layout product-list col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="products/{id}"><img src="image/products/{{ $product->image }}"
                                            alt=" Strategies for Acquiring Your Own Laptop "
                                            title=" Strategies for Acquiring Your Own Laptop " class="img-responsive" /></a>
                                </div>
                                <div>
                                    <div class="caption">
                                        <h4><a href="products/{id}"> {{ $product->name }} </a></h4>
                                        <p class="description"> Latest Intel mobile architecture Powered by the most
                                            advanced mobile processors from Intel, t..</p>
                                        <p class="price"> <span class="price-new">{{ number_format($product->price) }}</span> <span
                                                class="price-tax">Ex Tax: $1,400.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>Add to
                                                Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                onClick=""><i class="fa fa-heart"></i> <span>Add to Wish
                                                    List</span></button>
                                            <button type="button" data-toggle="tooltip" title="Compare this Product"
                                                onClick=""><i class="fa fa-exchange"></i> <span>Compare this
                                                    Product</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                </div>

                <div class="row">
                    
                    <div class="col-sm-6 text-right">Showing 1 to 12 of 15 (2 Pages)</div>
                </div>
            </div>
        </div>
    </div>
@endsection
