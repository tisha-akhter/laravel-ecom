@extends('frontend.master')


@section('content')
    <section>
        <section>
            <!--== Banner // Slider Area Start ==-->
            <section id="banner-area">
                <div class="ruby-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="banner-carousel" class="owl-carousel">
                                <!-- Banner Single Carousel Start -->
                                <div class="single-carousel-wrap slide-item-1">
                                    <div class="banner-caption text-center text-lg-left">
                                        <h4>Rubby Store</h4>
                                        <h2>Ring Solitaire Princess</h2>
                                        <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                        </p>
                                        <a href="{{url('/shop')}}" class="btn-long-arrow">Shop Now</a>
                                    </div>
                                </div>
                                <!-- Banner Single Carousel End -->

                                <!-- Banner Single Carousel Start -->
                                <div class="single-carousel-wrap slide-item-2">
                                    <div class="banner-caption text-center text-lg-left">
                                        <h4>New Collection 2017</h4>
                                        <h2>Beautiful Earrings</h2>
                                        <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                        </p>
                                        <a href="{{url('/shop')}}" class="btn-long-arrow">Shop Now</a>
                                    </div>
                                </div>
                                <!-- Banner Single Carousel End -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== Banner Slider End ==-->
        </section>
        <section>
            <!--== About Us Area Start ==-->
            <section id="aboutUs-area" class="pt-9">
                <div class="ruby-container">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- About Image Area Start -->
                            <div class="about-image-wrap">
                                <a href="{{url('/about/us')}}"><img src="{{ asset('frontend/assets/img/about.jpg') }}" alt="About Us"
                                        class="img-fluid" /></a>
                            </div>
                            <!-- About Image Area End -->
                        </div>

                        <div class="col-lg-6 m-auto">
                            <!-- About Text Area Start -->
                            <div class="about-content-wrap ml-0 ml-lg-5 mt-5 mt-lg-0">
                                <h2>About Us</h2>
                                <h3>WE ARE VISIONARY</h3>
                                <div class="about-text">
                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum.
                                        Mirum
                                        est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                        litterarum
                                        formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui
                                        nunc
                                        nobis videntur parum clari, fiant sollemnes in futurum.</p>

                                    <p>Typi noni habented claritatem insitamed ested usused legentis in iis qui facit eorum
                                        claritatem. Investigationes demonstraverunt lectores legere me lius quod ii loreem
                                        ipsum
                                        ius
                                        delour legunt saepius.</p>

                                    <a href="{{url('/about/us')}}" class="btn btn-long-arrow">Learn More</a>


                                    <h4 class="vertical-text">WHO WE ARE?</h4>
                                </div>
                            </div>
                            <!-- About Text Area End -->
                        </div>
                    </div>
                </div>
            </section>
            <!--== About Us Area End ==-->
        </section>
        <section>
            <!--== New Collection Area Start ==-->
            <section id="new-collection-area" class="p-9">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2>New Collection Products</h2>
                                <p>Best products on sale.</p>
                            </div>
                            <!-- Section Title End -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="new-collection-tabs">

                                <!-- Tab Menu Area Start -->
                                <ul class="nav tab-menu-wrap" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="active" id="feature-products-tab" data-toggle="tab"
                                            href="#feature-products" role="tab" aria-controls="feature-products-tab"
                                            aria-selected="true">Feature Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="new-products-tab" data-toggle="tab" href="#new-products" role="tab"
                                            aria-controls="new-products" aria-selected="false">New Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="onsale-tab" data-toggle="tab" href="#onsale" role="tab"
                                            aria-controls="onsale" aria-selected="false">Onsale</a>
                                    </li>
                                </ul>
                                <!-- Tab Menu Area End -->

                                <!-- Tab Content Area Start -->
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="feature-products" role="tabpanel"
                                        aria-labelledby="feature-products-tab">
                                        <div class="products-wrapper">
                                            <div class="products-carousel owl-carousel">
                                                <!-- Single Product Item -->
                                                <div class="single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{url('/product/details')}}"><img
                                                                src="{{asset('frontend/assets/img/product-1.jpg') }}"
                                                                alt="Products" class="img-fluid"></a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h2><a href="{{url('/product/details')}}">Rose gold ring</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <span class="price">$52.00</span>
                                                        <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to
                                                            Cart</a>
                                                        <span class="product-bedge">New</span>
                                                    </div>

                                                    <div class="product-meta">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#quickView">
                                                            <span data-toggle="tooltip" data-placement="left"
                                                                title="Quick View"><i class="fa fa-compress"></i></span>
                                                        </button>
                                                        <a href="{{url('/wishlist')}}" data-toggle="tooltip"
                                                            data-placement="left" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product Item -->

                                                <!-- Single Product Item -->
                                                <div class="single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{url('/product/details')}}"><img
                                                                src="{{ asset('frontend/assets/img/product-2.jpg') }}"
                                                                alt="Products" class="img-fluid"></a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h2><a href="{{url('/product/details')}}">Silver jewellry ring</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <span class="price">$152.00</span>
                                                        <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to
                                                            Cart</a>
                                                    </div>

                                                    <div class="product-meta">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#quickView">
                                                            <span data-toggle="tooltip" data-placement="left"
                                                                title="Quick View"><i class="fa fa-compress"></i></span>
                                                        </button>
                                                        <a href="{{url('/wishlist')}}" data-toggle="tooltip"
                                                            data-placement="left" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product Item -->

                                                <!-- Single Product Item -->
                                                <div class="single-product-item text-center">
                                                    <figure class={{url('/product/details')}}"><img
                                                                src="{{ asset('frontend/assets/img/product-3.jpg') }}"
                                                                alt="Products" class="img-fluid"></a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h2><a href="{{url('/product/details')}}">Gold jewellry ring</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <span class="price">$43.00</span>
                                                        <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to
                                                            Cart</a>
                                                    </div>

                                                    <div class="product-meta">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#quickView">
                                                            <span data-toggle="tooltip" data-placement="left"
                                                                title="Quick View"><i class="fa fa-compress"></i></span>
                                                        </button>
                                                        <a href="{{url('/wishlist')}}" data-toggle="tooltip"
                                                            data-placement="left" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product Item -->

                                                <!-- Single Product Item -->
                                                <div class="single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{url('/product/details')}}"><img
                                                                src="{{ asset('frontend/assets/img/product-4.jpg') }}"
                                                                alt="Products" class="img-fluid"></a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h2><a href="{{url('/product/details')}}">Unique gold ring</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half"></i>
                                                        </div>
                                                        <span class="price">$83.00</span>
                                                        <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to
                                                            Cart</a>
                                                        <span class="product-bedge sale">Sale</span>
                                                    </div>

                                                    <div class="product-meta">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#quickView">
                                                            <span data-toggle="tooltip" data-placement="left"
                                                                title="Quick View"><i class="fa fa-compress"></i></span>
                                                        </button>
                                                        <a href="{{url('/wishlist')}}" data-toggle="tooltip"
                                                            data-placement="left" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product Item -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="new-products" role="tabpanel"
                                        aria-labelledby="new-products-tab">
                                        <div class="products-wrapper">
                                            <div class="products-carousel owl-carousel">
                                                <!-- Single Product Item -->
                                                <div class="single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{url('/product/details')}}"><img
                                                                src="{{ asset('frontend/assets/img/new-product-1.jpg') }}"
                                                                alt="Products" class="img-fluid"></a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h2><a href="{{url('/product/details')}}">Silver Earrings</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <span class="price">$52.00</span>
                                                        <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to
                                                            Cart</a>
                                                        <span class="product-bedge">New</span>
                                                    </div>

                                                    <div class="product-meta">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#quickView">
                                                            <span data-toggle="tooltip" data-placement="left"
                                                                title="Quick View"><i class="fa fa-compress"></i></span>
                                                        </button>
                                                        <a href="{{url('/wishlist')}}" data-toggle="tooltip"
                                                            data-placement="left" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product Item -->

                                                <!-- Single Product Item -->
                                                <div class="single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{url('/product/details')}}"><img
                                                                src="{{ asset('frontend/assets/img/new-product-2.jpg') }}"
                                                                alt="Products" class="img-fluid"></a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h2><a href="{{url('/product/details')}}">Silver with Sapphire necklace</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <span class="price">$152.00</span>
                                                        <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to
                                                            Cart</a>
                                                        <span class="product-bedge">New</span>
                                                    </div>

                                                    <div class="product-meta">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#quickView">
                                                            <span data-toggle="tooltip" data-placement="left"
                                                                title="Quick View"><i class="fa fa-compress"></i></span>
                                                        </button>
                                                        <a href="{{url('/wishlist')}}" data-toggle="tooltip"
                                                            data-placement="left" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product Item -->

                                                <!-- Single Product Item -->
                                                <div class="single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{url('/product/details')}}"><img
                                                                src="{{asset('frontend/assets/img/new-product-3.jpg')}}"
                                                              alt="Products" class="img-fluid"></a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h2><a href="{{url('/product/details')}}">Rose gold Pendent Chain</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <span class="price">$43.00</span>
                                                        <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to
                                                            Cart</a>
                                                        <span class="product-bedge">New</span>
                                                    </div>

                                                    <div class="product-meta">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#quickView">
                                                            <span data-toggle="tooltip" data-placement="left"
                                                                title="Quick View"><i class="fa fa-compress"></i></span>
                                                        </button>
                                                        <a href="{{url('/wishlist')}}" data-toggle="tooltip"
                                                            data-placement="left" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product Item -->

                                                <!-- Single Product Item -->
                                                <div class="single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{url('/product/details')}}"><img
                                                                src="{{ asset('frontend/assets/img/new-product-4.jpg') }}"
                                                                alt="Products" class="img-fluid"></a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h2><a href="{{url('/product/details')}}">Unique Silver Ring</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half"></i>
                                                        </div>
                                                        <span class="price">$83.00</span>
                                                        <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to
                                                            Cart</a>
                                                        <span class="product-bedge sale">Sale</span>
                                                    </div>

                                                    <div class="product-meta">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#quickView">
                                                            <span data-toggle="tooltip" data-placement="left"
                                                                title="Quick View"><i class="fa fa-compress"></i></span>
                                                        </button>
                                                        <a href="{{url('/wishlist')}}" data-toggle="tooltip"
                                                            data-placement="left" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product Item -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="onsale" role="tabpanel"
                                        aria-labelledby="onsale-tab">
                                        <div class="products-wrapper">
                                            <div class="products-carousel owl-carousel">
                                                <!-- Single Product Item -->
                                                <div class="single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{url('/product/details')}}"><img
                                                                src="{{ asset('frontend/assets/img/sale-product-1.jpg') }}"
                                                                alt="Products" class="img-fluid"></a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h2><a href="{{url('/product/details')}}">Couple Silver Stone Rings</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <span class="price">$52.00</span>
                                                        <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to
                                                            Cart</a>
                                                        <span class="product-bedge sale">Sale</span>
                                                    </div>

                                                    <div class="product-meta">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#quickView">
                                                            <span data-toggle="tooltip" data-placement="left"
                                                                title="Quick View"><i class="fa fa-compress"></i></span>
                                                        </button>
                                                        <a href="{{url('/wishlist')}}" data-toggle="tooltip"
                                                            data-placement="left" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product Item -->

                                                <!-- Single Product Item -->
                                                <div class="single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{url('/product/details')}}"><img
                                                                src="{{asset('frontend/assets/img/sale-product-2.jpg') }}"
                                                                alt="Products" class="img-fluid"></a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h2><a href="{{url('/product/details')}}">Gold Stone Ring</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <span class="price">$152.00</span>
                                                <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to
                                                            Cart</a>
                                                        <span class="product-bedge sale">Sale</span>
                                                    </div>

                                                    <div class="product-meta">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#quickView">
                                                            <span data-toggle="tooltip" data-placement="left"
                                                                title="Quick View"><i class="fa fa-compress"></i></span>
                                                        </button>
                                                        <a href="{{url('/wishlist')}}" data-toggle="tooltip"
                                                            data-placement="left" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product Item -->

                                                <!-- Single Product Item -->
                                                <div class="single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{url('/product/details')}}"><img
                                                                src="{{ asset('frontend/assets/img/new-product-3.jpg') }}"
                                                                alt="Products" class="img-fluid"></a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h2><a href="{{url('/product/details')}}">Rose gold Pendent Chain</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <span class="price">$43.00</span>
                                                        <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to
                                                            Cart</a>
                                                        <span class="product-bedge sale">Sale</span>
                                                    </div>

                                                    <div class="product-meta">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#quickView">
                                                            <span data-toggle="tooltip" data-placement="left"
                                                                title="Quick View"><i class="fa fa-compress"></i></span>
                                                        </button>
                                                        <a href="{{'/wishlist'}}" data-toggle="tooltip"
                                                            data-placement="left" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product Item -->

                                                <!-- Single Product Item -->
                                                <div class="single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{url('/product/details')}}"><img
                                                                src="{{ asset('frontend/assets/img/new-product-4.jpg') }}"
                                                                alt="Products" class="img-fluid"></a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h2><a href="{{url('/product/details')}}">Unique Silver Stone ring</a></h2>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half"></i>
                                                        </div>
                                                        <span class="price">$83.00</span>
                                                        <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to
                                                            Cart</a>
                                                        <span class="product-bedge sale">Sale</span>
                                                    </div>

                                                    <div class="product-meta">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#quickView">
                                                            <span data-toggle="tooltip" data-placement="left"
                                                                title="Quick View"><i class="fa fa-compress"></i></span>
                                                        </button>
                                                        <a href="w{{url('/wishlist')}}" data-toggle="tooltip"
                                                            data-placement="left" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Single Product Item -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab Content Area End -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== New Collection Area End ==-->
        </section>
        <section>
            <!--== Products by Category Area Start ==-->
            <div id="product-categories-area">
                <div class="ruby-container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="large-size-cate">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-cat-item">
                                            <figure class="category-thumb">
                                                <a href="{{url('/shop')}}"><img
                                                        src="{{ asset('frontend/assets/img/women-cat.jpg') }}"
                                                        alt="Women Category" class="img-fluid" /></a>

                                                <figcaption class="category-name">
                                                    <a href="{{url('/shop')}}">Shop For Women</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="single-cat-item">
                                            <figure class="category-thumb">
                                                <a href="{{url('/shop')}}"><img
                                                        src="{{ asset('frontend/assets/img/men-cat.jpg') }}"
                                                        alt="Men Category" class="img-fluid" /></a>

                                                <figcaption class="category-name">
                                                    <a href="{{url('/shop')}}">Shop For Men</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="small-size-cate">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-cat-item">
                                            <figure class="category-thumb">
                                                <a href="{{url('/shop')}}"><img
                                                        src="{{ asset('frontend/assets/img/jewellery-cat.jpg') }}"
                                                        alt="Men Category" class="img-fluid" /></a>

                                                <figcaption class="category-name">
                                                    <a href="{{url('/shop')}}">Jewellery</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="single-cat-item">
                                            <figure class="category-thumb">
                                                <a href="{{url('/shop')}}"><img
                                                        src="{{ asset('frontend/assets/img/women-cat2.jpg') }}"
                                                        alt="Men Category" class="img-fluid" /></a>

                                                <figcaption class="category-name">
                                                    <a href="{{url('/shop')}}">Dresses</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="single-cat-item">
                                            <figure class="category-thumb">
                                                <a href="{{url('/shop')}}"><img
                                                        src="{{ asset('frontend/assets/img/watch-cat.jpg') }}"
                                                        alt="Men Category" class="img-fluid" /></a>

                                                <figcaption class="category-name">
                                                    <a href="{{url('/shop')}}">watches</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="single-cat-item">
                                            <figure class="category-thumb">
                                                <a href="{{url('/shop')}}"><img
                                                        src="{{ asset('frontend/assets/img/suit-cat.jpg') }}"
                                                        alt="Men Category" class="img-fluid" /></a>

                                                <figcaption class="category-name">
                                                    <a href="{{url('/shop')}}">Men Suit</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== Products by Category Area End ==-->
        </section>
        <section>
            <!--== New Products Area Start ==-->
            <section id="new-products-area" class="p-9">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2>New Products</h2>
                                <p>Trending stunning Unique</p>
                            </div>
                            <!-- Section Title End -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="products-wrapper">
                                <div class="new-products-carousel owl-carousel">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{url('/product/details')}}"><img
                                                    src="{{ asset('frontend/assets/img/new-product-1.jpg') }}"
                                                    alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{url('/product/details')}}">Silver Earring With Stone</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge">New</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="{{url('/wishlist')}}" data-toggle="tooltip" data-placement="left"
                                                title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{url('/product/details')}}"><img
                                                    src="{{ asset('frontend/assets/img/new-product-2.jpg') }}"
                                                    alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{url('/product/details')}}">Silver Sapphire Necklace</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$152.00</span>
                                            <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge">New</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="{{url('/wishlist')}}" data-toggle="tooltip" data-placement="left"
                                                title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{url('/product/details')}}"><img
                                                    src="{{ asset('frontend/assets/img/new-product-3.jpg') }}"
                                                    alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{url('/product/details')}}">Rose gold Pendent Chain</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="price">$43.00</span>
                                            <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge">New</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="{{url('/wishlist')}}" data-toggle="tooltip" data-placement="left"
                                                title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{url('/product/details')}}"><img
                                                    src="{{ asset('frontend/assets/img/new-product-4.jpg') }}"
                                                    alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{url('/product/details')}}">Unique Silver Ring</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                            <span class="price">$83.00</span>
                                            <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="{{url('/wishlist')}}" data-toggle="tooltip" data-placement="left"
                                                title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{url('/product/details')}}"><img
                                                    src="{{ asset('frontend/assets/img/product-4.jpg') }}"
                                                    alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{url('/product/details')}}">Gold ring</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                            <span class="price">$83.00</span>
                                            <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="{{url('/wishlist')}}" data-toggle="tooltip" data-placement="left"
                                                title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== New Products Area End ==-->

        </section>
        <section>
            <!--== Testimonial Area Start ==-->
            <section id="testimonial-area">
                <div class="ruby-container">
                    <div class="testimonial-wrapper">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2>What People Say</h2>
                                    <p>Testimonials</p>
                                </div>
                                <!-- Section Title End -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-7 m-auto text-center">
                                <div class="testimonial-content-wrap">
                                    <div id="testimonialCarousel" class="owl-carousel">
                                        <div class="single-testimonial-item">
                                            <p>These guys have been absolutely outstanding. When I needed them they came
                                                through
                                                in
                                                a big way! I know that if you buy this theme, you'll get the one thing we
                                                all
                                                look
                                                for when we buy on Themeforest, and that's real support for the craziest of
                                                requests!</p>

                                            <h3 class="client-name">Luis Manrata</h3>
                                            <span class="client-email">you@email.here</span>
                                        </div>

                                        <div class="single-testimonial-item">
                                            <p>These guys have been absolutely outstanding. When I needed them they came
                                                through
                                                in
                                                a big way! I know that if you buy this theme, you'll get the one thing we
                                                all
                                                look
                                                for when we buy on Themeforest, and that's real support for the craziest of
                                                requests!</p>

                                            <h3 class="client-name">John Dibba</h3>
                                            <span class="client-email">you@email.here</span>
                                        </div>

                                        <div class="single-testimonial-item">
                                            <p>These guys have been absolutely outstanding. When I needed them they came
                                                through
                                                in
                                                a big way! I know that if you buy this theme, you'll get the one thing we
                                                all
                                                look
                                                for when we buy on Themeforest, and that's real support for the craziest of
                                                requests!</p>

                                            <h3 class="client-name">Saima Khan</h3>
                                            <span class="client-email">you@email.here</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== Testimonial Area End ==-->
        </section>
        <section>
            <!--== Blog Area Start ==-->
            <section id="blog-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2>From Our Blog</h2>
                                <p>Share your latest posts or best articles will post here.</p>
                            </div>
                            <!-- Section Title End -->
                        </div>
                    </div>

                    <div class="blog-content-wrap">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <!-- Single Blog Item Start -->
                                <div class="single-blog-wrap">
                                    <figure class="blog-thumb">
                                        <a href="{{url('/blog')}}"><img
                                                src="{{ asset('frontend/assets/img/blog-thumb.jpg') }}" alt="blog"
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
                                            litterarum.</p>
                                        <a href="{{url('/blog')}}" class="btn-long-arrow">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog Item End -->
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <!-- Single Blog Item Start -->
                                <div class="single-blog-wrap">
                                    <figure class="blog-thumb">
                                        <a href="{{url('/blog')}}"><img
                                                src="{{ asset('frontend/assets/img/blog-thumb-2.jpg') }}" alt="blog"
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
                                            litterarum.</p>
                                        <a href="{{url('/blog')}}" class="btn-long-arrow">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog Item End -->
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <!-- Single Blog Item Start -->
                                <div class="single-blog-wrap">
                                    <figure class="blog-thumb">
                                        <a href="{{url('/blog')}}"><img
                                                src="{{ asset('frontend/assets/img/blog-thumb-3.jpg') }}" alt="blog"
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
                                            litterarum.</p>
                                        <a href="{{url('/blog')}}" class="btn-long-arrow">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog Item End -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== Blog Area End ==-->
        </section>
        <section>
            <!--== Newsletter Area Start ==-->
            <section id="newsletter-area" class="p-9">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2>Join The Newsletter</h2>
                                <p>Sign Up for Our Newsletter</p>
                            </div>
                            <!-- Section Title End -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="newsletter-form-wrap">
                                <form id="subscribe-form"
                                    action="https://d29u17ylf1ylz9.cloudfront.net/ruby-v2/ruby/assets/php/subscribe.php"
                                    method="post">
                                    <input id="subscribe" type="email" name="email"
                                        placeholder="Enter your Email  Here" required />
                                    <button type="submit" class="btn-long-arrow">Subscribe</button>
                                    <div id="result"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== Newsletter Area End ==-->
        </section>
    </section>
@endsection
