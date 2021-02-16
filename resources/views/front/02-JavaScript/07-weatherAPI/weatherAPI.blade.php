<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>天氣api</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-width: 740px;
        }

        .btns {
            width: 100%;
            height: 100px;
            background-color: lightblue;

            display: flex;
            justify-content: space-around;
        }

        .btns h1 {
            margin: 0;
            line-height: 100px;
        }

        .btn {
            width: 200px;
            height: 100px;
            background-color: lightpink;

            text-align: center;
            line-height: 50px;

            font-size: 18px;

            transition: .3s;
            cursor: pointer;
        }

        .btn:hover,
        .btn.active {
            background-color: lightslategray;
            font-weight: 800;
            color: white;
        }


        .boxs {
            width: 100%;
            min-height: calc(100vh - 100px);
            background-color: beige;
            margin: auto;

            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-content: flex-start;
        }

        .box {
            width: 300px;
            min-height: 450px;
            background-color: lightgray;

            margin: 20px;
        }

        .imgbox {
            width: 100%;
            height: 250px;
            background-color: white;
        }

        .imgbox img {
            width: 100%;
            height: 100%;
        }

        .text {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="btns">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <h1>天氣api</h1>
    </div>
    <div class="boxs">
    </div>
    <script>
        var Weatherforecast_01 = []//時間近-氣象資料
        var Weatherforecast_02 = []//時間中
        var Weatherforecast_03 = []//時間遠
        var btns = document.querySelectorAll('.btn')
        var boxs = document.querySelector(".boxs")

        //裝資料
        fetch('https://opendata.cwb.gov.tw/api/v1/rest/datastore/F-C0032-001?Authorization=CWB-B5282D9D-8FDD-40E9-AD48-B1DF3270465D')
            .then(function (response) {
                return response.json();
            })
            .then(function (weather) {
                var locate = weather.records.location

                var times = locate[0].weatherElement[0].time
                times.forEach((element, index) => {
                    btns[index].innerHTML = times[index].startTime + "<br>" + times[index].endTime
                });


                locate.forEach(location => {


                    times.forEach((time, index) => {
                        var img = ""
                        var city = location.locationName
                        var Wx = location.weatherElement[0].time[index].parameter.parameterName
                        var PoP = location.weatherElement[1].time[index].parameter.parameterName
                        var MinT = location.weatherElement[2].time[index].parameter.parameterName
                        var CI = location.weatherElement[3].time[index].parameter.parameterName
                        var MaxT = location.weatherElement[4].time[index].parameter.parameterName
                        var startTime = location.weatherElement[4].time[index].startTime
                        var endTime = location.weatherElement[4].time[index].endTime
                        if (PoP == 0) {
                            img = "/img/02-JavaScript/07-weatherAPI/晴天.jpg"
                        } else if (PoP < 50) {
                            img = "/img/02-JavaScript/07-weatherAPI/陰天.jpg"
                        } else if (PoP >= 50) {
                            img = "/img/02-JavaScript/07-weatherAPI/雨天.jpeg"
                        }

                        addWeather = {
                            img: img,
                            city: city,
                            Wx: Wx,
                            PoP: PoP,
                            MinT: MinT,
                            CI: CI,
                            MaxT: MaxT,
                            startTime: startTime,
                            endTime: endTime
                        }

                        if (index == 0) {
                            Weatherforecast_01.push(addWeather);
                        } else if (index == 1) {
                            Weatherforecast_02.push(addWeather);
                        } else if (index == 2) {
                            Weatherforecast_03.push(addWeather);
                        }

                    });


                });

                //顯示時間最近的資料(第一個按鈕)
                document.querySelector('.btn').click();
            });


        //取資料

        btns.forEach((btn, index) => {
            btn.onclick = function () {
                boxs.innerHTML = ''
                clearAllactive()
                btn.classList.add('active')
                if (index == 0) {
                    Weatherforecast_01.forEach(element => { createWeather(element) });
                } else if (index == 1) {
                    Weatherforecast_02.forEach(element => { createWeather(element) });
                } else if (index == 2) {
                    Weatherforecast_03.forEach(element => { createWeather(element) });
                }
            }
        });

        function clearAllactive() {
            btns.forEach(element => {
                if (element.classList.contains('active')) {
                    element.classList.remove('active')
                }
            });
        }

        function createWeather(params) {
            boxs.innerHTML += `
                         <div class="box">
                            <div class="imgbox">
                                <img src="${params.img}" alt="">
                            </div>
                            <div class="text">
                                <h2>${params.city}</h2>
                                <h3>${params.Wx}</h3>
                                <p>最高溫度:${params.MaxT}°C  最低溫度:${params.MinT}°C</p>
                                <p>${params.CI}</p>
                                <p>降雨機率:${params.PoP}%</p>
                            </div>
                        </div>
                `
        }





    </script>
</body>

</html>
