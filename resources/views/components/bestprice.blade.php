@foreach ($bps as $bp)
    <div class="product-thumb clearfix">

        <div class="image">
        <a href="products/{{$bp->id}}"><img src="storage/products/{{ $bp->image }}" alt="Aspire Ultrabook Laptop"
                    title="Aspire Ultrabook Laptop" class="img-responsive" /></a>
        </div>
        <div class="caption">
            <h4><a href="products/{{$bp->id}}">{{ $bp->name }}</a></h4>
            <p class="price"> <span class="price-new">{{ (number_format($bp->price) )}}</span> </p>
       
        </div>
        <div class="button-group">
            <div class="add-to-links">
                <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i
                        class="fa fa-heart"></i></button>
                <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i
                        class="fa fa-exchange"></i></button>
            </div>
        </div>

    </div>
@endforeach
