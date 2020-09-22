@extends('layouts.app')
@section('content')
    

<body>
    <div class="wrapper-wide">
        <div id="container">
            <div class="container">
                <!-- Breadcrumb Start-->
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                    <li><a href="cart.html">Shopping Cart</a></li>
                </ul>
                <!-- Breadcrumb End-->
                <div class="row">
                    <!--Middle Part Start-->
                    <div id="content" class="col-sm-12">
                        <h1 class="title">Shopping Cart</h1>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td class="text-center">Image</td>
                                        <td class="text-left">Product Name</td>
                                        <td class="text-left">Quantity</td>
                                        <td class="text-right">Unit Price</td>
                                        <td class="text-right">Total</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item)
                                    <tr>
                                        <td class="text-center">
                                        <a href="product.html"><img src="storage/products/{{$item['image']}}"
                                                    alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop"
                                                    class="img-thumbnail" style="width: 50px" /></a>
                                        </td>
                                    <td class="text-left"><a href="products/{{$item['id']}}">{{$item['name']}}</a>
                                           </td>

                                        <td class="text-left">
                                            <div class="input-group btn-block quantity">
                                            <input type="text" name="quantity" value="{{$item['quantity']}}" size="1"
                                                    class="form-control" min="1"/>
                                                <span class="input-group-btn">
                                                    <button type="submit" data-toggle="tooltip" title="Update"
                                                        class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Remove"
                                                        class="btn btn-danger" onClick=""><i
                                                            class="fa fa-times-circle"></i></button>
                                                </span></div>
                                        </td>
                                    <td class="text-right">{{number_format($item['price'])}}</td>
                                        <td class="text-right">{{number_format($item['quantity']*$item['price'])}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-8">
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="text-right"><strong>Total:</strong></td>
                                    <td class="text-right">{{number_format($total)}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="buttons">
                            <div class="pull-left"><a href="/" class="btn btn-default">Continue Shopping</a></div>
                            <div class="pull-right"><a href="checkout.html" class="btn btn-primary">Checkout</a></div>
                        </div>

                        <!--Middle Part End -->
                    </div>
                </div>
            </div>
@endsection