@extends('layouts.app_blog')
@section('title','ChiTietBaiViet')
@section('content')
<div class="section section-padding">
    <div class="container">
        <div class="row learts-mb-n50">

            <div class="col-xl-9 col-lg-8 col-12 order-lg-2 learts-mb-50">
                <div class="single-blog">
                    <div class="image">
                        <a href="blog-details-right-sidebar.html"><img src="{{asset("public/uploads/article/$article->a_avatar")}}" alt="{{$article->a_name}}"  width="100px" height="auto"></a>
                    </div>
                    <div class="content">
                        <ul class="category">
                            {{$article->name}}
                        </ul>
                        <h2 class="title">{{$article->a_name}}</h2>
                        <ul class="meta">
                            <li><i class="fal fa-user"></i> By <a href="#">Owen Christ</a></li>
                            <li><i class="far fa-calendar"></i><a href="#">{{$article->created_at}}</a></li>
                            <li><i class="fal fa-comment"></i><a href="#">4 Comments</a></li>
                            <li><i class="far fa-eye"></i> 201 views</li>
                        </ul>
                        <div class="desc">
                            <p>{{$article->a_description}}</p>
                            <blockquote>
                                <p>{{$article->a_name}}</p>
                            </blockquote>
                            <p>{{$article->a_content}}</p>
                        </div>
                    </div>
                    <div class="blog-footer row no-gutters justify-content-between align-items-center">
                        <div class="col-auto">
                            <ul class="tags">
                                <i class="icon fas fa-tags"></i>
                                <li><a href="#">design</a></li>
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">learts</a></li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <div class="post-share">
                                Share this post
                                <span class="toggle"><i class="fas fa-share-alt"></i></span>
                                <ul class="social-list">
                                    <li class="hintT-top" data-hint="Facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="hintT-top" data-hint="Twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="hintT-top" data-hint="Pinterest"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li class="hintT-top" data-hint="Google Plus"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li class="hintT-top" data-hint="Email"><a href="#"><i class="fal fa-envelope-open"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-author">
                    <div class="thumbnail">
                        <img src="../frontend/images/comment/comment-1.jpg" alt="">
                        <div class="social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <a href="#" class="name">Owen Christ</a>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laboruLorem ipsum dolor sit amet datat non proident</p>
                    </div>
                </div>
                <div class="related-blog">
                    <div class="block-title pb-0 border-bottom-0">
                        <h2 class="title">Related Blog</h2>
                    </div>
                    <div class="row learts-mb-n40">
                        <div class="col-md-6 col-12 learts-mb-40">
                            <div class="blog">
                                <div class="image">
                                    <a href="blog-details-right-sidebar.html"><img src="../frontend/images/blog/s370/blog-2.jpg" alt="Blog Image"></a>
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li><i class="far fa-calendar"></i><a href="#">January 22, 2020</a></li>
                                        <li><i class="far fa-eye"></i> 158 views</li>
                                    </ul>
                                    <h5 class="title mb-0"><a href="blog-details-right-sidebar.html">Tile Tray with Brass Handles</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 learts-mb-40">
                            <div class="blog">
                                <div class="image">
                                    <a href="blog-details-right-sidebar.html"><img src="../frontend/images/blog/s370/blog-3.jpg" alt="Blog Image"></a>
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li><i class="far fa-calendar"></i><a href="#">January 22, 2020</a></li>
                                        <li><i class="far fa-eye"></i> 119 views</li>
                                    </ul>
                                    <h5 class="title mb-0"><a href="blog-details-right-sidebar.html">Dining Table Chairs Makeover</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Comments-wrapper">
                    <div class="block-title pb-0 border-bottom-0">
                        <h2 class="title">Comments <span class="text-muted">(4)</span></h2>
                    </div>
                    <ul class="comment-list">
                        <li>
                            <div class="comment">
                                <div class="thumbnail">
                                    <img src="../frontend/images/comment/comment-2.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="name">Scott James</h4>
                                    <p>Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
                                    <div class="actions">
                                        <span class="date">April 22, 2020 at 2:10 am</span>
                                        <a class="reply-link" href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <ul class="child-comment">
                                <li>
                                    <div class="comment">
                                        <div class="thumbnail">
                                            <img src="../frontend/images/comment/comment-3.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <h4 class="name">Edna Watson</h4>
                                            <p>Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
                                            <div class="actions">
                                                <span class="date">April 22, 2020 at 2:10 am</span>
                                                <a class="reply-link" href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="comment">
                                <div class="thumbnail">
                                    <img src="../frontend/images/comment/comment-4.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="name">Gerhard</h4>
                                    <p>Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
                                    <div class="actions">
                                        <span class="date">April 22, 2020 at 2:10 am</span>
                                        <a class="reply-link" href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="comment">
                                <div class="thumbnail">
                                    <img src="../frontend/images/comment/comment-1.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="name">Owen Christ</h4>
                                    <p>Thank you very much!</p>
                                    <div class="actions">
                                        <span class="date">April 22, 2020 at 2:10 am</span>
                                        <a class="reply-link" href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="block-title pb-0 border-bottom-0">
                        <h2 class="title">Leave your thought here</h2>
                    </div>
                    <div class="comment-form">
                        <form action="#">
                            <div class="row learts-mb-n20">
                                <div class="col-md-6 col-12 learts-mb-20">
                                    <input type="text" placeholder="Your name (*)">
                                </div>
                                <div class="col-md-6 col-12 learts-mb-20">
                                    <input type="text" placeholder="Mail (*)">
                                </div>
                                <div class="col-12 learts-mb-20">
                                    <textarea placeholder="Message"></textarea>
                                </div>
                                <div class="col-12 text-center learts-mb-20 learts-mt-20">
                                    <button class="btn btn-dark btn-outline-hover-dark">Submit</button>
                                </div>
                            </div>
                        </form>
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
                        <img src="../frontend/images/banner/widget-banner.jpg" alt="">
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