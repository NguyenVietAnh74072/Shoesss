@extends('vans');
@section('content_product')

<div class="col-md-8 col-sm-8 women-dresses">
    <div class="women-set1">
        <h2 class="title text-center">Danh muc san pham</h2>
     @foreach($category_by_id as $key=>$cate_by_id)
         <div class="col-md-4 women-grids wp3 animated wow slideInUp" data-wow-delay=".5s">
        <a href="single.html"><div class="product-img">
        <img src="/product/{{($cate_by_id->product_image)}}" alt="" />
        <div class="p-mask">
            <form action="#" method="post">
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="add" value="1" /> 
                <input type="hidden" name="w3ls1_item" value="Casual shirt" /> 
                <input type="hidden" name="amount" value="90.00" /> 
                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>Thêm giỏ hàng</button>
            </form>
        </div>

        
    </div></a>
    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
    <i class="fa fa-star yellow-star" aria-hidden="true"></i>
    <h4>Casual shirt</h4>
    <h5>{{($cate_by_id->product_price)}}</h5>
</div>
@endforeach
<div class="clearfix"></div>


@endsection