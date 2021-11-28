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

        $data = WeatherDetail::where('city_id','>','9')
            ->alias('d')
            ->where(['city_id'=>$cityID,'date'=>$date])
            ->field('*')
            ->join('weather_city c','c.number = d.city_id')
            ->select();

        return json($data);
//        return json($data);

    }

}
