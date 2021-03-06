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
//Fronted

Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'HomeController@index')->name('get.home');

    //danh muc san pham
    Route::get('danh-muc/{slug}', 'CategoryController@index')->name('get.category');
    Route::get('san-pham', 'ProductController@index')->name('get.product');
    Route::get('keyword/{slug}', 'KeywordController@index')->name('get.keyword');


    //chi tiet san pham
    Route::get('sanpham/{slug}', 'ProductDetailController@index')->name('get.product_detail');

    //chitietbaiviet
    Route::get('bai-viet/{slug}', 'ArticleDetailController@index')->name('get.article_detail');


    //danh muc bai viet
    Route::get('menu/{slug}', 'MenuController@index')->name('get.menu');
    Route::get('bai-viet', 'ArticleController@index')->name('get.blog');
    Route::get('tag/{slug}', 'TagController@index')->name('get.tag');

    //cap nhat gio hang hoa 
    Route::get('addCart/{id}', 'ProductController@addCart')->name('get.addCart');
});

//Backend

include 'route_admin.php';
