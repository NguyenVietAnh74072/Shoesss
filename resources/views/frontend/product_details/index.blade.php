@extends('layouts.app_frontend')
@section('content')
<div class="section section-padding border-bottom">
    <div class="container">
        <div class="row learts-mb-n40">
           

            <!-- Product Images Start -->
            <div class="col-lg-6 col-12 learts-mb-40">
                <div class="product-images">
                    <button class="product-gallery-popup hintT-left" data-hint="Click to enlarge" data-images='[
                        {"src": "{{asset("public/uploads/product/$products->pro_avatar")}}", "w": 700, "h": 1100},
                    
                    ]'><i class="far fa-expand"></i></button>
                    <div class="product-gallery-slider">
                        <div class="product-zoom" data-image="{{asset("public/uploads/product/$products->pro_avatar")}}">
                            <img src="{{asset("public/uploads/product/$products->pro_avatar")}}" alt="">
                        </div>
                       
                    </div>
                    <div class="product-thumb-slider">
                        <div class="item">
                            <img src="{{asset("public/uploads/product/$products->pro_avatar")}}" alt="">
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- Product Images End -->

            <!-- Product Summery Start -->
            <div class="col-lg-6 col-12 learts-mb-40">
                <div class="product-summery">
                    
                    <h3 class="product-title">{{$products->pro_name}}</h3>
                    <div class="product-price">{{$products->pro_price}}</div>
                    <div class="product-description">
                        <p>{{$products->pro_description}}</p>
                    </div>
                    <div class="product-variations">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="label"><span>Số lượng</span></td>
                                    <td class="value">
                                        <div class="product-quantity">
                                            <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                            <input type="text" class="input-qty" value="1">
                                            <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="product-buttons">
                        <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark hintT-top" data-hint="Add to Wishlist"><i class="fal fa-heart"></i></a>
                        <a href="#" class="btn btn-dark btn-outline-hover-dark"><i class="fal fa-shopping-cart"></i> Lien he</a>
                        <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                    </div>
                    
                    <div class="product-meta">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="label"><span>Danh mục</span></td>
                                    <td class="value">
                                        @foreach($categorys ??[] as $category)
                                        <a href="{{route('get.category',$category->c_slug)}}">{{$category->c_name}}</a> 
                                       
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label"><span>Từ khóa</span></td>
                                    <td class="value">
                                        <ul class="product-tags">
                                            @foreach($keywords ??[] as $item)
                                            <a href="{{route('get.keyword',$item->k_slug)}}">{{$item->k_name}},   </a>
                                            
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label"><span>Chia sẻ</span></td>
                                    <td class="va">
                                        <div class="product-share">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                            <a href="#"><i class="fal fa-envelope"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Product Summery End -->
           

        </div>
    </div>

</div>
<!-- Single Products Section End -->

