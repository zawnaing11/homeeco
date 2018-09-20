<?php
Route::get('login', 'LoginController@showLogin')->name('login');
Route::post('login', 'LoginController@validateLogin');

Route::get('logout', 'LoginController@logout')->name('logout');

// FrontEnd
Route::namespace('frontEnd')->group(function() {
    Route::get('', 'HomeController@index')->name('home');
});

// Admin
Route::group(['namespace' => 'backEnd','prefix' => 'admin', 'middleware' => 'CheckRole'],function() {
    Route::get('/dashboard', 'HomeController@dashboard')->name('admin.dashboard');
    // Roles
    Route::get('/roles', 'RoleController@index')->name('admin.roles');

    Route::get('/role/create', 'RoleController@create')->name('admin.role.create');
    Route::post('/role/create', 'RoleController@store')->name('admin.role.store');

    // Master
    Route::get('/masters', 'MasterController@index')->name('admin.masters');

    Route::get('/master/create', 'MasterController@create')->name('admin.master.create');
    Route::post('/master/create', 'MasterController@store')->name('admin.master.store');
});
// Master
Route::group(['namespace' => 'backEnd\Master', 'prefix' => 'master'], function() {
    Route::get('/', 'MasterController@dashboard')->name('master.dashboard');

});