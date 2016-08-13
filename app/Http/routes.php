<?php

Route::group(['middleware' => ['lang']], function () {
    Route::get('/', 'MainController@index');
    Route::get('devocionales','MainController@devocionales');
});



