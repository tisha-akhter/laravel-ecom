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
                                <ul class="breadcrumb">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/shop') }}">Shop</a></li>
                                    <li><a href="{{ url('/product/details') }}" class="active">Product Details</a></li>
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
                <div class="ruby-container">
                    <div class="row">
                        <!-- Single Product Page Content Start -->
                        <div class="col-lg-12">
                            <div class="single-product-page-content">
                                <div class="row">
                                    <!-- Product Thumbnail Start -->
                                    <div class="col-lg-5">
                                        <div class="product-thumbnail-wrap">
                                            <div class="product-thumb-carousel owl-carousel">
                                                <div class="single-thumb-item">
                                                    <a href="{{ url('/product/details') }}"><img class="img-fluid"
                                                            src="{{ asset('frontend/assets/img/single-pro-thumb.jpg') }}"
                                                            alt="Product" /></a>
                                                </div>

                                                <div class="single-thumb-item">
                                                    <a href="{{ url('/product/details') }}"><img class="img-fluid"
                                                            src="{{ asset('frontend/assets/img/single-pro-thumb-2.jpg') }}"
                                                            alt="Product" /></a>
                                                </div>

                                                <div class="single-thumb-item">
                                                    <a href="{{ url('/product/details') }}"><img class="img-fluid"
                                                            src="{{ asset('frontend/assets/img/single-pro-thumb-3.jpg') }}"
                                                            alt="Product" /></a>
                                                </div>

                                                <div class="single-thumb-item">
                                                    <a href="{{ url('/product/details') }}"><img class="img-fluid"
                                                            src="{{ asset('frontend/assets/img/single-pro-thumb-4.jpg') }}"
                                                            alt="Product" /></a>
                                                </div>

                                                <div class="single-thumb-item">
                                                    <a href="{{ url('/product/details') }}"><img class="img-fluid"
                                                            src="{{ asset('frontend/assets/img/single-pro-thumb-5.jpg') }}"
                                                            alt="Product" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Thumbnail End -->


                                    <!-- Product Details Start -->
                                    <div class="col-lg-7 mt-5 mt-lg-0">
                                        <div class="product-details">
                                            <h2><a href="{{ url('/product/details') }}">Silver Stone Earrings</a></h2>

                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>

                                            <span class="price">$52.00</span>

                                            <div class="product-info-stock-sku">
                                                <span class="product-stock-status">In Stock</span>
                                                <span class="product-sku-status ml-5"><strong>Silver</strong> 21k</span>
                                            </div>

                                            <p class="products-desc">Ideal for cold-weathered training worked lorem ipsum
                                                outdoors,
                                                the Chaz Hoodie promises superior warmth with every wear. Thick material
                                                blocks out
                                                the wind as ribbed cuffs and bottom band seal in body heat Lorem ipsum dolor
                                                sit
                                                amet, consectetur adipisicing elit. Enim, reprehenderit.</p>
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

                                                    <li class="color-item orange">
                                                        <div class="color-hvr">
                                                            <span class="color-fill"></span>
                                                            <span class="color-name">Orange</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="product-quantity d-flex align-items-center">
                                                <div class="quantity-field">
                                                    <label for="qty">Qty</label>
                                                    <input type="number" id="qty" min="1" max="100"
                                                        value="1" />
                                                </div>

                                                <a href="{{url('/cart')}}" class="btn btn-add-to-cart">Add to Cart</a>
                                            </div>

                                            <div class="product-btn-group">
                                                <a href="{{url('/wishlist')}}" class="btn btn-add-to-cart btn-whislist">+
                                                    Add to
                                                    Wishlist</a>
                                                <a href="{{url('checkout')}}"
                                                    class="btn btn-add-to-cart btn-whislist">Checkout now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Details End -->

                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Product Full Description Start -->
                                        <div class="product-full-info-reviews">
                                            <!-- Single Product tab Menu -->
                                            <nav class="nav" id="nav-tab">
                                                <a class="active" id="description-tab" data-toggle="tab"
                                                    href="#description">Description</a>
                                                <a id="reviews-tab" data-toggle="tab" href="#reviews">Reviews</a>
                                            </nav>
                                            <!-- Single Product tab Menu -->

                                            <!-- Single Product tab Content -->
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="description">
                                                    <p>Stay comfortable and stay in the race no matter what the weather's up
                                                        to. The
                                                        Bruno Compete Hoodie's water-repellent exterior shields you from the
                                                        elements, while advanced fabric technology inside wicks moisture to
                                                        keep you
                                                        dry.Stay comfortable and stay in the race no matter what the
                                                        weather's up
                                                        to. The Bruno Compete Hoodie's water-repellent exterior shields you
                                                        from the
                                                        elements, while advanced fabric technology inside wicks moisture to
                                                        keep you
                                                        dry.Stay comfortable and stay in the race no matter what the
                                                        weather's up
                                                        to. The Bruno Compete Hoodie's water-repellent exterior shields you
                                                        from the
                                                        elements, while advanced fabric technology inside wicks moisture to
                                                        keep you
                                                        dry.</p>

                                                    <ul>
                                                        <li>Adipisicing elitEnim, laborum.</li>
                                                        <li>Lorem ipsum dolor sit</li>
                                                        <li>Dolorem molestiae quod voluptatem! Sint.</li>
                                                        <li>Iure obcaecati odio pariatur quae saepe!</li>
                                                    </ul>
                                                </div>

                                                <div class="tab-pane fade" id="reviews">
                                                    <div class="row">
                                                        <div class="col-lg-7">
                                                            <div class="product-ratting-wrap">
                                                                <div class="pro-avg-ratting">
                                                                    <h4>4.5 <span>(Overall)</span></h4>
                                                                    <span>Based on 9 Comments</span>
                                                                </div>
                                                                <div class="ratting-list">
                                                                    <div class="sin-list float-left">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <span>(5)</span>
                                                                    </div>
                                                                    <div class="sin-list float-left">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <span>(3)</span>
                                                                    </div>
                                                                    <div class="sin-list float-left">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <span>(1)</span>
                                                                    </div>
                                                                    <div class="sin-list float-left">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <span>(0)</span>
                                                                    </div>
                                                                    <div class="sin-list float-left">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <span>(0)</span>
                                                                    </div>
                                                                </div>
                                                                <div class="rattings-wrapper">

                                                                    <div class="sin-rattings">
                                                                        <div class="ratting-author">
                                                                            <h3>Cristopher Lee</h3>
                                                                            <div class="ratting-star">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <span>(5)</span>
                                                                            </div>
                                                                        </div>
                                                                        <p>enim ipsam voluptatem quia voluptas sit
                                                                            aspernatur aut
                                                                            odit aut fugit, sed quia res eos qui ratione
                                                                            voluptatem
                                                                            sequi Neque porro quisquam est, qui dolorem
                                                                            ipsum quia
                                                                            dolor sit amet, consectetur, adipisci veli</p>
                                                                    </div>

                                                                    <div class="sin-rattings">
                                                                        <div class="ratting-author">
                                                                            <h3>Nirob Khan</h3>
                                                                            <div class="ratting-star">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <span>(5)</span>
                                                                            </div>
                                                                        </div>
                                                                        <p>enim ipsam voluptatem quia voluptas sit
                                                                            aspernatur aut
                                                                            odit aut fugit, sed quia res eos qui ratione
                                                                            voluptatem
                                                                            sequi Neque porro quisquam est, qui dolorem
                                                                            ipsum quia
                                                                            dolor sit amet, consectetur, adipisci veli</p>
                                                                    </div>

                                                                    <div class="sin-rattings">
                                                                        <div class="ratting-author">
                                                                            <h3>MD.ZENAUL ISLAM</h3>
                                                                            <div class="ratting-star">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <span>(5)</span>
                                                                            </div>
                                                                        </div>
                                                                        <p>enim ipsam voluptatem quia voluptas sit
                                                                            aspernatur aut
                                                                            odit aut fugit, sed quia res eos qui ratione
                                                                            voluptatem
                                                                            sequi Neque porro quisquam est, qui dolorem
                                                                            ipsum quia
                                                                            dolor sit amet, consectetur, adipisci veli</p>
                                                                    </div>

                                                                </div>
                                                                <div class="ratting-form-wrapper fix">
                                                                    <h3>Add your Comments</h3>
                                                                    <form action="#" method="post">
                                                                        <div class="ratting-form row">
                                                                            <div class="col-12 mb-4">
                                                                                <h5>Rating:</h5>
                                                                                <div class="ratting-star fix">
                                                                                    <i class="fa fa-star-o"></i>
                                                                                    <i class="fa fa-star-o"></i>
                                                                                    <i class="fa fa-star-o"></i>
                                                                                    <i class="fa fa-star-o"></i>
                                                                                    <i class="fa fa-star-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-12 mb-4">
                                                                                <label for="name">Name:</label>
                                                                                <input id="name" placeholder="Name"
                                                                                    type="text">
                                                                            </div>
                                                                            <div class="col-md-6 col-12 mb-4">
                                                                                <label for="email">Email:</label>
                                                                                <input id="email" placeholder="Email"
                                                                                    type="text">
                                                                            </div>
                                                                            <div class="col-12 mb-4">
                                                                                <label for="your-review">Your
                                                                                    Review:</label>
                                                                                <textarea name="review" id="your-review" placeholder="Write a review"></textarea>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <input value="add review" type="submit">
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product tab Content -->
                                        </div>
                                        <!-- Product Full Description End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product Page Content End -->
                    </div>
                </div>
            </div>
            <!--== Page Content Wrapper End ==-->
        </section>
    </section>
@endsection
