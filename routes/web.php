<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CategoryPageController;
use App\Http\Controllers\smasif\src\ShurjopayController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\SslCommerzPaymentController;

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


Route::get('/',[ProductController::class,'index']);

Route::get('/searchajax',[ProductController::class,'search_auto_complete'])->name('searchproductajax');

Route::get('guest_checkout', [UserController::class, 'guest_checkout']);
Route::post('guest_order', [OrderController::class, 'guest_order']);
Route::get('order_success', [OrderController::class, 'order_success'])->name('order_success');

Route::get('/check', function () {
    return view('user.master');
});

Route::get('/about_us', function () {
    return view('frontend.new.about_us');
});

Route::get('/contact', function () {
    return view('frontend.new.contact');
});

Route::view('/return_policy','frontend.new.return_policy');
Route::view('/privacy_policy','frontend.new.privacy_policy');
Route::view('/terms&condition','frontend.new.terms&condition');

Route::post('/search',[ProductController::class,'search']);


// Admin Panel

Route::group(['middleware' => ['auth','isAdmin']], function () {

        Route::get('/dashboard', function () {
        return view('backend.home');
    });

    Route::get('/registered-user',[AdminController::class,'index']);
    Route::get('/vendor-user',[AdminController::class,'vendor_user']);
    Route::get('/vendor-apply',[AdminController::class,'vendor_apply']);

    Route::get('roll-edit/{id}',[AdminController::class,'edit']);
    Route::get('roll-delete/{id}',[AdminController::class,'delete']);
    Route::post('roll-update/{id}',[AdminController::class,'update']);


    //vendor managing
    Route::get('/vendor',[AdminController::class,'vendor']);
    Route::get('/commission',[AdminController::class,'commission']);

    Route::get('commission-edit/{id}',[AdminController::class,'commission_edit']);
    Route::post('commission-update/{id}',[AdminController::class,'commission_update']);


    // add categories
    Route::get('show_brand',[GroupController::class,'brand']);
    Route::get('add-brand',[GroupController::class,'add_brand']);
    Route::post('update_brand/{id}',[GroupController::class,'update_brand']);
    Route::post('adding_brand',[GroupController::class,'adding_brand']);
    Route::get('edit_brand/{id}',[GroupController::class,'edit_brand']);
    Route::get('delete_brand/{id}',[GroupController::class,'delete_brand']);


    Route::get('show_category',[CategoryController::class,'show_category']);
    Route::get('add-category',[CategoryController::class,'add_category']);
    Route::post('update_category/{id}',[GroupController::class,'update_category']);
    Route::post('adding_category',[GroupController::class,'adding_category']);
    Route::get('edit_category/{id}',[GroupController::class,'edit_category']);
    Route::get('delete_category/{id}',[GroupController::class,'delete_category']);


    // Route for Item
    Route::get('item',[GroupController::class,'item']);
    Route::get('due_item',[GroupController::class,'due_item']);

    Route::get('add-item',[GroupController::class,'add_item']);
    Route::post('adding_item',[GroupController::class,'adding_item']);
    Route::get('edit_item/{id}',[GroupController::class,'edit_item']);
    Route::post('update_item/{id}',[GroupController::class,'update_item']);
    Route::get('delete_item/{id}',[GroupController::class,'delete_item']);


    // Route for Front Banner
    Route::get('front_banner',[BannerController::class,'front_banner']);
    Route::get('banner',[BannerController::class,'banner']);
    Route::post('adding_banner',[BannerController::class,'adding_banner']);
    Route::get('edit_banner/{id}',[BannerController::class,'edit_banner']);
    Route::post('update_banner/{id}',[BannerController::class,'update_banner']);
    Route::get('delete_banner/{id}',[BannerController::class,'delete_banner']);



    // Route for Order
    Route::get('admin_order',[AdminController::class,'admin_order']);
    Route::get('edit_order/{id}',[AdminController::class,'edit_order']);
    Route::get('delete_order/{id}',[AdminController::class,'delete_order']);
    Route::post('order_action/{id}',[AdminController::class,'order_action']);

    //invoice
    Route::get('admin_invoice/{id}',[OrderController::class,'admin_invoice']);

    Route::get('admin_order_new',[AdminController::class,'admin_order_new']);
    Route::get('admin_order_processing',[AdminController::class,'admin_order_processing']);
    Route::get('admin_order_shipped',[AdminController::class,'admin_order_shipped']);
    Route::get('admin_order_return',[AdminController::class,'admin_order_return']);



    Route::get('order_items',[AdminController::class,'order_item']);
    Route::post('col_status/{id}',[AdminController::class,'col_status']);

    Route::get('collected_items',[AdminController::class,'collected_item']);


    // Route for Coupon
    Route::get('show_coupon',[CouponController::class,'show_coupon']);
    Route::get('add_coupon',[CouponController::class,'add_coupon']);
    Route::post('adding_coupon',[CouponController::class,'adding_coupon']);
    Route::get('delete_coupon/{id}',[CouponController::class,'delete_coupon']);



    // Route for Coupon
    Route::get('show_wallet',[AdminController::class,'show_wallet']);
    Route::post('update-wallet/{id}',[AdminController::class,'update_wallet']);

    Route::get('flash_sale',[AdminController::class,'flash_sale']);
    Route::post('flash_sell/{id}',[AdminController::class,'time']);
    Route::post('date',[AdminController::class,'date']);


});

