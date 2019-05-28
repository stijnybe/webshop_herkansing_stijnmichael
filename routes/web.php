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

Route::get('/', 'MainPageController@index');


/////////////////////
// Customer Routes //
/////////////////////

//Route::get('/about', function () {
//    return View('about');
//});

Route::get('/about','MainPageController@about');
Route::get('/products/categories', function () {
    return redirect('/products');
});
//Route::get('/products/categories', 'ProductController@index');
Route::get('/products','ProductController@index');
Route::get('/products/{product}', 'ProductController@show');
Route::get('/products/categories/{category}', 'ProductController@getByCategory');
Route::get('/products/categories/{category}/{subcategory}', 'ProductController@getBySubcategory');
Route::get('/add-to-cart/{product}', 'ProductController@addtocart');
Route::get('/shoppingcart', 'ProductController@getcart');
Route::get('/reduce-quantity-of-product/{id}', 'ProductController@reduceQuantityOfProductInCart');
Route::get('/remove-from-cart/{id}', 'ProductController@removeFromCart');
Route::get('/checkout', 'OrderController@getcheckout');
Route::post('/checkout', 'OrderController@store');
//Route::get('/billing/{orderid}', 'OrderController@getbill');
Route::get('/billing/{orderid}',[
    'as' => 'bill',
    'uses' => 'OrderController@getbill'
]);
Route::post('/search', 'SearchController@search');


/////////////////////
// Account Routes  //
/////////////////////

Route::get('/signup', 'LoginController@create');
Route::post('/signup', 'LoginController@store');
Route::get('/signin', 'LoginController@getlogin');
Route::post('/signin', 'LoginController@postlogin');
Route::get('/logout', 'LoginController@getlogout');


/////////////////////
//Management Routes//
/////////////////////

Route::group(['middleware' => 'auth'], function(){

//    Route::get('/management/home', 'HomeController@index');
    Route::get('/management/home',[
        'as' => 'home',
        'uses' => 'HomeController@index'
    ]);
    Route::post('management/home', 'HomeController@setHighlights');

    //Product management
    Route::get('/management/products/create', 'ProductController@create');
    Route::post('/management/products/create', 'ProductController@store');
    Route::get('/management/products/{product}', 'ProductController@edit');
    Route::post('/management/products/{product}', 'ProductController@patch');

    //Category management
    Route::get('/management/categories/create', 'CategoriesController@create');
    Route::post('/management/categories/create', 'CategoriesController@store');
    Route::get('/management/categories/{category}', 'CategoriesController@edit');
    Route::post('/management/categories/{category}', 'CategoriesController@patch');

    Route::get('/management/subcategories/create', 'SubcategoriesController@create');
    Route::post('/management/subcategories/create', 'SubcategoriesController@store');

    //Order management
    Route::get('/management/order/{id}', 'OrderController@delete');

});
