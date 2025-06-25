<div class="single-product">
    <!-- Product Image Start -->
    <div class="product-loading" wire:loading>
        <div style="width: 50%;margin: auto;padding-top: 50px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                <circle fill="#F1AC06" stroke="#F1AC06" stroke-width="2" r="15" cx="40" cy="100">
                    <animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;"
                             keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.4"></animate>
                </circle>
                <circle fill="#F1AC06" stroke="#F1AC06" stroke-width="2" r="15" cx="100" cy="100">
                    <animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;"
                             keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.2"></animate>
                </circle>
                <circle fill="#F1AC06" stroke="#F1AC06" stroke-width="2" r="15" cx="160" cy="100">
                    <animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;"
                             keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="0"></animate>
                </circle>
            </svg>
        </div>
    </div>
    <div class="pro-img">
        <a href="product.html">
            <img class="primary-img" src="img/products/7.jpg" alt="single-product">
            <img class="secondary-img" src="img/products/8.jpg" alt="single-product">
        </a>
    </div>
    <!-- Product Image End -->
    <!-- Product Content Start -->
    <div class="pro-content">
        <div class="product-rating">
            @switch($product->rating)
                @case(1)
                    <i class="fa fa-star"></i>
                    @break
                @case(2)
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    @break
                @case(3)
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    @break
                @case(4)
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    @break
                @case(5)
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    @break
            @endswitch
        </div>
        <h4><a href="product.html">{{$product->title}}</a></h4>
        <p><span class="price">${{$product->price}}</span></p>
        <div class="pro-actions">
            <div class="actions-secondary">
                <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                <a class="add-cart" wire:click="addToCart({{$product->id}})" data-toggle="tooltip" title="Add to Cart">В
                    корзину</a>
                <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
            </div>
        </div>
    </div>
    <!-- Product Content End -->
</div>
