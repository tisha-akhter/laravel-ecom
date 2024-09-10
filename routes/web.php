<?php

use App\Http\Controllers\Fronted\FrontedController;
use Illuminate\Support\Facades\Route;


Route::get('/',[FrontedController::class ,'index']);
Route::get('/shop', [FrontedController::class , 'shop']);
Route::get('/product/details',[FrontedController::class ,'productDetails']);
Route::get('/cart',[FrontedController::class , 'cart']);
Route::get('/checkout',[FrontedController::class, 'checkout']);
Route::get('/login/register',[FrontedController::class,'loginRegister']);
Route::get('my/account',[FrontedController::class, 'myAccount']);
Route::get('/blog',[FrontedController::class,'blog']);
Route::get('/wishlist',[FrontedController::class ,'wishlist']);
Route::get('/contact',[FrontedController::class,'contact']);
Route::get('/about/us',[FrontedController::class,'aboutUs']);


