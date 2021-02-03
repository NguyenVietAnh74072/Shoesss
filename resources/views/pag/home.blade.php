@extends('product');
@section('content_product');
<div class="row">


    @foreach($all_product as $key=>$product)
    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
    <div class="single-product-wrapper">
    
    <div class="product-img">
    <img src="img/product-img/product6.jpg" alt="">
    
    <img class="hover-img" src="img/product-img/product1.jpg" alt="">
    </div>
    
    <div class="product-description d-flex align-items-center justify-content-between">
    
    <div class="product-meta-data">
    <div class="line"></div>
    <p class="product-price">$180</p>
    <a href="product-details.html">
    <h6>Modern Chair</h6>
    </a>
    </div>
    
    <div class="ratings-cart text-right">
    <div class="ratings">
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    </div>
    <div class="cart">
    <a href="cart.html" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endforeach
    </div>


@endsection;



