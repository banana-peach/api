<?php

namespace app\weather\controller;

use app\model\WeatherCity;
use app\model\WeatherDetail;

class Weather
{
    public function index()
    {
        $city = input('city');
        $cityID = input('citycode');
        $date = input('date');

//        $data = ["city"=>$city,"date"=>$date];
        $data = WeatherDetail::where("city_id", $cityID)->where("date", $date)->findOrFail();

        return json($data);
//        return json($data);

    }

}
