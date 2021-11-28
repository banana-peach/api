<?php

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');

Route::get('weather', 'weather/index');
Route::get('getAllCityCode', 'weather/getAllCityCode');

return [

];
