<?php

Route::group(['middleware' => ['lang']], function () {
    Route::get ('/', 'MainController@index');
    Route::any ('/{seccion}/{yy}/{vista}', 'MainController@redirectUrl');
    Route::any ('/download/{seccion}/{yy}/{vista}','MainController@download');
    Route::get ('/plantilla','MainController@download');

    Route::get ('/pruebadb','MainController@pruebadb');
});

Route::post('/set/peticion','MainController@peticion');

