@extends('layouts.app')
@section('content')




        <div class="wrapper-wide">
        
            <div id="container">
                <!-- Feature Box Start-->
                <div class="container">
                    <div class="custom-feature-box row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature-box fbox_1">
                                <div class="title">Free Shipping</div>
                                <p>Free shipping on order over $1000</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature-box fbox_2">
                                <div class="title">Free Return</div>
                                <p>Free return in 24 hour after purchasing</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature-box fbox_3">
                                <div class="title">Gift Cards</div>
                                <p>Give the special perfect gift</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature-box fbox_4">
                                <div class="title">Reward Points</div>
                                <p>Earn and spend with ease</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Feature Box End-->
                <div class="container">
                    <div class="row">
                        <!-- Left Part Start-->
                        <aside id="column-left" class="col-sm-3 hidden-xs">
                            <h3 class="subtitle">Categories</h3>
                            <div class="box-category">
                                <ul id="cat_accordion">
                                    <li><a href="">Electronics</a> <span class="down"></span>
                                        <ul>
                                            @foreach ($allcategories as $category)
    
                                                <li><a href="categories/{{$category->id}}"> {{ $category->name }}</a> <span
                                                        class="down"></span>
                                                    <ul>
                                                        @foreach ($category->manufacturer as $manufacturer)
                                                            <li><a href="manufacturers/{{$manufacturer->id}}">{{ $manufacturer->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endforeach
    
                                        </ul>
                                    </li>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                            
                            <h3 class="subtitle">Newest</h3>
                            <div class="side-item">
                                <x-newest />                
                             </div>
                            
                            
                            <h3 class="subtitle">Best Price</h3>
                            <div class="side-item">
                                <x-bestprice />        
                            </div>
                        </aside>
                        <!-- Left Part End-->
                        <!--Middle Part Start-->
                        <div id="content" class="col-sm-9">
                            <!-- Slideshow Start-->
                            <div class="slideshow single-slider owl-carousel">
                                <div class="item">
                                <a href="#"><img class="img-responsive" src="{{asset('image/slide/4.png')}}" alt="banner 1" /></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img class="img-responsive" src="{{asset('image/slide/2.png')}}" alt="banner 2" /></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img class="img-responsive" src="{{asset('image/slide/3.png')}}" alt="banner 3" /></a>
                                </div>
                            </div>
                            <!-- Slideshow End-->
                            <!-- Featured Product Start-->
                            <h3 class="subtitle">Featured</h3>
                            <div class="owl-carousel product_carousel">
                                <x-productbar :products="$featured"/>
    
                            </div>
                            <!-- Featured Product End-->
                            
                            <!-- Categories Product Slider Start-->
                            
                            <h3 class="subtitle">Laptops- <a class="viewall" href="categories/{{'4'}}">view all</a></h3>
                            <div class="owl-carousel latest_category_carousel">
                                <x-productbar :products="$laptops"/>
                            </div>
                            <!-- Categories Product Slider End -->
                            <!-- Brand Product Slider Start-->
                            <h3 class="subtitle">Mobile Phones - <a class="viewall" href="categories/{{'3'}}">view all</a></h3>
                            <div class="owl-carousel latest_brands_carousel">
                                <x-productbar :products="$phones"/>
                            </div>
                            <!-- Brand Product Slider End -->
                            <!-- Brand Logo Carousel Start-->
                            <!-- Brand Logo Carousel End -->
                        </div>
                        <!--Middle Part End-->
                    </div>
                </div>
            </div>
            <!--Footer Start-->
          
            <!--Footer End-->
        </div>    

        @endsection