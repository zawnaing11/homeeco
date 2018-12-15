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
    Route::get('/roles', 'RoleController@index')->name('roles');

    Route::get('/role/create', 'RoleController@create')->name('role.create');
    Route::post('/role/create', 'RoleController@store')->name('role.store');

    // Master
    Route::resource('/master', 'MasterController');
});
// Master
// Route::group(['namespace' => 'backEnd\Master', 'prefix' => 'master'], function() {
//     Route::get('/', 'MasterController@index')->name('master.dashboard');

// });