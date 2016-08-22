<?php

Route::group(['middleware' => ['lang']], function () {
    Route::get ('/', 'MainController@index');
    Route::any ('/{seccion}/{yy}/{titulo}', 'MainController@redirectUrl');
    Route::any ('/download/{seccion}/{yy}/{titulo}','MainController@download');
    Route::get ('/plantilla','MainController@download');

    Route::get ('/pruebadb','MainController@pruebadb');
});