// Vendor Panel


Route::post('vendor-apply-info/{id}',[VendorController::class,'vendor_apply_info']);

Route::group(['middleware' => ['auth','isVendor']], function () {

        Route::get('/vendor-dashboard', function () {
        return view('vendor.home');
    });

    Route::get('/vendor-payment',[VendorController::class,'vendor_payment']);


    // Route for Item
    Route::get('vendor_item',[VendorController::class,'item']);
    Route::get('vendor_add-item',[VendorController::class,'add_item']);
    Route::post('vendor_adding_item',[vendorController::class,'adding_item']);
    Route::get('vendor_edit_item/{id}',[vendorController::class,'edit_item']);
    Route::post('vendor_update_item/{id}',[vendorController::class,'update_item']);
    Route::get('vendor_delete_item/{id}',[vendorController::class,'delete_item']);

    // Route for Order
    Route::get('vendor_order',[VendorController::class,'vendor_order']);


});


// Auth
Auth::routes();


Route::group(['middleware' => ['auth','isUser']], function () {


    //Route::get('/profile', [UserController::class, 'profile']);
    //Route::get('/update-user-profile', [UserController::class, 'updateUserProfile']);
    //Route::post('/edit_profile', [UserController::class, 'edit_profile']);

    //User Profile Controlling
    Route::view('/profile','user.dashboard');

    Route::get('/wallet', [UserController::class, 'wallet']);

    Route::get('/address', [UserController::class, 'address']);
    Route::post('edit_address', [UserController::class, 'edit_address']);

    Route::get('/account_details', [UserController::class, 'account_details']);
    Route::post('edit_account_details', [UserController::class, 'edit_account_details']);

    Route::get('checkout', [UserController::class, 'checkout']);

    Route::post('order', [OrderController::class, 'user_order']);

    Route::get('order_show', [OrderController::class, 'user_order_show']);



    Route::view('/user_dashboard','user.dashboard');

    Route::post('change-password', [UserController::class, 'store']);

    Route::post('review', [UserController::class, 'review']);


});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [ProductController::class,'index'])->name('home');

// Showing Sub Category Item
Route::get('show_sub/{id}',[GroupController::class,'show_sub']);
Route::get('show_sub/items/{id}',[GroupController::class,'show_items']);
Route::get('product/{slug}',[GroupController::class,'product_details']);

Route::get('/productcheck/{id}',[GroupController::class,'product_check']);


Route::post('add-to-cart',[CartController::class, 'add_to_cart']);
Route::get('/newcart',[CartController::class, 'index']);
Route::get('/load-cart-data',[CartController::class,'cartloadbyajax']);
Route::post('update-to-cart', [CartController::class,'updatetocart']);
Route::delete('delete-from-cart', [CartController::class,'deletefromcart']);
Route::get('clear-cart', [CartController::class,'clearcart']);


//vendor

Route::get('/vendor_login',[VendorController::class,'login']);
Route::get('/vendor_registration',[VendorController::class,'registration']);
Route::get('/vendor-apply-dashboard',[VendorController::class,'vendor_apply']);


Route::get('category/{slug}',[CategoryPageController::class,'product_category']);
Route::get('subcategory/{slug}',[CategoryPageController::class,'product_subcategory']);
Route::get('brand/{slug}',[CategoryPageController::class,'product_brand']);

Route::get('shop/{id}',[CategoryPageController::class,'shop']);

//mail

Route::get('/mail',[MailController::class,'send_mail']);

Route::get('/response',[checkController::class,'response'])->name('shurjopay.response');









//mail

Route::get('/mail',[MailController::class,'send_mail']);

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);


Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


