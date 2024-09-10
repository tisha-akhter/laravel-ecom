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
                                <h1>Wishlist</h1>
                                <ul class="breadcrumb">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('/shop')}}">Shop</a></li>
                                    <li><a href="{{url('/wishlist')}}" class="active">Wishlist</a></li>
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
                    <!-- Wishlist Page Content Start -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Wishlist Table Area -->
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Thumbnail</th>
                                            <th class="pro-title">Product</th>
                                            <th class="pro-price">Price</th>
                                            <th class="pro-quantity">Stock Status</th>
                                            <th class="pro-subtotal">Add to Cart</th>
                                            <th class="pro-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                        src="{{asset('frontend/assets/img/product-1.jpg')}}" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="{{url('/wishlist')}}">Rose Gold Ring</a></td>
                                            <td class="pro-price"><span>$295.00</span></td>
                                            <td class="pro-quantity"><span class="text-success">In Stock</span></td>
                                            <td class="pro-subtotal"><a href="{{url('/cart')}}" class="btn-add-to-cart">Add to
                                                    Cart</a>
                                            </td>
                                            <td class="pro-remove"><a href="{{url('/wishlist')}}"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="{{url('/wishlist')}}"><img class="img-fluid"
                                                        src="{{asset('frontend/assets/img/product-2.jpg')}}" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="{{url('/wishlist')}}">Silver With Pearl Ring</a></td>
                                            <td class="pro-price"><span>$275.00</span></td>
                                            <td class="pro-quantity"><span class="text-success">In Stock</span></td>
                                            <td class="pro-subtotal"><a href="{{url('/cart')}}" class="btn-add-to-cart">Add to
                                                    Cart</a>
                                            </td>
                                            <td class="pro-remove"><a href="{{url('/wishlist')}}"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="{{url('/wishlist')}}"><img class="img-fluid"
                                                        src="{{asset('frontend/assets/img/product-3.jpg')}}" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="{{url('/wishlist')}}">Gold With Stone ring</a></td>
                                            <td class="pro-price"><span>$295.00</span></td>
                                            <td class="pro-quantity"><span class="text-danger">Stock Out</span></td>
                                            <td class="pro-subtotal"><a href="{{url('/cart')}}"
                                                    class="btn-add-to-cart disabled">Add to
                                                    Cart</a></td>
                                            <td class="pro-remove"><a href="{{url('/wishlist')}}"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="{{url('/wishlist')}}"><img class="img-fluid"
                                                        src="{{asset('frontend/assets/img/product-4.jpg')}}" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="{{url('/wishlist')}}">Pure Gold Ring</a></td>
                                            <td class="pro-price"><span>$110.00</span></td>
                                            <td class="pro-quantity"><span class="text-success">In Stock</span></td>
                                            <td class="pro-subtotal"><a href="{{url('/cart')}}" class="btn-add-to-cart">Add to
                                                    Cart</a>
                                            </td>
                                            <td class="pro-remove"><a href="{{url('/wishlist')}}"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Wishlist Page Content End -->
                </div>
            </div>
            <!--== Page Content Wrapper End ==-->
        </section>
    </section>
@endsection
