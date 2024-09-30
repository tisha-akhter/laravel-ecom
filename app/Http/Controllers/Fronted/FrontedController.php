<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontedController extends Controller
{
    public function index()
    {   
        $featureProducts = Product::where('product_type','feature')->get();
        $newProducts = Product::where('product_type','new')->get();
        $regularProducts = Product::where('product_type','regular')->get();
        $saleProduct = Product::where('product_type','sale');
        return view ('frontend.index', compact('featureProducts','newProducts','regularProducts','saleProduct'));
    }
    public function productDetails ()
    {
        return view ('frontend.product-details');
    }
    public function cart()
    {
        return view ('frontend.cart');
    }
    public function shop()
    {
        return view('frontend.shop');
    }
    public function checkout()
    {
        return view ('frontend.checkout');
    }
    public function loginRegister()
    {
        return view ('frontend.login-register');
    }
    public function myAccount()
    {
        return view('frontend.my-account');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function wishlist ()
    {
        return view ('frontend.wishlist');
    }
    public function contact ()
    {
        return view ('frontend.contact-us');
    }
    public function aboutUs ()
    {
        return view('frontend.about-us');
    }
}
