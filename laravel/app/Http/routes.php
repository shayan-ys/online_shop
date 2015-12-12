<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'IndexController@index');
Route::get('session', function(){
    return Session::get('user_type');
});

// Authentication routes...
Route::get('user/login', 'Auth\AuthController@getLogin');
Route::post('user/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('user/logout', function(){
    Session::put('user_type', null);
    response('Cookie cleared')->withCookie(cookie('basket',null));
    return redirect('/auth/logout');
});

// Registration routes...
Route::get('user/register', 'Auth\AuthController@getRegister');
Route::post('user/register', 'Auth\AuthController@postRegister');

Route::resource('customers', 'CustomerController');
Route::resource('product', 'ProductController');
Route::resource('search', 'SearchController');
Route::get('addBasket', 'BasketController@add');
Route::get('getBasket', 'BasketController@get');
Route::get('resetBasket', 'BasketController@reset');
Route::get('removeBasket', 'BasketController@remove');
Route::resource('admin', 'AdminController',
    ['only' => ['index','show','product']]);

Route::get('admin/product/{action}', 'AdminController@product');
Route::post('admin/product/add', 'AdminController@postAddProduct');

Route::get('dashboard', function(){
    if( Session::get('user_type')=="admin" )
        return redirect('/admin');
    else
        return redirect('/customers');
});
