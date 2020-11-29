<?php

    Route::group(['namespace' => 'General'], function () {
    Route::get('change-password/{code}','HomeController@resetPasswordWithCode')->name('change-password');
    Route::post('change-password','HomeController@resetPasswordStore')->name('change-password.store');
    Route::post('get-in-touch','HomeController@GetTouch');
    Route::get('/single-blog/{slug}','HomeController@singleBlog');
    Route::match(['get', 'post'], '/{slug}', 'HomeController@slug')->where('slug', '.*');

});
