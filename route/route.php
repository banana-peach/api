<?php

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});
Route::get('hello/:name', 'index/Index/hello');

Route::get('weather', 'weather/index');
Route::get('getAllCityCode', 'Weather/getAllCityCode');

Route::post('upload-photo', 'photos/Photos/upload')->allowCrossDomain();



