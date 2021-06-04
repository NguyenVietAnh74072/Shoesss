@extends('layouts.app_blog')
@section('title','Bai Viet')
@section('content')
<!-- Portfolio Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row learts-mb-n50">

            <div class="col-xl-9 col-lg-8 col-12 order-lg-2 learts-mb-50">
                <div class="row learts-mb-n40">
                    @foreach($articles as $article)
                    @if($article->a_active ==1)
                    <div class="col-md-6 col-12 learts-mb-40">
                        <div class="blog">
                            <div class="image">
                                <a href="{{route('get.article_detail',$article->a_slug)}}"><img src="{{asset("public/uploads/article/$article->a_avatar")}}" alt="Blog Image"></a>
                            </div>
                            <div class="content">
                                <ul class="meta">
                                    <li><i class="far fa-calendar"></i><a href="#">{{$article->created_at}}</a></li>
                                    <li><i class="far fa-eye"></i> 201 views</li>
                                    <li> <i class="fa fa-ellipsis-h" aria-hidden="true"></i> {{$article->menu->mn_name}} </li>
                                </ul>
                                <h5 class="title"><a href="blog-details-right-sidebar.html">{{$article->a_name}}</a></h5>
                                <div class="desc">
                                    <p>{{$article->a_description}}</p>
                                </div>
                                <a href="blog-details-right-sidebar.html" class="link">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endif

                   @endforeach

                </div>

                <div class="row learts-mt-50">
                    <div class="col text-center">
                        <a href="#" class="btn btn-dark btn-outline-hover-dark">Load More</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-12 order-lg-1 learts-mb-10">
                <!-- Search Start -->
                <div class="single-widget learts-mb-40">
                    <div class="widget-search">
                        <form action="#">
                            <input type="text" placeholder="Search products....">
                            <button><i class="fal fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Search End -->

                <!-- Blog Post Widget Start -->
                <div class="single-widget learts-mb-40">
                    <h3 class="widget-title product-filter-widget-title">Bài viết mới nhất</h3>
                    @foreach ($getAriticlesLatest ??[] as $item)
                    <ul class="widget-blogs">
                        <li class="widget-blog">
                            <div class="thumbnail">
                                <a href="{{route('get.article_detail',$item->a_slug)}}"><img src="{{asset("public/uploads/article/$item->a_avatar")}}" alt="Widget Blog Post"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="{{route('get.article_detail',$item->a_slug)}}l">{{$item->a_name}}</a></h6>
                                <span class="date">{{$item->created_at}}</span>
                            </div>
                        </li>
            
                    </ul>
                    @endforeach
                </div>
                <!-- Blog Post Widget End -->

                <!-- Categories Start -->
                <div class="single-widget learts-mb-40">
                    <div class="widget-banner">
                        <img src="/frontend/images/banner/widget-banner.jpg" alt="">
                    </div>
                </div>
                <!-- Categories End -->

                <!-- Categories Start -->
                <div class="single-widget learts-mb-40">
                    <h3 class="widget-title product-filter-widget-title">Menus</h3>
                    <ul class="widget-list">
                        @foreach($menus ??[] as $item)
                      
                        
                        <li><a href="{{route('get.menu',$item->mn_slug)}}">{{$item->mn_name}}</a> <span class="count">{{$item->articles_count}}</span></li>
                        
                        @endforeach
                    </ul>
                </div>
                <!-- Categories End -->

                <!-- Tags Start -->
                <div class="single-widget learts-mb-40">
                    <h3 class="widget-title product-filter-widget-title">Bai viet Tag</h3>
                    <div class="widget-tags">
                        @foreach($tags ??[] as $item)
                        <a href="{{route('get.tag',$item->t_slug)}}">{{$item->t_name}}</a>
                        
                        @endforeach
                    </div>
                </div>
                <!-- Tags End -->
            </div>

        </div>
    </div>

</div>

@endsection