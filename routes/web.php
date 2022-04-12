<?php

use Illuminate\Support\Facades\Route;
use Whoops\Run;

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

Route::group(['namespace'=>'Main'], function(){
    Route::get('/', 'IndexController')->name('main.index');
    Route::get('/shop', 'ShopController')->name('main.shop');
    Route::get('/search', 'SearchController')->name('main.search');
    Route::get('/filter', 'FilterController')->name('main.filter');
    Route::get('/product/{good}', 'ShowController')->name('main.show');
});
Route::group(['namespace' => 'Admin', 'prefix' => 'admin','middleware' => ['auth', 'admin']], function(){
    Route::group(['namespace'=>'Main'], function(){
        Route::get('/', 'IndexController')->name('admin.main.index');
        
    });
        Route::group(['namespace'=>'Category', 'prefix' => 'categories'], function(){
            Route::get('/', 'IndexController')->name('admin.category.index');
            Route::get('/create', 'CreateController')->name('admin.category.create');
            Route::post('/', 'StoreController')->name('admin.category.store');
            Route::get('/{category}', 'ShowController')->name('admin.category.show');
            Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
            Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
            Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');
        });
        Route::group(['namespace'=>'Good', 'prefix' => 'goods'], function(){
            Route::get('/', 'IndexController')->name('admin.good.index');
            Route::get('/create', 'CreateController')->name('admin.good.create');
            Route::post('/', 'StoreController')->name('admin.good.store');
            Route::get('/{good}', 'ShowController')->name('admin.good.show');
            Route::get('/{good}/edit', 'EditController')->name('admin.good.edit');
            Route::patch('/{good}', 'UpdateController')->name('admin.good.update');
            Route::delete('/{good}', 'DeleteController')->name('admin.good.delete');
        });
        Route::group(['namespace'=>'User', 'prefix' => 'users'], function(){
            Route::get('/', 'IndexController')->name('admin.user.index');
            Route::get('/create', 'CreateController')->name('admin.user.create');
            Route::post('/', 'StoreController')->name('admin.user.store');
            Route::get('/{user}', 'ShowController')->name('admin.user.show');
            Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
            Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
            Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
        });
        Route::group(['namespace'=>'Brand', 'prefix' => 'brands'], function(){
            Route::get('/', 'IndexController')->name('admin.brand.index');
            Route::get('/create', 'CreateController')->name('admin.brand.create');
            Route::post('/', 'StoreController')->name('admin.brand.store');
            Route::get('/{brand}', 'ShowController')->name('admin.brand.show');
            Route::get('/{brand}/edit', 'EditController')->name('admin.brand.edit');
            Route::patch('/{brand}', 'UpdateController')->name('admin.brand.update');
            Route::delete('/{brand}', 'DeleteController')->name('admin.brand.delete');
        });
});

Auth::routes(['verify' => true]);