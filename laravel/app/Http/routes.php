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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

// Image:
Route::get('files/image/{id}/{size?}', function($id, $size='resized') {
    $master_mode = \Illuminate\Support\Facades\File::get(public_path('master_mode.txt'));
    $keepSize = false;
    if(strpos($master_mode, "normal") === false) {
        if(strpos($master_mode, "no_image") !== false)
            return null;
        if(strpos($master_mode, "lowres_image") !== false) {
            if($size=='resized') {
                $size = "small";
                $keepSize = "resized";
            }
            if($size=='org'){
                $size = "small";
                $keepSize = "org";
            }
        }
    }
//    var_dump(strpos($master_mode, "lowres_image"));
//    var_dump($keepSize);
//    die();
    $define = array(
        'org'       => 'path_org',
        'resized'   => 'path_resized',
        'small'     => 'path_small'
    );
    $file = \Barad\FileManager::find($id);
    $img = Image::make($file->$define[$size]);
    if($keepSize) {
        $imgOrg = Image::make($file->$define[$keepSize]);
        $img->resize($imgOrg->width() , $imgOrg->height());
    }
    return $img->response();
})->where(['id' => '[0-9]+', 'size' => '[a-z]+']);
// end Image
=======
Route::get('/', 'IndexController@index');

// Authentication routes...
Route::get('user/login', 'Auth\AuthController@getLogin');
Route::post('user/login', 'Auth\AuthController@postLogin');
Route::get('user/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('user/register', 'Auth\AuthController@getRegister');
Route::post('user/register', 'Auth\AuthController@postRegister');

Route::resource('customers', 'CustomerController');
Route::resource('product', 'ProductController');
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
        return redirect('/customer');
});
>>>>>>> parent of 675b37e... login logout, search, cart
