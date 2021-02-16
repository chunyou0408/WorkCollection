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

    .game {
        width: 100%;
        min-height: 100vh;
        height: auto;
        background-color: cornsilk;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .gameCanvas {
        width: 600px;
        height: 400px;
        background-color: rgb(160, 160, 160);
        border: 5px solid gray;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    input {
        width: 400px;
        height: 35px;
        text-align: center;
        border-radius: 5px;
        margin: 50px 0;

        font-size: 30px;
    }

    #btn {
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

    #btn:hover {
        background-color: rgb(26, 26, 24);
        color: white;
    }

    #btn:active {
        transition: .1s;
        background-color: red;
        color: white;
    }
</style>
@endsection

@section('main')
<section class="game">
    <div class="gameCanvas">
        <h1 id="topic">猜數字遊戲 (0~100之間)</h1>
        <input id="ipt" type="text" maxlength="3">
        <div id="btn">送出答案</div>
    </div>
</section>

@endsection

@section('js')
<script>
    var btn = document.querySelector("#btn") //按鈕
        var ipt = document.querySelector("#ipt") //文字欄位
        var ans = Math.floor(Math.random() * 101) //亂數  0~100
        var text = document.querySelector("#topic") //文字內容
        var max = 100;  //最大值
        var min = 0;    //最小值
        console.log(ans);

        btn.onclick = function () {
            //剩下的交給你們了 ⁽⁽ ◟(∗ ˊωˋ ∗)◞ ⁾⁾
            var guess = parseInt(ipt.value)  //讀取文字欄位內容,轉換成數字


            if (guess < ans && guess >= min) {
                min = guess;
                print();
                alert("大一點");
            } else if (guess > ans && guess <= max) {
                max = guess;
                print();
                alert("小一點");
            } else if (btn.innerHTML == "重新遊戲") {
                reset();
            } else if (guess == ans) {
                alert("答對了 答案是:" + ans);
                text.innerHTML = "猜數字遊戲 (答對了,答案是:" + ans + ")";
                ipt.setAttribute("disabled","disabled");
                btn.innerHTML = "重新遊戲";
            } else {
                alert("範圍不正確 或者 不是數字");
            }
            ipt.value = "";

        }
        //更新文字
        function print() {
            text.innerHTML = "猜數字遊戲 (" + min + "~" + max + "之間)";
        }
        //重新遊戲設定
        function reset() {
            ans = Math.floor(Math.random() * 99 + 1);
            console.log(ans);
            min = 0;
            max = 100;
            ipt.removeAttribute("disabled");
            btn.innerHTML = "送出答案";
            text.innerHTML = "猜數字遊戲 (0~100之間)";
        }

        //偵聽鍵盤按鈕,輸入Enter鍵後會自動按下輸入按鈕
        window.addEventListener('keydown',function(e){
            if(e.key == 'Enter'){
                document.getElementById("btn").click();
            }
        });


</script>
@endsection
