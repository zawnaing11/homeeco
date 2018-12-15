<?php
Route::get('login', 'LoginController@showLogin')->name('login');
Route::post('login', 'LoginController@validateLogin');

Route::get('logout', 'LoginController@logout')->name('logout');

// FrontEnd
Route::namespace('frontEnd')->group(function() {
    Route::get('', 'HomeController@index')->name('home');
});

// Admin
Route::group(['namespace' => 'backEnd','prefix' => 'admin', 'as' => 'admin.'],function() {
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    // Roles
    Route::resource('/roles', 'RoleController');

    // Master
    Route::resource('/master', 'MasterController');
});
// Route::group(['namespace' => 'backEnd\Master', 'prefix' => 'master'], function() {
//     Route::get('/', 'MasterController@index')->name('master.dashboard');

// });