<!-- Single Products Infomation Section Start -->
<div class="section section-padding border-bottom">
    <div class="container">

        <ul class="nav product-info-tab-list">
            <li><a class="active" data-toggle="tab" href="#tab-description">Description</a></li>
            <li><a data-toggle="tab" href="#tab-pwb_tab">Content</a></li>
          
        </ul>
        <div class="tab-content product-infor-tab-content">
            <div class="tab-pane fade show active" id="tab-description">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <p>{{$products->pro_description}}</p>
                        <div class="row">
                            <div class="col-lg-6 col-12 learts-mb-30">
                                <div class="sale-banner7">
                                    <div class="inner">
                                        <div class="image"><img src="{{asset("public/uploads/product/$products->pro_avatar")}}" alt="Sale Banner Image"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-pwb_tab">
                <div class="row learts-mb-n30">
                    <div class="col-12 learts-mb-30">
                        <div class="row learts-mb-n10">
                            <div class="col-lg-2 col-md-3 col-12 learts-mb-10"><img src="assets/images/brands/brand-2.png" alt=""></div>
                            <div class="col learts-mb-10">
                                <p>{{$products->pro_content}}</p>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            <div class="tab-pane fade" id="tab-reviews">
                <div class="product-review-wrapper">
                    <span class="title">3 reviews for Square Serving Platter</span>
                    <ul class="product-review-list">
                        <li>
                            <div class="product-review">
                                <div class="thumb"><img src="assets/images/review/review-1.jpg" alt=""></div>
                                <div class="content">
                                    <div class="ratings">
                                        <span class="star-rating">
                                            <span class="rating-active" style="width: 100%;">ratings</span>
                                        </span>
                                    </div>
                                    <div class="meta">
                                        <h5 class="title">Edna Watson</h5>
                                        <span class="date">November 27, 2020</span>
                                    </div>
                                    <p>Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-review">
                                <div class="thumb"><img src="assets/images/review/review-2.jpg" alt=""></div>
                                <div class="content">
                                    <div class="ratings">
                                        <span class="star-rating">
                                            <span class="rating-active" style="width: 80%;">ratings</span>
                                        </span>
                                    </div>
                                    <div class="meta">
                                        <h5 class="title">Scott James</h5>
                                        <span class="date">November 27, 2020</span>
                                    </div>
                                    <p>Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-review">
                                <div class="thumb"><img src="assets/images/review/review-3.jpg" alt=""></div>
                                <div class="content">
                                    <div class="ratings">
                                        <span class="star-rating">
                                            <span class="rating-active" style="width: 60%;">ratings</span>
                                        </span>
                                    </div>
                                    <div class="meta">
                                        <h5 class="title">Owen Christ</h5>
                                        <span class="date">November 27, 2020</span>
                                    </div>
                                    <p>Good Product!</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <span class="title">Add a review</span>
                    <div class="review-form">
                        <p class="note">Your email address will not be published. Required fields are marked *</p>
                        <form action="#">
                            <div class="row learts-mb-n30">
                                <div class="col-md-6 col-12 learts-mb-30"><input type="text" placeholder="Name *"></div>
                                <div class="col-md-6 col-12 learts-mb-30"><input type="email" placeholder="Email *"></div>
                                <div class="col-12 learts-mb-10">
                                    <div class="form-rating">
                                        <span class="title">Your rating</span>
                                        <span class="rating"><span class="star"></span></span>
                                    </div>
                                </div>
                                <div class="col-12 learts-mb-30"><textarea placeholder="Your Review *"></textarea></div>
                                <div class="col-12 text-center learts-mb-30"><button class="btn btn-dark btn-outline-hover-dark">Submit</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Single Products Infomation Section End -->

<!-- Recommended Products Section Start -->
<div class="section section-padding">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title2 text-center">
            <h2 class="title">Sản phẩm tham khảo</h2>
        </div>
        <!-- Section Title End -->

        <!-- Products Start -->
        <div class="product-carousel">
            @foreach($getProductLatest ??[] as $item)
            <div class="col">
               
                <div class="product">
                  
                    <div class="product-thumb">
                        <a href="{{route('get.product_detail',$item->pro_slug)}}" class="image">
                            <span class="product-badges">
                                <span class="onsale">{{$item->pro_sale}}</span>
                            </span>
                            <img src="{{asset("public/uploads/product/$item->pro_avatar")}}" alt="Product Image">
                            <img class="image-hover " src="{{asset("public/uploads/product/$item->pro_avatar")}}" alt="Product Image">
                        </a>
                        <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                  
                    <div class="product-info">
                        <h6 class="title"><a href="{{route('get.product_detail',$item->pro_slug)}}">{{$item->pro_name}}</a></h6>
                        <span class="price">
                            {{$item->pro_price}}
                  
                        </span>
                        <div class="product-buttons">
                            <a href="{{route('get.product_detail',$item->pro_slug)}}" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
                            <a href="{{route('get.product_detail',$item->pro_slug)}}" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                            <a href="{{route('get.product_detail',$item->pro_slug)}}" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
                        </div>
                    </div>
                </div>
             
            </div>
            @endforeach

        
        </div>
        <!-- Products End -->

    </div>
</div>

@endsection