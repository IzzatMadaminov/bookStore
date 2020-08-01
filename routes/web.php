<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::view('home','index')->name('home');
Route::view('login-register', 'login-register')->name('login-register');
Route::view('cart', 'cart')->name('cart');
Route::view('faq', 'faq')->name('faq');
Route::view('compare', 'compare')->name('compare');
Route::view('wishlist', 'wishlist')->name('wishlist');
Route::view('checkout', 'checkout')->name('checkout');
Route::view('contact', 'contact')->name('contact');
Route::view('contact-2', 'contact-2')->name('contact-2');
Route::view('my-account', 'my-account')->name('my-account');
Route::view('shop-grid-left-sidebar', 'shop-grid-left-sidebar')->name('shop-grid-left-sidebar');
Route::view('shop-grid-right-sidebar', 'shop-grid-right-sidebar')->name('shop-grid-right-sidebar');
Route::view('shop-grid', 'shop-grid')->name('shop-grid');
Route::view('shop-list-right-sidebar', 'shop-list-right-sidebar')->name('shop-list-right-sidebar');
Route::view('shop-list-left-sidebar', 'shop-list-left-sidebar')->name('shop-list-left-sidebar');
Route::view('shop-list', 'shop-list')->name('shop-list');
Route::view('product-details-group', 'product-details-group')->name('product-details-group');
Route::view('product-details-affiliate', 'product-details-affiliate')->name('product-details-affiliate');
Route::view('product-details', 'product-details')->name('product-details');
Route::view('product-details-variable', 'product-details-variable')->name('product-details-variable');
Route::view('product-details-right-gallery', 'product-details-right-gallery')->name('product-details-right-gallery');
Route::view('product-details-left-gallery', 'product-details-left-gallery')->name('product-details-left-gallery');
Route::view('product-details-left-thumbnail', 'product-details-left-thumbnail')->name('product-details-left-thumbnail');
Route::view('product-details-right-thumbnail', 'product-details-right-thumbnail')->name('product-details-right-thumbnail');

Route::namespace('Admin')->middleware('auth')->name('admin.')->prefix('admin')->group(function(){
    Route::get('/', function () {
        return redirect()->route('layouts.app');
    });
});

Auth::routes([
    'register' => true
]);

// Route::get('/home', 'HomeController@index')->name('home');
