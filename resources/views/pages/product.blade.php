@extends('layouts.app')
@section('content')


    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<%= root_path %>"
                        itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a></li>
                <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="" itemprop="url"><span
                            itemprop="title">Electronics</span></a></li>
                <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="products/{{$product->id}}" itemprop="url"><span
                            itemprop="title">{{ $product->name }} </span></a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-9">
                    <div itemscope itemtype="http://schema.org/Product">
                        <h1 class="title" itemprop="name">{{ $product->name }}</h1>
                        <div class="row product-info">
                            <div class="col-sm-6">
                                <div class="image"><img style="width: 400px; height: 400px !important"
                                        class="img-responsive" itemprop="image" id="zoom_01" src="image/products/{{$product->image }}"
                                        title="{{ $product->name }}" alt="{{ $product->name }}"
                                        data-zoom-image="{{ $product->image }}" /> </div>

                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled description">
                                    <li><b>Brand:</b> <a href="#"><span itemprop="brand">{{ $product->name }}</span></a>
                                    </li>

                                    <li><b>Availability:</b> <span class="instock">In Stock</span></li>
                                </ul>
                                <ul class="price-box">
                                    <li class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer"> <span
                                            itemprop="price">{{ number_format($product->price) }}<span itemprop="availability"
                                                content="In Stock"></span></span>
                                    </li>
                                    <li></li>

                                </ul>
                                <div id="product">
                                    <h3 class="subtitle">Available Options</h3>
                                    <div class="form-group required">
                                        <label class="control-label">Color</label>
                                        <select class="form-control" id="input-option200" name="option[200]">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="4">Black </option>
                                            <option value="3">Silver </option>
                                            <option value="1">Green </option>
                                            <option value="2">Blue </option>
                                        </select>
                                    </div>
                                    <div class="cart">
                                        <div>

                                        </div>
                                        <div>
                                            <button type="button" class="wishlist" onClick=""><i class="fa fa-heart"></i>
                                                Add to Wish List</button>
                                            <br />
                                            <button type="button" class="wishlist" onClick=""><i class="fa fa-exchange"></i>
                                                Compare this Product</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="rating" itemprop="aggregateRating" itemscope
                                    itemtype="http://schema.org/AggregateRating">
                                    <meta itemprop="ratingValue" content="0" />
                                    <p><span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star fa-stack-1x"></i><i
                                                class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star fa-stack-1x"></i><i
                                                class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star fa-stack-1x"></i><i
                                                class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-1x"></i></span> <a
                                            onClick="$('a[href=\'#tab-review\']').trigger('click'); return false;"
                                            href=""><span itemprop="reviewCount">1 reviews</span></a> / <a
                                            onClick="$('a[href=\'#tab-review\']').trigger('click'); return false;"
                                            href="">Write a review</a></p>
                                </div>
                                <hr>
                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                    <a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal"
                                        pi:pinit:url="http://www.addthis.com/features/pinterest"
                                        pi:pinit:media="http://www.addthis.com/cms-content/images/features/pinterest-lg.png"></a>
                                    <a class="addthis_counter addthis_pill_style"></a>
                                </div>
                                <script type="text/javascript"
                                    src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-514863386b357649"></script>
                                <!-- AddThis Button END -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--Middle Part End -->
                <!--Right Part Start -->
                <!--Right Part End -->
            </div>
        </div>
    </div>
<!--Footer Start-->
 @endsection
