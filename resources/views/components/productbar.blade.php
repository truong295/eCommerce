<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@foreach ($products as $product)
<div class="product-thumb clearfix">
    <div class="image">
        <a href="products/{{$product->id}}"><img src="storage/products/{{ $product->image }}" alt="Aspire Ultrabook Laptop"
                title="Aspire Ultrabook Laptop" class="img-responsive" /></a>
    </div>
    <div class="caption">
        <h4><a href="products/{{$product->id}}">{{$product->name}}</a></h4>
        <p class="price"> <span class="price-new">{{number_format($product->price)}}</span> </p>

    </div>
    <div class="button-group">
    <a href="#" data-url="{{route('addToCart',['id'=>$product->id])}}" class="add_to_cart">
        <span>Add to Cart</span>
    </a>
    </div>
</div>
@endforeach

<script>
    function addToCart(event){
        event.preventDefault();
        let urlCart = $(this).data('url');
        $.ajax({
            type: "GET",
            url: urlCart,
            dataType: 'json',
            success: function(data){
            },
            error: function(){

            },
        })
    }
    $(function(){
        $('.add_to_cart').on('click',addToCart);
    });
</script>

