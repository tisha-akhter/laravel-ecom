@extends('frontend.master')

@section('content')

<!--== Page Title Area Start ==-->
<div id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-title-content">
                    <h1>Shop</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/shop')}}" class="active">Shop</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Page Title Area End ==-->

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper" class="p-9">
    <div class="container">
        <div class="row">
            <!-- Sidebar Area Start -->
            <div class="col-lg-3 mt-5 mt-lg-0 order-last order-lg-first">
                <div id="sidebar-area-wrap">
                    <!-- Single Sidebar Item Start -->
                    <div class="single-sidebar-wrap">
                        <h2 class="sidebar-title">Shop By</h2>
                        <div class="sidebar-body">
                            <div class="shopping-option">
                                <h3>Shopping Options</h3>
                                <div class="shopping-option-item">
                                    <h4>Color</h4>
                                    <ul class="color-option-select d-flex">
                                        <li class="color-item black">
                                            <div class="color-hvr">
                                                <span class="color-fill"></span>
                                                <span class="color-name">Black</span>
                                            </div>
                                        </li>

                                        <li class="color-item green">
                                            <div class="color-hvr">
                                                <span class="color-fill"></span>
                                                <span class="color-name">green</span>
                                            </div>
                                        </li>

                                        <li class="color-item red">
                                            <div class="color-hvr">
                                                <span class="color-fill"></span>
                                                <span class="color-name">red</span>
                                            </div>
                                        </li>

                                        <li class="color-item yellow">
                                            <div class="color-hvr">
                                                <span class="color-fill"></span>
                                                <span class="color-name">yellow</span>
                                            </div>
                                        </li>

                                        <li class="color-item orange">
                                            <div class="color-hvr">
                                                <span class="color-fill"></span>
                                                <span class="color-name">Orange</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="shopping-option-item">
                                    <h4>MANUFACTURER</h4>
                                    <ul class="sidebar-list">
                                        <li><a href="#">Dolce (19)</a></li>
                                        <li><a href="#">Gabbana (4)</a></li>
                                        <li><a href="#">Nike (3)</a></li>
                                        <li><a href="#">Nokia (5)</a></li>
                                        <li><a href="#">Xiaomi (7)</a></li>
                                        <li><a href="#">Other (33)</a></li>
                                    </ul>
                                </div>

                                <div class="shopping-option-item">
                                    <h4>Price</h4>
                                    <ul class="sidebar-list">
                                        <li><a href="#">$0.00 - $9.99 (2)</a></li>
                                        <li><a href="#">$10.00 - $19.99 (3)</a></li>
                                        <li><a href="#">$20.00 - $29.99 (5)</a></li>
                                        <li><a href="#">$30.00 - $39.99 (2)</a></li>
                                        <li><a href="#">$40.00 - $49.99 (10)</a></li>
                                        <li><a href="#">$50.00 - $59.99 (12)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Sidebar Item End -->

                    <!-- Single Sidebar Item Start -->
                    <div class="single-sidebar-wrap">
                        <h2 class="sidebar-title">My Wish List</h2>
                        <div class="sidebar-body">
                            <div class="small-product-list">
                                <div class="single-product-item">
                                    <figure class="product-thumb">
                                        <a href="#"><img class="mr-2 img-fluid" src="{{asset('frontend/assets/img/product-2.jpg')}}"
                                                         alt="Products"/></a>
                                    </figure>
                                    <div class="product-details">
                                        <h2><a href="{{url('/product/details')}}">Silver Pearl Ring</a></h2>
                                        <span class="price">$6.00</span>

                                    </div>
                                </div>

                                <div class="single-product-item">
                                    <figure class="product-thumb">
                                        <a href="{{url('/product/details')}}"><img class="mr-2 img-fluid"
                                                                           src="{{asset('frontend/assets/img/product-3.jpg')}}"
                                                                           alt="Products"/></a>
                                    </figure>
                                    <div class="product-details">
                                        <h2><a href="{{url('/product/details')}}">Gold Ring With Stones</a></h2>
                                        <span class="price">$88.00</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Sidebar Item End -->

                    <!-- Single Sidebar Item Start -->
                    <div class="single-sidebar-wrap">
                        <h2 class="sidebar-title">MOSTVIEWED PRODUCTS</h2>
                        <div class="sidebar-body">
                            <div class="small-product-list">
                                <div class="single-product-item">
                                    <figure class="product-thumb">
                                        <a href="{{url('/product/details')}}"><img class="mr-2 img-fluid"
                                                                           src="{{asset('frontend/assets/img/product-1.jpg')}}"
                                                                           alt="Products"/></a>
                                    </figure>
                                    <div class="product-details">
                                        <h2><a href="{{url('/product/details')}}">Rose Gold With Stone</a></h2>
                                        <span class="price">$50.00</span>
                                    </div>
                                </div>

                                <div class="single-product-item">
                                    <figure class="product-thumb">
                                        <a href="{{url('/product/details')}}"><img class="mr-2 img-fluid"
                                                                           src="{{asset('frontend/assets/img/product-2.jpg')}}"
                                                                           alt="Products"/></a>
                                    </figure>
                                    <div class="product-details">
                                        <h2><a href="{{url('/product/details')}}">Silver Pearl Ring</a></h2>
                                        <span class="price">$6.00</span>
                                    </div>
                                </div>

                                <div class="single-product-item">
                                    <figure class="product-thumb">
                                        <a href="{{url('/product/details')}}"><img class="mr-2 img-fluid"
                                                                           src="{{asset('frontend/assets/img/product-3.jpg')}}"
                                                                           alt="Products"/></a>
                                    </figure>
                                    <div class="product-details">
                                        <h2><a href="{{url('/product/details')}}">Gold Ring With Stones</a></h2>
                                        <span class="price">$88.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Sidebar Item End -->
                </div>
            </div>
            <!-- Sidebar Area End -->

            <!-- Shop Page Content Start -->
            <div class="col-lg-9">
                <div class="shop-page-content-wrap">
                    <div class="products-settings-option d-block d-md-flex">
                        <div class="product-cong-left d-flex align-items-center">
                            <ul class="product-view d-flex align-items-center">
                                <li class="current column-gird"><i class="fa fa-bars fa-rotate-90"></i></li>
                                <li class="box-gird"><i class="fa fa-th"></i></li>
                                <li class="list"><i class="fa fa-list-ul"></i></li>
                            </ul>
                            <span class="show-items">Items 1 - 9 of 17</span>
                        </div>

                        <div class="product-sort_by d-flex align-items-center mt-3 mt-md-0">
                            <label for="sort">Sort By:</label>
                            <select name="sort" id="sort">
                                <option value="Position">Relevance</option>
                                <option value="Name Ascen">Name, A to Z</option>
                                <option value="Name Decen">Name, Z to A</option>
                                <option value="Price Ascen">Price low to heigh</option>
                                <option value="Price Decen">Price heigh to low</option>
                            </select>
                        </div>
                    </div>

                    <div class="shop-page-products-wrap">
                        <div class="products-wrapper">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{url('/product/details')}}"><img src="{{asset('frontend/assets/img/new-product-1.jpg')}}"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{url('/product/details')}}">Silver Stone Earrings</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="{{url('/wishlist')}}" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="{{url('/wishlist')}}" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                        </div>
                                        <span class="product-bedge">New</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{url('/product/details')}}"><img src="{{asset('frontend/assets/img/new-product-2.jpg')}}"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{url('/product/details')}}">Silver Sapphire Necklace</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="{{url('/wishlist')}}" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="{{url('/wishlist')}}" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                        </div>
                                        <span class="product-bedge sale">Sale</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{url('/product/details')}}"><img src="{{asset('frontend/assets/img/new-product-3.jpg')}}"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{url('/product/details')}}">Rose Gold Infinity Chain</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="{{url('/wishlist')}}" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="{{url('/wishlist')}}" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                        </div>
                                        <span class="product-bedge">New</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{url('/product/details')}}"><img src="{{asset('frontend/assets/img/new-product-4.jpg')}}"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{url('/product/details')}}">Unique Silver Stone Ring</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="{{url('/wishlist')}}" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="{{url('/wislist')}}" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                        </div>
                                        <span class="product-bedge">New</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{url('/product/details')}}"><img src="{{asset('frontend/assets/img/product-1.jpg')}}"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{url('/product/details')}}">Rose Gold Stone Ring</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="{{url('/wishlist')}}" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="{{url('/wishlist')}}" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                        </div>
                                        <span class="product-bedge sale">Sale</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{url('/product/details')}}"><img src="{{asset('frontend/assets/img/single-pro-thumb-2.jpg')}}"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{url('/product/details')}}">Unique Black stone Necklace</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="{{url('/wishlist')}}" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="{{url('/wishlist')}}" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                        </div>
                                        <span class="product-bedge sale">Sale</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{url('/product/details')}}"><img src="{{asset('frontend/assets/img/product-3.jpg')}}"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{url('/product/details')}}">Gold With Stone Ring</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="{{url('/wishlist')}}" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="{{url('/wishlist')}}" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                        </div>
                                        <span class="product-bedge">New</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{url('/product/details')}}"><img src="{{asset('frontend/assets/img/product-4.jpg')}}"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{url('/product/details')}}">Pure Gold Ring</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="{{url('/wishlist')}}" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="{{url('/wishlist')}}" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                        </div>
                                        <span class="product-bedge sale">Sale</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{url('/product/details')}}"><img src="{{asset('frontend/assets/img/sale-product-1.jpg')}}"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{url('/product/details')}}">Silver Stone Couple Ring</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                Thick material blocks out the wind as ribbed cuffs and bottom band seal
                                                in body heat.</p>
                                            <a href="{{url('/cart')}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="{{url('/wishlist')}}" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="{{url('/wishlist')}}" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                        </div>
                                        <span class="product-bedge">New</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="products-settings-option d-block d-md-flex">
                        <nav class="page-pagination">
                            <ul class="pagination">
                                <li><a href="#" aria-label="Previous">&laquo;</a></li>
                                <li><a class="current" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#" aria-label="Next">&raquo;</a></li>
                            </ul>
                        </nav>

                        <div class="product-per-page d-flex align-items-center mt-3 mt-md-0">
                            <label for="show-per-page">Show Per Page</label>
                            <select name="sort" id="show-per-page">
                                <option value="9">9</option>
                                <option value="15">15</option>
                                <option value="21">21</option>
                                <option value="6">27</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shop Page Content End -->
        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->
    
@endsection