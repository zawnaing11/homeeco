<?php
Route::get('login', 'LoginController@showLogin')->name('login');
Route::post('login', 'LoginController@validateLogin');

Route::get('logout', 'LoginController@logout')->name('logout');

// FrontEnd
Route::namespace('frontEnd')->group(function() {
    Route::get('', 'HomeController@index')->name('home');
});

// Admin
Route::group(['namespace' => 'backEnd','prefix' => 'admin'],function() {
    Route::get('/dashboard', 'HomeController@dashboard')->name('admin.dashboard');
    // Roles
    Route::resource('/roles', 'RoleController');

    // Master
    Route::get('/masters', 'MasterController@index')->name('admin.masters');

    Route::get('/master/create', 'MasterController@create')->name('admin.master.create');
    Route::post('/master/create', 'MasterController@store')->name('admin.master.store');
});
// Master
/*Route::group(['namespace' => 'backEnd\Master', 'prefix' => 'master'], function() {
    Route::get('/', 'MasterController@index')->name('master.dashboard');
});*/
// Staff
Route::get('/staff',function() {
    return 'Staff Page';
})->name('staff');