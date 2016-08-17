<?php

Route::group(['middleware' => ['lang']], function () {
    Route::get('/', 'MainController@index');
    Route::any('/{seccion}/{yy}/{titulo}', 'MainController@redirectUrl');

    //Route::get('devocionales','MainController@devocionales');
});



