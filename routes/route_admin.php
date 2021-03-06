
<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Backend', 'prefix' => 'admin'], function () {
    //Trang chu
    Route::get('/', 'HomeController@index')->name('get_backend.home');

    //Category
    Route::prefix('user')->group(function () {

        Route::get('/', 'BackendUserController@index')->name('get_backend.user.index');

        Route::get('create', 'BackendUserController@create')->name('get_backend.user.create');
        Route::post('store', 'BackendUserController@store');

        Route::get('update/{id}', 'BackendUserController@edit')->name('get_backend.user.edit');
        Route::post('update/{id}', 'BackendUserController@update');

        Route::get('delete/{id}', 'BackendUserController@delete')->name('get_backend.user.delete');
    });
    Route::prefix('category')->group(function () {

        Route::get('/', 'BackendCategorylController@index')->name('get_backend.category.index');

        Route::get('create', 'BackendCategorylController@create')->name('get_backend.category.create');
        Route::post('store', 'BackendCategorylController@store')->name('get_backend.category.store');

        Route::get('update/{id}', 'BackendCategorylController@edit')->name('get_backend.category.update');
        Route::post('update/{idd}', 'BackendCategorylController@update');

        Route::get('delete/{id}', 'BackendCategorylController@delete')->name('get_backend.category.delete');
    });

    Route::prefix('keyword')->group(function () {

        Route::get('/', 'BackendKeywordController@index')->name('get_backend.keyword.index');

        Route::get('create', 'BackendKeywordController@create')->name('get_backend.keyword.create');
        Route::post('store', 'BackendKeywordController@store')->name('get_backend.keyword.store');

        Route::get('update/{id}', 'BackendKeywordController@edit')->name('get_backend.keyword.update');
        Route::post('update/{idd}', 'BackendKeywordController@update');

        Route::get('delete/{id}', 'BackendKeywordController@delete')->name('get_backend.keyword.delete');
    });
    Route::prefix('product')->group(function () {

        Route::get('/', 'BackendProductController@index')->name('get_backend.product.index');

        Route::get('create', 'BackendProductController@create')->name('get_backend.product.create');
        Route::post('store', 'BackendProductController@store')->name('get_backend.product.store');

        Route::get('update/{id}', 'BackendProductController@edit')->name('get_backend.product.update');
        Route::post('update/{idd}', 'BackendProductController@update');

        Route::get('delete/{id}', 'BackendProductController@delete')->name('get_backend.product.delete');

        Route::get('active/{id}', 'BackendProductController@active')->name('get_backend.product.active');

        Route::get('hot/{id}', 'BackendProductController@hot')->name('get_backend.product.hot');
    });
    Route::prefix('menu')->group(function () {

        Route::get('/', 'BackendMenuController@index')->name('get_backend.menu.index');

        Route::get('create', 'BackendMenuController@create')->name('get_backend.menu.create');
        Route::post('store', 'BackendMenuController@store')->name('get_backend.menu.store');

        Route::get('update/{id}', 'BackendMenuController@edit')->name('get_backend.menu.update');
        Route::post('update/{idd}', 'BackendMenuController@update');

        Route::get('delete/{id}', 'BackendMenuController@delete')->name('get_backend.menu.delete');
    });
    Route::prefix('tag')->group(function () {

        Route::get('/', 'BackendTagController@index')->name('get_backend.tag.index');

        Route::get('create', 'BackendTagController@create')->name('get_backend.tag.create');
        Route::post('store', 'BackendTagController@store')->name('get_backend.tag.store');

        Route::get('update/{id}', 'BackendTagController@edit')->name('get_backend.tag.update');
        Route::post('update/{idd}', 'BackendTagController@update');

        Route::get('delete/{id}', 'BackendTagController@delete')->name('get_backend.tag.delete');
    });
    Route::prefix('article')->group(function () {

        Route::get('/', 'BackendArticleController@index')->name('get_backend.article.index');

        Route::get('create', 'BackendArticleController@create')->name('get_backend.article.create');
        Route::post('store', 'BackendArticleController@store')->name('get_backend.article.store');;

        Route::get('update/{id}', 'BackendArticleController@edit')->name('get_backend.article.update');
        Route::post('update/{idd}', 'BackendArticleController@update');

        Route::get('delete/{id}', 'BackendArticleController@delete')->name('get_backend.article.delete');

        Route::get('active/{id}', 'BackendArticleController@active')->name('get_backend.article.active');
    });





    Route::get('setting', 'BackendSettingController@index')->name('get_backend.setting');
    Route::post('setting', 'BackendSettingController@ceaterOrUpdate')->name('get_backend.setting.store');;

    Route::get('profile', 'BackendProfileController@index')->name('get_backend.profile');
    Route::post('profile', 'BackendProfileController@ceaterOrUpdate')->name('get_backend.profile.store');;
});
