<?php
Route::get('login', 'LoginController@showLogin')->name('login');
Route::post('login', 'LoginController@validateLogin');

Route::get('logout', 'LoginController@logout')->name('logout');

// FrontEnd
Route::namespace('frontEnd')->group(function() {
    Route::get('', 'HomeController@index')->name('home');
});

// Admin
Route::group(['middleware' => 'checkAdmin', 'namespace' => 'backEnd','prefix' => 'admin', 'as' => 'admin.'],function() {
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    // Roles
    Route::resource('/role', 'RoleController');

    // Master
    Route::resource('/master', 'MasterController');

    // Input Number
    Route::get('/number', 'NumberController@index')->name('number.index');
    // get Number
    Route::get('/product/{id}', 'NumberController@getProduct')->name('get.product');
    // Number Save
    Route::post('/product/save', 'NumberController@saveProduct')->name('save.product');
    // Show Number List
    Route::get('/products/list', 'NumberController@showProduct')->name('show.product');
    // get all number depend on limit price
    Route::get('/products/limit', 'NumberController@getProducts')->name('get.products');
});
// Master
Route::get('/master', function() {
    return 'welcome master';
})->name('master');

Route::get('/staff', function() {
    return 'welcome staff';
})->name('staff');
