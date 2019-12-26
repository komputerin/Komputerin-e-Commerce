<?php

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


////// get Attribute ////////////
Route::get('/get-product-attr','IndexController@getAttrs');

/// Apply Coupon Code
Route::post('/apply-coupon','CouponController@applycoupon');


/// Setting Area
Route::get('/settings', 'AdminController@settings');
Route::get('/check-pwd','AdminController@chkPassword');
Route::post('/update-pwd','AdminController@updatAdminPwd');
/// Category Area
Route::resource('/category','CategoryController');
Route::get('delete-category/{id}','CategoryController@destroy');
Route::get('/check_category_name','CategoryController@checkCateName');
/// Products Area
Route::resource('/product','ProductsController');
Route::get('delete-product/{id}','ProductsController@destroy');
Route::get('delete-image/{id}','ProductsController@deleteImage');
/// Product Attribute
Route::resource('/product_attr','ProductAtrrController');
Route::get('delete-attribute/{id}','ProductAtrrController@deleteAttr');
/// Product Images Gallery
Route::resource('/image-gallery','ImagesController');
Route::get('delete-imageGallery/{id}','ImagesController@destroy');
/// ///////// Coupons Area //////////
Route::resource('/coupon','CouponController');
Route::get('delete-coupon/{id}','CouponController@destroy');