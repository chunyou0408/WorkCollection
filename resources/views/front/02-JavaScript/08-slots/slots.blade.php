<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .all {
            width: 100%;
            height: 100vh;
            background-color: black;
            display: flex;
        }

        main {
            position: relative;
            margin: auto;
            width: 80%;
            height: 80%;
            background-color: lightcyan;
        }

        section {
            width: 100%;
            height: calc(100% - 90px);
        }

        .container {
            display: flex;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .box {
            width: 20%;
            height: 100%;
            border-right: 10px solid #fff;
        }

        .box:last-child {
            border-right: 0;
        }

        .imgBx {
            width: 100%;
            height: 100%;
            background-color: lime;

            transform: translateY(-100%);

        }

        .imgBox {
            width: 100%;
            height: 33.33333%;
            border: 1px solid black;
            overflow: hidden;

        }

        .imgBox img {
            width: 100%;
            height: 100%;
            object-fit: cover;


        }

        .box.active {
            animation: slideDown var(--i) linear forwards;
        }

        .imgBx:nth-child(2) {
            transform: translateY(-100%);
        }

        @keyframes slideDown {
            0% {
                transform: translateY(0%);

            }

            100% {
                transform: translateY(100%);

            }
        }

        footer {
            width: 100%;

            position: absolute;
            bottom: 0;
            left: 0;

            display: flex;
            justify-content: space-between;

            background-color: burlywood;
        }

        footer ul {
            display: flex;
            list-style: none;
        }

        footer ul li {
            padding: 20px 30px;
            visibility: hidden;
        }

        footer .scoreText {
            display: flex;
            justify-content: space-between;
            width: 200px;
            height: 50px;
            margin: auto;
            background-color: lightblue;

            text-align: center;
            line-height: 50px;
            font-size: 30px;
        }


        .btn {
            display: inline-block;
            width: 80px;
            height: 50px;
            background-color: lightsalmon;
            border: 3px solid black;
            text-align: center;

            line-height: 50px;
        }
    </style>
</head>

<body>
    <div class="all">
        <main>
            <section>
                <div class="container">
                    <div class="box" style="--i:1000ms;" data-i=0>
                        <div class="imgBx imgBx1">
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img01.png" alt="">
                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img01.png" alt="">
                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img01.png" alt="">
                            </div>
                        </div>
                        <div class="imgBx imgBx2">
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img02.png" alt="">
                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img02.png" alt="">
                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img02.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="box" style="--i:1000ms;" data-i=1>
                        <div class="imgBx imgBx1">
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img01.png" alt="">

                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img01.png" alt="">

                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img01.png" alt="">

                            </div>
                        </div>
                        <div class="imgBx imgBx2">
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img02.png" alt="">

                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img02.png" alt="">

                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img02.png" alt="">

                            </div>
                        </div>
                    </div>
                    <div class="box" style="--i:1000ms;" data-i=2>
                        <div class="imgBx imgBx1">
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img01.png" alt="">

                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img01.png" alt="">

                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img01.png" alt="">
                            </div>
                        </div>
                        <div class="imgBx imgBx2">
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img02.png" alt="">

                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img02.png" alt="">

                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img02.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="box" style="--i:1000ms;" data-i=3>
                        <div class="imgBx imgBx1">
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img01.png" alt="">

                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img01.png" alt="">
                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img01.png" alt="">
                            </div>
                        </div>
                        <div class="imgBx imgBx2">
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img02.png" alt="">
                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img02.png" alt="">
                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img02.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="box" style="--i:1000ms;" data-i=4>
                        <div class="imgBx imgBx1">
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img01.png" alt="">
                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img01.png" alt="">
                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img01.png" alt="">
                            </div>
                        </div>
                        <div class="imgBx imgBx2">
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img02.png" alt="">
                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img02.png" alt="">
                            </div>
                            <div class="imgBox">
                                <img src="/img/02-JavaScript/08-slots/img02.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <ul class="footer-left">
                    <li><a href="#" class="btn">NO.9</a></li>
                    <li><a href="#" class="btn">EXIT</a></li>
                    <li><a href="#" class="btn">INFO</a></li>
                </ul>

                <div class="scoreText">
                    <p>WIN:</p> 99999
                </div>


                <ul class="footer-right">
                    <li><a href="#" class="btn">AUTO</a></li>
                    <li><a href="#" class="btn">BET2000</a></li>
                    <li><a href="#" class="btn spin" style="visibility: visible;">SPIN</a></li>
                </ul>
            </footer>
        </main>
    </div>
</body>
<script>
    let lastImgArray = [3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6, 1, 1, 1];

    let spin = document.querySelector('.spin');
    let boxs = document.querySelectorAll('.box');

    let speed = 1000; // 轉一圈的速度
    let delay = speed / 5; //延遲的時間(有波浪的效果)
    let times = 5; //要轉的次數
    let A_times = 1; //目前次數
    let A_stop = true;//判斷第一行有沒有停下

    let help = "times, speed, lastImgArray";

    //首先先將所有圖案亂數
    randomImg('ALL');


    spin.addEventListener('click', function () {
        if (A_stop) {
            A_times = 1;
            A_stop = false;
            boxs.forEach(box => {
                //讀取：getPropertyValue()
                //寫入：setProperty()
                box.style.setProperty('--i', speed + 'ms')
            })
            randomImg();
            moveBoxHandler('ALL');
        }
    });

    //當動畫跑完就執行
    window.addEventListener('animationend', function (e) {
        e.target.classList.remove('active')
        let imgs01 = e.target.querySelectorAll('.imgBx1 img')
        let imgs02 = e.target.querySelectorAll('.imgBx2 img')
        //交換圖片,讓顯示的圖片回到動作原位
        imgs02.forEach((img, index) => {
            img.src = imgs01[index].src;
        })

        //更改上層圖片
        imgs01.forEach((img, index) => {
            if (e.target.dataset.i == 0) {
                index == 0 ? console.log('A_times:' + A_times) : '';

                if (A_times + 1 == times) {
                    //第一列最後出現的圖案
                    let last = lastImgArray[index];
                    img.src = `/img/02-JavaScript/08-slots/img0${last}.png`
                }
                else {
                    let random = Math.floor(Math.random() * 9) + 1;
                    img.src = `/img/02-JavaScript/08-slots/img0${random}.png`
                }
            } else {
                if (A_times == times) {
                    //除了第一列最後出現的圖案
                    let last = lastImgArray[(e.target.dataset.i * 3) + index];
                    img.src = `/img/02-JavaScript/08-slots/img0${last}.png`
                } else {
                    let random = Math.floor(Math.random() * 9) + 1;
                    img.src = `/img/02-JavaScript/08-slots/img0${random}.png`
                }
            }
        })

        if (e.target.dataset.i == 0) {
            if (A_times < times) {
                A_times += 1;
                moveBoxHandler(e.target);
            } else {
                A_stop = true;
            }
        }
        if (e.target.dataset.i != 0 && A_stop == false) {
            moveBoxHandler(e.target);
        }
    })

    //亂數圖片
    function randomImg(img) {
        if (img == 'ALL') {
            document.querySelectorAll('img').forEach(img => {
                let random = Math.floor(Math.random() * 9) + 1;
                img.src = `/img/02-JavaScript/08-slots/img0${random}.png`
            })
        } else {
            document.querySelectorAll('.imgBx1 img').forEach(img => {
                let random = Math.floor(Math.random() * 9) + 1;
                img.src = `/img/02-JavaScript/08-slots/img0${random}.png`
            })
        }

    }

    //判斷移動
    function moveBoxHandler(box) {
        if (box == 'ALL') {
            boxs.forEach(box => {
                window.setTimeout(function () {
                    box.classList.add('active');
                }, delay * box.dataset.i)
            })
        } else {
            window.setTimeout(function () {
                box.classList.add('active');
            }, 0)
        }
    }


</script>

</html>
