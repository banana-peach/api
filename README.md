##提供多种api接口供网友使用。
目前包括：
1.全国各主要城市的当天的天气情况，且包含历史天气（数据在不断完善中）。
2.图床接口（下一步开发）。

###一，天气接口使用
接口地址：/api/v1/weather
参数：

| 参数 | 含义 |
|:-----:|:-----:|
|city| 城市|广州|
|citycode|城市代码|
|date|日期|

成功返回代码
```json
{
    "code": 0,
    "message": "ok",
    "data": {
        "citycode": "987",
        "date": "2021-12-01",
        "weather": "晴",
        "temphigh": "19",
        "templow": "11",
        "image": "2",
        "humidity": "78",
        "pressure": "89",
        "windspeed": "1.9",
        "winddirect": "东风",
        "windpower": "3级",
        "sunrise": "07:41",
        "sunset": "18:13",
        "aqi": "29",
        "primarypollutant": "PM10",
        "cityname": "厦门"
    }
}
```

失败返回代码 
```json
{
    "code": "-1",
    "message": "服务器错误",
    "result": ""
}
```