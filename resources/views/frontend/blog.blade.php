@extends('frontend.master')

@section('content')
    <section>

        <section>
            <!--== Page Title Area Start ==-->
            <div id="page-title-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="page-title-content">
                                <h1>Blog</h1>
                                <ul class="breadcrumb">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('/blog')}}" class="active">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== Page Title Area End ==-->
        </section>

        <section>
            <!--== Page Content Wrapper Start ==-->
            <div id="page-content-wrapper" class="p-9">
                <div class="container">
                    <div class="row">
                        <!-- Blog Page Content Start -->
                        <div class="col-lg-8">
                            <div class="blog-content-wrap">
                                <!-- Single Blog Item Start -->
                                <div class="single-blog-wrap">
                                    <figure class="blog-thumb">
                                        <a href="{{url('/blog')}}"><img src="{{asset('frontend/assets/img/blog-thumb.jpg')}}" alt="blog"
                                                class="img-fluid" /></a>
                                        <figcaption class="blog-icon">
                                            <a href="{{url('/blog')}}"><i class="fa fa-file-image-o"></i></a>
                                        </figcaption>
                                    </figure>

                                    <div class="blog-details">
                                        <h3><a href="{{url('/blog')}}">Mirum est notare quam</a></h3>
                                        <span class="post-date">20/June/2018</span>
                                        <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                            anteposuerit
                                            litterarum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                                            consequuntur
                                            debitis, deserunt distinctio doloremque explicabo fuga maiores necessitatibus
                                            quisquam
                                            quos repudiandae suscipit tempore totam voluptatibus.</p>
                                        <a href="{{url('/blog')}}" class="btn-long-arrow">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog Item End -->

                                <!-- Single Blog Item Start -->
                                <div class="single-blog-wrap">
                                    <figure class="blog-thumb">
                                        <a href="{{url('/blog')}}"><img src="{{asset('frontend/assets/img/blog-thumb-2.jpg')}}" alt="blog"
                                                class="img-fluid" /></a>
                                        <figcaption class="blog-icon">
                                            <a href="{{url('/blog')}}"><i class="fa fa-file-image-o"></i></a>
                                        </figcaption>
                                    </figure>

                                    <div class="blog-details">
                                        <h3><a href="{{url('/blog')}}">Mirum est notare quam</a></h3>
                                        <span class="post-date">20/June/2018</span>
                                        <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                            anteposuerit
                                            litterarum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                                            consequuntur
                                            debitis, deserunt distinctio doloremque explicabo fuga maiores necessitatibus
                                            quisquam
                                            quos repudiandae suscipit tempore totam voluptatibus.</p>
                                        <a href="{{url('/blog')}}" class="btn-long-arrow">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog Item End -->

                                <!-- Single Blog Item Start -->
                                <div class="single-blog-wrap">
                                    <figure class="blog-thumb">
                                        <a href="{{url('/blog')}}"><img src="{{asset('frontend/assets/img/blog-thumb-3.jpg')}}" alt="blog"
                                                class="img-fluid" /></a>
                                        <figcaption class="blog-icon">
                                            <a href="{{url('/blog')}}"><i class="fa fa-file-image-o"></i></a>
                                        </figcaption>
                                    </figure>

                                    <div class="blog-details">
                                        <h3><a href="{{url('/blog')}}">Mirum est notare quam</a></h3>
                                        <span class="post-date">20/June/2018</span>
                                        <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                            anteposuerit
                                            litterarum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                                            consequuntur
                                            debitis, deserunt distinctio doloremque explicabo fuga maiores necessitatibus
                                            quisquam
                                            quos repudiandae suscipit tempore totam voluptatibus.</p>
                                        <a href="{{url('/blog')}}" class="btn-long-arrow">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog Item End -->
                            </div>

                            <!--  Pagination Area Start -->
                            <div class="page-pagination mt-5 pt-5">
                                <ul class="pagination justify-content-center">
                                    <li><a href="#" aria-label="Previous">«</a></li>
                                    <li><a class="current" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">....</a></li>
                                    <li><a href="#">88</a></li>
                                    <li><a href="#" aria-label="Next">»</a></li>
                                </ul>
                            </div>
                            <!--  Pagination Area End -->
                        </div>
                        <!-- Blog Page Content End -->

                        <!-- Sidebar Area Start -->
                        <div class="col-lg-4 mt-5 mt-lg-0">
                            <div id="sidebar-area-wrap">
                                <!-- Single Sidebar Item Start -->
                                <div class="single-sidebar-wrap">
                                    <h2 class="sidebar-title">Search</h2>
                                    <div class="sidebar-body">
                                        <div class="sidebar-search">
                                            <form action="#">
                                                <input type="search" placeholder="type keyword" />
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Sidebar Item End -->

                                <!-- Single Sidebar Item Start -->
                                <div class="single-sidebar-wrap">
                                    <h2 class="sidebar-title">Recent Posts</h2>
                                    <div class="sidebar-body">
                                        <div class="small-product-list recent-post">
                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="{{url('/product/details')}}"><img class="img-fluid" src="{{asset('frontend/assets/img/product-2.jpg')}}"
                                                            alt="Products" /></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2><a href="{{url('/blog')}}">Lorem ipsum is dolor sit amet,
                                                            consectetur
                                                            adipisicing elit.</a></h2>
                                                    <span class="price">20, Aug 2018</span>
                                                    <a href="{{url('/cart')}}" class="btn-add-to-cart">Read More <i
                                                            class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>

                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="{{url('/product/details')}}"><img class="img-fluid" src="{{asset('frontend/assets/img/product-3.jpg')}}"
                                                            alt="Products" /></a>
                                                </figure>
                                                <div class="product-details">
                                            <h2><a href="{{url('/product/details')}}">Set of Sprite Yoga Lorem ipsum dolor sit
                                                            Straps</a></h2>
                                                    <span class="price">20, Aug 2018</span>
                                                    <a href="{{url('/cart')}}" class="btn-add-to-cart">Read More <i
                                                            class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>

                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="{{url('/product/details')}}"><img class="img-fluid"
                                                            src="{{asset('frontend/assets/img/product-4.jpg')}}" alt="Products" /></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2><a href="{{url('/blog')}}">Lorem ipsum is dolor sit amet,
                                                            consectetur
                                                            adipisicing elit.</a></h2>
                                                    <span class="price">20, Aug 2018</span>
                                                    <a href="{{url('/cart')}}" class="btn-add-to-cart">Read More <i
                                                            class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Sidebar Item End -->

                                <!-- Single Sidebar Item Start -->
                                <div class="single-sidebar-wrap">
                                    <h2 class="sidebar-title">Categories</h2>
                                    <div class="sidebar-body">
                                        <ul class="sidebar-list">
                                        <li><a href="{{url('/shop')}}">Gold &amp; Stones</a></li>
                                        <li><a href="{{url('/shop')}}">Diamonds </a></li>
                                        <li><a href="{{url('/shop')}}">Silver</a></li>
                                        <li><a href="{{url('/shop')}}">Silver &amp; stones</a></li>
                                        <li><a href="{{url('/shop')}}">Rose Gold</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Single Sidebar Item End -->

                                <!-- Single Sidebar Item Start -->
                                <div class="single-sidebar-wrap">
                                    <h2 class="sidebar-title">Popular Tags</h2>
                                    <div class="sidebar-body">
                                        <ul class="tags">
                                        <li><a href="{{url('/shop')}}">Gold</a></li>
                                        <li><a href="{{url('/shop')}}">Silver</a></li>
                                        <li><a href="{{url('/shop')}}">Diamonds</a></li>
                                        <li><a href="{{url('/shop')}}">Ruby</a></li>
                                        <li><a href="{{url('/shop')}}">Rose Gold</a></li>
                                        <li><a href="{{url('/shop')}}">Radium Gold</a></li>
                                        <li><a href="{{url('/shop')}}">Rings</a></li>
                                        <li><a href="{{url('/shop')}}">Necklaces</a></li>
                                        <li><a href="{{url('/shop')}}">Watches</a></li>
                                        <li><a href="{{url('/shop')}}">Earrings</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Single Sidebar Item End -->
                            </div>
                        </div>
                        <!-- Sidebar Area End -->
                    </div>
                </div>
            </div>
            <!--== Page Content Wrapper End ==-->
        </section>
    </section>
@endsection
