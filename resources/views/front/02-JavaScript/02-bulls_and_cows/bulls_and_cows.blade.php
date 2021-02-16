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
        margin-bottom: 20px;

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
        <h1 id="topic">猜數字遊戲 <br>(不連續之4位數 答案console)</h1>
        <input id="ipt" type="text" maxlength="4">
        <textarea id="textarea" rows="10" cols="50" readonly></textarea>
        <div id="btn">送出答案</div>
    </div>
</section>
@endsection

@section('js')
<script>
    var btn = document.querySelector("#btn")    //按鈕
        var ipt = document.querySelector("#ipt")    //文字欄位
        var textarea = document.querySelector("#textarea") //提示輸出文字欄位
        var prompt = "";                            //提示文字內容
        var ans = [];                               //答案(陣列)
        var Times = 0;                                //猜的次數
        var value_A = 0, value_B = 0;
        getRandom();                                //亂數.四位數


        btn.onclick = function () {
            //剩下的交給你們了 ⁽⁽ ◟(∗ ˊωˋ ∗)◞ ⁾⁾
            if (btn.innerHTML == "重新遊戲") {
                reset();
            } else {
                var guess = ipt.value;

                //判斷是不是0000~9999之間的數字 且 文字剛好4個
                if (guess.length == 4 && guess >= 0 && guess <= 9999) {

                    var a = parseInt(guess % 10);                   //個位數
                    var b = parseInt((guess % 100) / 10)              //十位數
                    var c = parseInt((guess % 1000) / 100);          //百位數
                    var d = parseInt((guess % 10000) / 1000);         //千位數

                    console.log("輸入:"+guess);

                    if (ans.indexOf(a) != - 1) {                   //當個位數有時進入
                        if (ans.indexOf(a) == 3) {
                            value_A += 1;
                        } else {
                            value_B += 1;
                        }
                    }


                    if (ans.indexOf(b) != - 1) {                   //當十位數有時進入
                        if (ans.indexOf(b) == 2) {
                            value_A += 1;
                        } else {
                            value_B += 1;
                        }
                    }


                    if (ans.indexOf(c) != - 1) {                   //當百位數有時進入
                        if (ans.indexOf(c) == 1) {
                            value_A += 1;
                        } else {
                            value_B += 1;
                        }
                    }


                    if (ans.indexOf(d) != - 1) {                   //當千位數有時進入
                        if (ans.indexOf(d) == 0) {
                            value_A += 1;
                        } else {
                            value_B += 1;
                        }
                    }

                    Times += 1;

                    console.log(Times + ": " + value_A + "A " + value_B + "B");

                    prompt+="\n"+Times+"-"+guess + "-" + value_A + "A" + value_B + "B";
                    textarea.innerHTML = prompt;

                    if (value_A == 4) {                             //當4A時進入
                        alert("答對了 答案是:" + ans+"\n總共猜了"+Times+"次");

                        prompt+="\n答對了 答案是:" + ans+"\n總共猜了"+Times+"次";
                        textarea.innerHTML = prompt;

                        ipt.setAttribute("disabled","disabled");
                        btn.innerHTML = "重新遊戲";
                        Times=0;
                    }
                    value_A = 0, value_B = 0;  //離開時將AB初始化
                } else {
                    alert("輸入錯誤");
                }
            }
            ipt.value = "";//離開前清除文字欄位
        }

        //重新遊戲設定
        function reset() {
            console.clear();
            ipt.removeAttribute("disabled");
            getRandom();
            prompt="遊戲開始 請輸入四位數字"
            textarea.innerHTML = prompt;
            btn.innerHTML = "送出答案";
        }

        //取得不連續之四位數字
        function getRandom() {
            ans = [];
            while (ans.length < 4) {                    //當大於4個數字離開
                let num = Math.floor(Math.random() * 10)   //亂數0~9
                if (ans.indexOf(num) == -1) {            //如果此數字不在陣列就會回傳-1,就可放入陣列中
                    ans.push(num);                      //放入陣列的最後一個位置
                }
            }
            console.log("答案:"+ans)
            console.log("遊戲開始 請輸入四位數字")
            prompt="遊戲開始 請輸入四位數字"
            textarea.innerHTML = prompt;

        }
     //偵聽鍵盤按鈕,輸入Enter鍵後會自動按下輸入按鈕
     window.addEventListener('keydown',function(e){
            if(e.key == 'Enter'){
                document.getElementById("btn").click();
            }
        });







</script>



@endsection
