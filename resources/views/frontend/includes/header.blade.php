    <!--== Header Area Start ==-->
    <header id="header-area">
        <div class="ruby-container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-3 col-lg-1 col-xl-2 m-auto">
                    <a href="{{url('/')}}" class="logo-area">
                        <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="Logo" class="img-fluid" />
                    </a>
                </div>
                <!-- Logo Area End -->

                <!-- Navigation Area Start -->
                <div class="col-3 col-lg-9 col-xl-8 m-auto">
                    <div class="main-menu-wrap">
                        <nav id="mainmenu">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a>
                                </li>
                                <li><a href="{{url('/shop')}}">Shop</a>
                                </li>
                                <li class="dropdown-show"><a href="{{"/"}}">Pages</a>
                                    <ul class="dropdown-nav">
                                        <li><a href="{{url('/cart')}}">Shopping Cart</a></li>
                                        <li><a href="{{url('/checkout')}}">Checkout</a></li>
                                        <li><a href="{{url('/wishlist')}}">Wishlist</a></li>
                                        <li><a href="{{url('/login/register')}}">Login & Register</a></li>
                                        <li><a href="{{url('my/account')}}">My Account</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-show"><a href="{{url('/shop')}}">Men</a>
                                    <ul class="mega-menu-wrap dropdown-nav">
                                        <li class="mega-menu-item"><a href="{{url('/shop')}}" class="mega-item-title">Men's
                                                Jewellery</a>
                                            <ul>
                                                <li><a href="{{url('/shop')}}">Silver Jewellery</a></li>
                                                <li><a href="{{url('/shop')}}">Gold Jewellery</a></li>
                                                <li><a href="{{url('/shop')}}">Stone Jewellery</a></li>
                                                <li><a href="{{url('/shop')}}">Svaroski Stone Jewellery</a></li>
                                                <li><a href="{{url('/shop')}}">Mixed Jewellery</a></li>
                                            </ul>
                                        </li>


                                    </ul>
                                </li>
                                <li class="dropdown-show"><a href="{{url('/shop')}}">Women</a>
                                    <ul class="mega-menu-wrap dropdown-nav">
                                        <li class="mega-menu-item"><a href="{{url('/shop')}}" class="mega-item-title">Women's
                                                Jewellery</a>
                                            <ul>
                                                <li><a href="{{url('/shop')}}">Casual</a></li>
                                                <li><a href="{{url('/shop')}}">Wedding</a></li>
                                                <li><a href="{{url('/shop')}}">Party</a></li>
                                                <li><a href="{{url('/shop')}}">Beach</a></li>
                                                <li><a href="{{url('/shop')}}">Unique</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-show"><a href="{{url('/blog')}}">Blog</a>
                                    <ul class="dropdown-nav">
                                        <li><a href="{{url('/blog')}}">Blog</a></li>
                                        <li><a href="{{url('/product/details')}}">Product Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('contact')}}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Navigation Area End -->

                <!-- Header Right Meta Start -->
                <div class="col-6 col-lg-2 m-auto">
                    <div class="header-right-meta text-right">
                        <ul>
                            <li><a href="{{url('/')}}" class="modal-active"><i class="fa fa-search"></i></a></li>
                            <li class="settings"><a href="{{url('/')}}"><i class="fa fa-cog"></i></a>
                                <div class="site-settings d-block d-sm-flex">
                                    <dl class="currency">
                                        <dt>Currency</dt>
                                        <dd class="current"><a href="{{url('/')}}">USD</a></dd>
                                        <dd><a href="{{url('/')}}">AUD</a></dd>
                                        <dd><a href="{{url('/')}}">CAD</a></dd>
                                        <dd><a href="{{url('/')}}">BDT</a></dd>
                                    </dl>

                                    <dl class="my-account">
                                        <dt>My Account</dt>
                                        <dd><a href="{{url('my/account')}}">Dashboard</a></dd>
                                        <dd><a href="{{url('my/account')}}">Profile</a></dd>
                                        <dd><a href="{{url('/login/register')}}">Sign</a></dd>
                                    </dl>

                                    <dl class="language">
                                        <dt>Language</dt>
                                        <dd class="current"><a href="{{url('/')}}">English (US)</a></dd>
                                        <dd><a href="{{url('/')}}">English (UK)</a></dd>
                                        <dd><a href="{{url('/')}}">Chinees</a></dd>
                                        <dd><a href="{{url('/')}}">Bengali</a></dd>
                                        <dd><a href="{{url('/')}}">Hindi</a></dd>
                                        <dd><a href="{{url('/')}}">Japanees</a></dd>
                                    </dl>
                                </div>
                            </li>
                            <li class="shop-cart"><a href="{{url('/')}}"><i class="fa fa-shopping-bag"></i> <span
                                        class="count">3</span></a>
                                <div class="mini-cart">
                                    <div class="mini-cart-body">
                                        <div class="single-cart-item d-flex">
                                            <figure class="product-thumb">
                                                <a href="{{url('/')}}"><img class="img-fluid"
                                                        src="{{ asset('frontend/assets/img/product-1.jpg') }}"
                                                        alt="Products" /></a>
                                            </figure>

                                            <div class="product-details">
                                                <h2><a href="{{url('/cart')}}">Sprite Yoga Companion</a></h2>
                                                <div class="cal d-flex align-items-center">
                                                    <span class="quantity">3</span>
                                                    <span class="multiplication">X</span>
                                                    <span class="price">$77.00</span>
                                                </div>
                                            </div>
                                            <a href="{{url('/')}}" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                        </div>
                                        <div class="single-cart-item d-flex">
                                            <figure class="product-thumb">
                                                <a href="{{url('/')}}"><img class="img-fluid"
                                                        src="{{ asset('frontend/assets/img/product-2.jpg') }}"
                                                        alt="Products" /></a>
                                            </figure>
                                            <div class="product-details">
                                                <h2><a href="{{url('/cart')}}">Yoga Companion Kit</a></h2>
                                                <div class="cal d-flex align-items-center">
                                                    <span class="quantity">2</span>
                                                    <span class="multiplication">X</span>
                                                    <span class="price">$6.00</span>
                                                </div>
                                            </div>
                                            <a href="{{url('/')}}" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                        </div>
                                        <div class="single-cart-item d-flex">
                                            <figure class="product-thumb">
                                                <a href="{{url('/')}}"><img class="img-fluid"
                                                        src="{{ asset('frontend/assets/img/product-3.jpg') }}"
                                                        alt="Products" /></a>
                                            </figure>
                                            <div class="product-details">
                                                <h2><a href="{{url('/cart')}}">Sprite Yoga Companion Kit</a></h2>
                                                <div class="cal d-flex align-items-center">
                                                    <span class="quantity">1</span>
                                                    <span class="multiplication">X</span>
                                                    <span class="price">$116.00</span>
                                                </div>
                                            </div>
                                            <a href="{{url('/')}}" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                        </div>
                                    </div>
                                    <div class="mini-cart-footer">
                                        <a href="{{url('/checkout')}}" class="btn-add-to-cart">Checkout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Header Right Meta End -->
            </div>
        </div>
    </header>
    <!--== Header Area End ==-->