<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontedController extends Controller
{
    public function index()
    {
        return view ('frontend.index');
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
