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
                                <h1>Shopping Cart</h1>
                                <ul class="breadcrumb">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('/shop')}}">Shop</a></li>
                                    <li><a href="{{url('/cart')}}" class="active">Cart</a></li>
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
                    <!-- Cart Page Content Start -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Cart Table Area -->
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Thumbnail</th>
                                            <th class="pro-title">Product</th>
                                            <th class="pro-price">Price</th>
                                            <th class="pro-quantity">Quantity</th>
                                            <th class="pro-subtotal">Total</th>
                                            <th class="pro-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                        src="{{asset('frontend/assets/img/product-1.jpg')}}" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="{{url('/product/details')}}">Rose Gold Ring</a></td>
                                            <td class="pro-price"><span>$295.00</span></td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty"><input type="text" value="1"></div>
                                            </td>
                                            <td class="pro-subtotal"><span>$295.00</span></td>
                                            <td class="pro-remove"><a href="{{url('/product/details')}}"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                        src="{{asset('frontend/assets/img/product-2.jpg')}}" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="{{url('/product/details')}}">Silver with Pearl Ring</a></td>
                                            <td class="pro-price"><span>$275.00</span></td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty"><input type="text" value="2"></div>
                                            </td>
                                            <td class="pro-subtotal"><span>$550.00</span></td>
                                            <td class="pro-remove"><a href="{{url('/product/details')}}"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                        src="{{asset('frontend/assets/img/product-3.jpg')}}" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="{{url('/product/details')}}">Gold With Stone Ring</a></td>
                                            <td class="pro-price"><span>$295.00</span></td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty"><input type="text" value="1"></div>
                                            </td>
                                            <td class="pro-subtotal"><span>$295.00</span></td>
                                            <td class="pro-remove"><a href="{{url('/product/details')}}"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                        src="{{asset('frontend/assets/img/product-4.jpg')}}" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="{{url('/product/details')}}">Pure Gold Unique Ring </a></td>
                                            <td class="pro-price"><span>$110.00</span></td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty"><input type="text" value="1"></div>
                                            </td>
                                            <td class="pro-subtotal"><span>$110.00</span></td>
                                            <td class="pro-remove"><a href="{{url('/product/details')}}"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Cart Update Option -->
                            <div class="cart-update-option d-block d-lg-flex">
                                <div class="apply-coupon-wrapper">
                                    <form action="#" method="post" class=" d-block d-md-flex">
                                        <input type="text" placeholder="Enter Your Coupon Code" />
                                        <button class="btn-add-to-cart">Apply Coupon</button>
                                    </form>
                                </div>
                                <div class="cart-update">
                                    <a href="{{url('/shop')}}" class="btn-add-to-cart">Update Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 ml-auto">
                            <!-- Cart Calculation Area -->
                            <div class="cart-calculator-wrapper">
                                <h3>Cart Totals</h3>
                                <div class="cart-calculate-items">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Sub Total</td>
                                                <td>$230</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td>$70</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td class="total-amount">$300</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <a href="{{url('/checkout')}}" class="btn-add-to-cart">Proceed To Checkout</a>
                            </div>
                        </div>
                    </div>
                    <!-- Cart Page Content End -->
                </div>
            </div>
            <!--== Page Content Wrapper End ==-->
        </section>

    </section>
@endsection
