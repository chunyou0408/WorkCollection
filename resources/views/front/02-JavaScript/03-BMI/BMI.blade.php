@extends('layouts.template')
@section('css')

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
    }

    h1 {
        margin: 0;
        text-align: center;
    }

    .BMI {
        width: 100%;
        height: auto;
        min-height: 100vh;
        background-color: cornsilk;

        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .gameCanvas {
        width: 600px;
        height: 400px;
        background-color: rgb(160, 160, 160);
        border: 5px solid gray;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        margin-bottom: 50px;
    }

    .d-flex {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .justify-content-around {
        justify-content: space-around;
    }

    .w-100 {
        width: 100%;
    }

    span {
        font-size: 20px;
        font-weight: 900;
        margin-right: 10px;
        width: 150px;
    }

    input {
        width: 400px;
        height: 35px;
        text-align: center;
        border-radius: 5px;
    }

    .btn {
        width: 200px;
        height: 50px;
        background-color: ivory;
        text-align: center;
        line-height: 50px;
        font-size: 24px;
        font-weight: 900;
        transition: .3s;
        border-radius: 8px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: rgb(26, 26, 24);
        color: white;
    }

    .btn:active {
        transition: .1s;
        background-color: red;
        color: white;
    }

    .resultCanvas {
        width: 600px;
        padding: 30px;
        border: 5px solid gray;
        border-radius: 10px;
        opacity: 0;
        transition: 0.5s;

    }

    .resultCanvas.active {
        opacity: 1;
    }
</style>
@endsection

@section('main')
<section class="BMI">
    <div class="gameCanvas">
        <h1>BMI計算機</h1>
        <div class="d-flex">
            <span>請輸入身高(cm):</span><input id="ipt_height" type="text">
        </div>
        <div class="d-flex">
            <span>請輸入體重(kg):</span><input id="ipt_weight" type="text">
        </div>
        <div class="d-flex justify-content-around w-100">
            <div id="start_btn" class="btn">開始計算</div>
            <div id="reset_btn" class="btn">重新計算</div>
        </div>
    </div>
    <div class="resultCanvas">
        <span>BMI值:</span><span id="result_BMI"></span><br>
        <span>身體狀態:</span><span id="result_bodyStatus"></span><br>
        <span>建議參考:</span><span id="result_suggest"></span><br>
    </div>
</section>
@endsection

@section('js')
<script>
    var start_btn = document.querySelector("#start_btn")
        var reset_btn = document.querySelector("#reset_btn")
        var resultCanvas = document.querySelector(".resultCanvas")

        var ipt_height = document.querySelector("#ipt_height")
        var ipt_weight = document.querySelector("#ipt_weight")

        var BMI = document.querySelector("#result_BMI")         //輸出文字
        var bodyStatus = document.querySelector("#result_bodyStatus")
        var suggest = document.querySelector("#result_suggest")

        start_btn.onclick = function () {
            if(resultCanvas.classList.contains('active')){
                resultCanvas.classList.remove('active')
            }


            if (ipt_height.value == "" && ipt_weight.value == "") {
                alert('請輸入數值')
            } else if (ipt_height.value == "") {
                alert('請輸入身高')
            } else if (ipt_weight.value == "") {
                alert('請輸入體重')
            } else if(isNaN(ipt_height.value) || isNaN(ipt_weight.value)){
                alert('請輸入數字')
            } else {


                resultCanvas.classList.add('active')
                var value_BMI = parseInt(ipt_weight.value) / Math.pow((parseInt(ipt_height.value) / 100), 2)
                value_BMI = value_BMI.toFixed(1);  //取小數點第一位
                BMI.innerHTML = `${value_BMI}`   //BMI


                if (value_BMI >= 35) {
                    bodyStatus.innerHTML = `重度肥胖`
                    suggest.innerHTML = `非常胖，肥胖容易引起疾病，您得要多多注意自己的健康囉！`
                } else if (value_BMI >= 30) {
                    bodyStatus.innerHTML = `中度肥胖`
                    suggest.innerHTML = `太胖了，需要立刻力行「健康體重管理」囉！`
                } else if (value_BMI >= 27) {
                    bodyStatus.innerHTML = `輕度肥胖`
                    suggest.innerHTML = `有點胖，需要立刻力行「健康體重管理」囉！`
                } else if (value_BMI >= 24) {
                    bodyStatus.innerHTML = `過重`
                    suggest.innerHTML = `稍微胖，要小心囉`
                } else if (value_BMI >= 18.5) {
                    bodyStatus.innerHTML = `健康體重`
                    suggest.innerHTML = `非常好，要繼續保持`
                } else {
                    bodyStatus.innerHTML = `體重過輕`
                    suggest.innerHTML = `需要多運動，均衡飲食，以增加體能，維持健康！`
                }
            }

        }


        reset_btn.onclick = function () {
            ipt_height.value = null;
            ipt_weight.value = null;

            resultCanvas.classList.remove('active')
        }

</script>



@endsection
