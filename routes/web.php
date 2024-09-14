<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\CatagoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Fronted\FrontedController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Frontend
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



Auth::routes();

// Admin login url
Route::get('/admin/login', [AuthController::class, 'adminLogin'])->name('adminLogin');

// Admin Panel
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('adminDashboard');

//Products
Route::get('/admin/create-product', [ProductController::class, 'createProduct'])->name('create.product');

//Catagory 
Route::get('/admin/create-catagory', [CatagoryController::class, 'createCatagory'])->name('create.catagory');
Route::post('/admin/store-catagory', [CatagoryController::class, 'storeCatagory'])->name('store.catagory');
Route::get('/admin/list-catagory', [CatagoryController::class, 'listCatagory'])->name('list.catagory');
Route::get('/admin/delete-catagory/{id}', [CatagoryController::class, 'deleteCatagory'])->name('delete.catagory');
Route::get('/admin/edit-catagory/{id}', [CatagoryController::class, 'editCatagory'])->name('edit.catagory');
Route::post('/admin/update-catagory/{id}', [CatagoryController::class, 'updateCatagory'])->name('update.catagory');