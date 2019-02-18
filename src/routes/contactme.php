<?php

Route::group(['namespace' => 'Nadaft\ContactMe\Http\Controllers' , 'middleware' => 'web'], function () {
    Route::get('contact', 'ContactMeController@showForm')->name('contactme.form');
    Route::post('contactme-submit', 'ContactMeController@send')->name('contactme.submit');
});
