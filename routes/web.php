<?php

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['prefix' => 'admin'], function(){
//     Route::get('/', 'AdminController@index')->name('admin_home');
//     Route::get('/{id}', 'AdminController@show')->name('admin_show');
//     Route::post('/', 'AdminController@store')->name('admin_store');
//     Route::get('/{id}', 'AdminController@edit')->name('admin_edit');
//     Route::put('/{id}', 'AdminController@update')->name('admin_update');
//     Route::delete('/{id}', 'AdminController@delete')->name('admin_delete');
// });
Route::prefix('admin')->group(function(){
    Route::get('/', 'AdminController@index')->name('adminHome');
    Route::get('/{id}', 'AdminController@show')->name('adminShow');
    Route::post('/simpan', 'AdminController@save')->name('adminSave');
    // Route::get('/{id}', 'AdminController@edit')->name('admin_edit');
    Route::put('/edit/{id}', 'AdminController@update')->name('adminUpdate');
    Route::delete('/hapus/{id}', 'AdminController@delete')->name('adminDelete');
});

// Route::group(['prefix' => 'page'], function()
// {
    // Route::post('/page-store/{id}', 'PageController@store_page')->name('page_store');
    // Route::get('/{id}', 'PageController@show')->name('page_show');
    // Route::get('/edit_page/{id}', 'PageController@edit_page')->name('page_edit');
    // Route::put('/edit_page/{id}', 'PageController@update_page')->name('page_update');
    // Route::delete('/{id}', 'PageController@delete_page')->name('page_delete');
    // Route::post('/image-store/{id}', 'ImagePageController@image_page')->name('image_store');
// });
Route::prefix('page')->group(function(){
    Route::post('/simpan/{id}', 'PageController@save')->name('pageSave');
    // Route::get('/{id}', 'PageController@show')->name('page_show');
    // Route::get('/edit_page/{id}', 'PageController@edit_page')->name('page_edit');
    // Route::put('/edit_page/{id}', 'PageController@update_page')->name('page_update');
    // Route::delete('/{id}', 'PageController@delete_page')->name('page_delete');
    // Route::post('/image-store/{id}', 'ImagePageController@image_page')->name('image_store');
});

// Route::group(['prefix' => 'page-image'], function()
// {
//     Route::post('/post/{id}', 'PageController@post_page')->name('post_page');
// });