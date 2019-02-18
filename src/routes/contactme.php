<?php

Route::group(['namespace' => 'Nadaft\ContactMe\Http\Controllers' , 'middleware' => 'web'], function () {
    Route::get('contactme', 'ContactMeController@showForm')->name('contactme.form');
    Route::post('contactme-submit', 'ContactMeController@send')->name('contactme.submit');
});
