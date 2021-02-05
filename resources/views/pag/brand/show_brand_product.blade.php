@extends('product');
@section('content_product');
<div class="row">


    @foreach($brand_by_id as $key=>$br_by_id)
    <a href="{{URL::to('/chi-tiet-san-pham/'.$br_by_id->brand_id)}}">
    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
    <div class="single-product-wrapper">
    
    <div class="product-img">
        <img src="/product/{{($br_by_id->product_image)}}" alt="" />
    
    <img class="hover-img" src="/frontend/frontend_sanpham/img/product-img/product1.jpg" alt="">
    </div>
    
    <div class="product-description d-flex align-items-center justify-content-between">
    
    <div class="product-meta-data">
    <div class="line"></div>
    <p class="product-price">{{($br_by_id->product_price)}}</p>
    <a href="product-details.html">
    <h6>{{($br_by_id->product_name)}}</h6>
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
    </a>
    @endforeach
    </div>


@endsection;



