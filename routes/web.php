<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NvabarController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\topBannerController;
use App\Http\Controllers\BottomBannerController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\FrontController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class,'index']);
// Route::get('/',[FrontController::class,'index']);
Route::get('admin',[AdminController::class,'index']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');

// Route for middleware
Route::group(['middleware'=>'admin_auth'],function(){
    Route::get('admin/dashboard',[AdminController::class,'dashboard']);
    Route::get('admin/category',[CategoryController::class,'index']);
    Route::get('admin/category/manage_category',[CategoryController::class,'manage_category']);
    Route::get('admin/category/manage_category/{id}',[CategoryController::class,'manage_category']);
    Route::get('admin/category/status/{type}/{id}',[CategoryController::class,'status']);
    Route::post('admin/category/manage_category_process',[CategoryController::class,'manage_category_process'])->name('category.manage_category_process');
    Route::get('admin/category/delete/{id}',[CategoryController::class,'delete']);

    // navbar
    Route::get('admin/navbar',[NvabarController::class,'index']);
    Route::get('admin/navbar/manage_navbar',[NvabarController::class,'manage_navbar']);
    Route::get('admin/navbar/manage_navbar/{id}',[NvabarController::class,'manage_navbar']);
    Route::get('admin/navbar/status/{type}/{id}',[NvabarController::class,'status']);
    Route::post('admin/navbar/manage_navbar_process',[NvabarController::class,'manage_navbar_process'])->name('navbar.manage_navbar_process');
    Route::get('admin/navbar/delete/{id}',[NvabarController::class,'delete']);
    // Route for Product sizes
    Route::get('admin/size',[SizeController::class,'index']);
    Route::get('admin/size/manage_size',[SizeController::class,'manage_size']);
    Route::get('admin/size/manage_size/{id}',[SizeController::class,'manage_size']);
    Route::get('admin/size/status/{type}/{id}',[SizeController::class,'status']);
    Route::post('admin/size/manage_size_process',[SizeController::class,'manage_size_process'])->name('size.manage_size_process');
    Route::get('admin/size/delete/{id}',[SizeController::class,'delete']);

    // Route for Color
    Route::get('admin/color',[ColorController::class,'index']);
    Route::get('admin/color/manage_color',[ColorController::class,'manage_color']);
    Route::get('admin/color/manage_color/{id}',[ColorController::class,'manage_color']);
    Route::get('admin/color/status/{type}/{id}',[ColorController::class,'status']);
    Route::post('admin/color/manage_color_process',[ColorController::class,'manage_color_process'])->name('color.manage_color_process');
    Route::get('admin/color/delete/{id}',[ColorController::class,'delete']);

    // Route for Product
    Route::get('admin/product',[ProductController::class,'index']);
    Route::get('admin/product/manage_product',[ProductController::class,'manage_product']);
    Route::get('admin/product/manage_product/{id}',[ProductController::class,'manage_product']);
    Route::get('admin/product/status/{type}/{id}',[ProductController::class,'status']);
    Route::post('admin/product/manage_product_process',[ProductController::class,'manage_product_process'])->name('product.manage_product_process');
    Route::get('admin/product/delete/{id}',[ProductController::class,'delete']);
    Route::get('admin/product/product_attr_delete/{paid}/{pid}',[ProductController::class,'product_attr_delete']);

    // Route for banner
    Route::get('admin/banner',[BannerController::class,'index']);
    Route::get('admin/banner/manage_banner',[BannerController::class,'manage_banner']);
    Route::get('admin/banner/manage_banner/{id}',[BannerController::class,'manage_banner']);
    Route::get('admin/banner/status/{type}/{id}',[BannerController::class,'status']);
    Route::post('admin/banner/manage_banner_process',[BannerController::class,'manage_banner_process'])->name('banner.manage_banner_process');
    Route::get('admin/banner/delete/{id}',[BannerController::class,'delete']);

    // Route for top_banner
    Route::get('admin/top_banner',[TopBannerController::class,'index']);
    Route::get('admin/banner/manage_top_banner',[TopBannerController::class,'manage_top_banner']);
    Route::get('admin/banner/manage_top_banner/{id}',[TopBannerController::class,'manage_top_banner']);
    Route::get('admin/top_banner/status/{type}/{id}',[TopBannerController::class,'status']);
    Route::post('admin/banner/manage_top_banner_process',[TopBannerController::class,'manage_top_banner_process'])->name('banner.manage_top_banner_process');
    Route::get('admin/top_banner/delete/{id}',[TopBannerController::class,'delete']);

    // Route for bottom_banner
    Route::get('admin/bottom_banner',[BottomBannerController::class,'index']);
    Route::get('admin/banner/manage_bottom_banner',[BottomBannerController::class,'manage_bottom_banner']);
    Route::get('admin/banner/manage_bottom_banner/{id}',[BottomBannerController::class,'manage_bottom_banner']);
    Route::get('admin/bottom_banner/status/{type}/{id}',[BottomBannerController::class,'status']);
    Route::post('admin/banner/manage_bottom_banner_process',[BottomBannerController::class,'manage_bottom_banner_process'])->name('banner.manage_bottom_banner_process');
    Route::get('admin/bottom_banner/delete/{id}',[BottomBannerController::class,'delete']);
});
