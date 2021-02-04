<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<title>Amado - Furniture Ecommerce Template | Shop</title>

<link rel="icon" href="{{asset('/frontend/frontend_sanpham/img/core-img/favicon.ico')}}">
<link rel="stylesheet" href="{{asset('/frontend/frontend_sanpham/fonts/flaticon/font/flaticon.css/font-awesome.min.css')}}" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('/frontend/frontend_sanpham/css/core-style.css')}}">
<link rel="stylesheet" href="{{asset('/frontend/frontend_sanpham/css/style.css')}}">
</head>
<body>

<div class="search-wrapper section-padding-100">
<div class="search-close">
<i class="fa fa-close" aria-hidden="true"></i>
</div>
<div class="container">
<div class="row">
<div class="col-12">
 <div class="search-content">
<form action="#" method="get">
<input type="search" name="search" id="search" placeholder="Type your keyword...">
<button type="submit"><img src="/frontend/frontend_sanpham/img/core-img/search.png" alt=""></button>
</form>
</div>
</div>
</div>
</div>
</div>


<div class="main-content-wrapper d-flex clearfix">

<div class="mobile-nav">

<div class="amado-navbar-brand">
<a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
</div>

<div class="amado-navbar-toggler">
<span></span><span></span><span></span>
</div>
</div>

<header class="header-area clearfix">

<div class="nav-close">
<i class="fa fa-close" aria-hidden="true"></i>
</div>

<div class="logo">
<a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
</div>

<nav class="amado-nav">
<ul>
<li><a href="index.html">Home</a></li>
<li class="active"><a href="shop.html">Shop</a></li>
<li><a href="product-details.html">Product</a></li>
<li><a href="cart.html">Cart</a></li>
<li><a href="checkout.html">Checkout</a></li>
</ul>
</nav>

<div class="amado-btn-group mt-30 mb-100">
<a href="#" class="btn amado-btn mb-15">%Discount%</a>
<a href="#" class="btn amado-btn active">New this week</a>
</div>

<div class="cart-fav-search mb-100">
<a href="cart.html" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Cart <span>(0)</span></a>
<a href="#" class="fav-nav"><img src="img/core-img/favorites.png" alt=""> Favourite</a>
<a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
</div>

<div class="social-info d-flex justify-content-between">
<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
</div>
</header>
  <div class="shop_sidebar_area">

       <div class="widget catagory mb-50">

          <h6 class="widget-title mb-30">Danh mục sản phẩm</h6>
           @foreach ($category as $key => $cate)

    <div class="catagories-menu">
      
           <ul>
            <li class="active"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{($cate->category_name)}}</a></li>
          
            </ul>
    </div>
           @endforeach
</div>

<div class="widget brands mb-50">

<h6 class="widget-title mb-30">Thương hiệu sản phẩm</h6>
<div class="widget-desc">
       @foreach ($brand as $key => $br)
       <ul>
              <li class="active"><a href="{{URL::to('/thuong-hieu-san-pham/'.$br->brand_id)}}">{{($br->brand_name)}}</a></li>
            
              </ul>
@endforeach


</div>
</div>

<div class="widget color mb-50">

<h6 class="widget-title mb-30">Color</h6>
<div class="widget-desc">
<ul class="d-flex">
<li><a href="#" class="color1"></a></li>
<li><a href="#" class="color2"></a></li>
<li><a href="#" class="color3"></a></li>
<li><a href="#" class="color4"></a></li>
<li><a href="#" class="color5"></a></li>
<li><a href="#" class="color6"></a></li>
<li><a href="#" class="color7"></a></li>
<li><a href="#" class="color8"></a></li>
</ul>
</div>
</div>

<div class="widget price mb-50">

<h6 class="widget-title mb-30">Price</h6>
<div class="widget-desc">
<div class="slider-range">
<div data-min="10" data-max="1000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="10" data-value-max="1000" data-label-result="">
<div class="ui-slider-range ui-widget-header ui-corner-all"></div>
<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
</div>
<div class="range-price">$10 - $1000</div>
</div>
</div>
</div>
</div>
<div class="amado_product_area section-padding-100">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="product-topbar d-xl-flex align-items-end justify-content-between">

<div class="total-products">
<p>Showing 1-8 0f 25</p>
<div class="view d-flex">
<a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
</div>
</div>

<div class="product-sorting d-flex">
<div class="sort-by-date d-flex align-items-center mr-15">
<p>Sort by</p>
<form action="#" method="get">
<select name="select" id="sortBydate">
<option value="value">Date</option>
<option value="value">Newest</option>
<option value="value">Popular</option>
</select>
</form>
</div>
<div class="view-product d-flex align-items-center">
<p>View</p>
<form action="#" method="get">
<select name="select" id="viewProduct">
<option value="value">12</option>
<option value="value">24</option>
<option value="value">48</option>
<option value="value">96</option>
</select>
 </form>
</div>
</div>
</div>
</div>
</div>
@yield('content_product')
<div class="row">
<div class="col-12">

<nav aria-label="navigation">
<ul class="pagination justify-content-end mt-50">
<li class="page-item active"><a class="page-link" href="#">01.</a></li>
<li class="page-item"><a class="page-link" href="#">02.</a></li>
<li class="page-item"><a class="page-link" href="#">03.</a></li>
<li class="page-item"><a class="page-link" href="#">04.</a></li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>


<section class="newsletter-area section-padding-100-0">
<div class="container">
<div class="row align-items-center">

<div class="col-12 col-lg-6 col-xl-7">
<div class="newsletter-text mb-100">
<h2>Subscribe for a <span>25% Discount</span></h2>
<p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur. Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
</div>
</div>

<div class="col-12 col-lg-6 col-xl-5">
<div class="newsletter-form mb-100">
<form action="#" method="post">
<input type="email" name="email" class="nl-email" placeholder="Your E-mail">
<input type="submit" value="Subscribe">
</form>
</div>
</div>
</div>
</div>
</section>


<footer class="footer_area clearfix">
<div class="container">
<div class="row align-items-center">

<div class="col-12 col-lg-4">
<div class="single_widget_area">

<div class="footer-logo mr-50">
<a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
</div>
<p class="copywrite">
       Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>

</div>
</div>

<div class="col-12 col-lg-8">
<div class="single_widget_area">

<div class="footer_menu">
<nav class="navbar navbar-expand-lg justify-content-end">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
<div class="collapse navbar-collapse" id="footerNavContent">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link" href="index.html">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="shop.html">Shop</a>
</li>
<li class="nav-item">
<a class="nav-link" href="product-details.html">Product</a>
</li>
<li class="nav-item">
<a class="nav-link" href="cart.html">Cart</a>
</li>
<li class="nav-item">
<a class="nav-link" href="checkout.html">Checkout</a>
</li>
</ul>
</div>
</nav>
</div>
</div>
</div>
</div>
</div>
</footer>


<script src="/frontend/frontend_sanpham/js/jquery/jquery-2.2.4.min.js"></script>

<script src="/frontend/frontend_sanpham/js/popper.min.js"></script>

<script src="/frontend/frontend_sanpham/js/bootstrap.min.js"></script>

<script src="/frontend/frontend_sanpham/js/plugins.js"></script>

<script src="/frontend/frontend_sanpham/js/active.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/amado/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jan 2021 17:28:08 GMT -->
</html>