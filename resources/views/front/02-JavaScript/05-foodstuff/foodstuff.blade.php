<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>上益好好吃商品清單</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }


        .btns {
            width: 100%;
            height: 100px;
            background-color: lightblue;

            display: flex;
            justify-content: space-around;
        }

        .btn {
            width: 200px;
            height: 100px;
            background-color: lightpink;

            font-size: 40px;
            font-weight: 800;
            text-align: center;
            line-height: 100px;

            cursor: pointer;
        }

        .btn.active {
            background-color: chocolate;
            color: white;
            font-weight: 800;
        }

        .btn:hover {
            background-color: chocolate;
        }

        .add {
            width: 300px;
            height: 300px;
            background-color: lightsalmon;
            position: absolute;
            right: 0;
            top: 100px;

            display: none;

        }

        .add.active {
            display: block;
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
            width: 20%;
            height: 450px;
            background-color: lightgray;

            margin: 20px;
        }

        .imgbox {
            width: 100%;
            height: 50%;
            background-color: white;
        }

        .imgbox img {
            width: 100%;
            height: 100%;
        }

        .text {
            text-align: center;
        }

        .addmenuvalue {
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="btns">
        <div class="btn active" onclick="filter(`ALL`),btnactive(`ALL`)">全部</div>
        <div class="btn" onclick="filter(`drink`),btnactive(`drink`)">飲料</div>
        <div class="btn" onclick="filter(`dessert`),btnactive(`dessert`)">甜點</div>
        <div class="btn" onclick="filter(`food`),btnactive(`food`)">食物</div>
        <div class="btn" onclick="openadd()">新增產品</div>
        <div class="add">
            <input class="addmenuvalue" type="text" value="牛排" placeholder="名稱(必填)">
            <input class="addmenuvalue" type="text"
                value="https://d20aeo683mqd6t.cloudfront.net/zh-hant/articles/title_images/000/039/381/medium/pixta_45067017_M.jpg?2019"
                placeholder="圖片網址(必填)">
            <input class="addmenuvalue" type="text" value="牛肉" placeholder="內容(必填)">
            <input class="addmenuvalue" type="text" value="20000" placeholder="價格(必填)">
            <input class="addmenuvalue" type="text" value="food" placeholder="tag1(必填) 例:drink food">
            <input class="addmenuvalue" type="text" value="" placeholder="tag2">
            <input type="button" value="新增" onclick="newmenu()">
        </div>
    </div>
    <div class="boxs">
    </div>

    <script>




        //版面請自己來
        //一進入網頁，先把全部的商品顯示出來
        //商品的顯示內容包含 1.商品名稱 2.商品照片 3.內容物 4.價錢  (排版方式不設限)

        //有過濾器(filter)    ex) 按下"甜點"按鈕 只顯示被歸類在甜點的商品


        // 以下是上益好好吃的商品清單
        var SY_goodgoodEat_Product = [
            {
                name: '高級紅茶',
                img: 'https://i.epochtimes.com/assets/uploads/2014/10/1409221241502483.jpg',
                content: '紅茶葉、水',
                price: '1200',
                tag1: 'drink'
            },
            {
                name: '手工餅乾',
                img: 'https://cdn2.ettoday.net/images/3629/d3629818.jpg',
                content: '澱粉、糖',
                price: '20',
                tag1: 'dessert'
            },
            {
                name: '珍珠奶茶',
                img: 'https://attach.setn.com/newsimages/2018/11/06/1627152-XXL.jpg',
                content: '奶茶、珍珠、水',
                price: '65',
                tag1: 'drink',
                tag2: 'dessert'
            },
            {
                name: '紅燒牛肉麵',
                img: 'https://1.bp.blogspot.com/-4L2AeEI4x9A/XgA9c6okfMI/AAAAAAABJ-s/sXJMDKGOaY08UKCD82ioxSFQq5IC2u9PwCKgBGAsYHg/s1600/00.jpg',
                content: '牛肉、麵條、調味料',
                price: '180',
                tag1: 'food'
            },
            {
                name: '滷肉飯',
                img: 'https://2.bp.blogspot.com/-VKO_fV4tzB8/WsDMatMdEQI/AAAAAAABNgc/cyaHyT2FjxY_U96pKdBcz2BMSVFPvPSPwCLcBGAs/s1600/DSC_00461.JPG',
                content: '飯、滷肉、調味料',
                price: '35',
                tag1: 'food'
            },
            {
                name: '蘋果派',
                img: 'https://img-global.cpcdn.com/recipes/10860064e49c3f0b/751x532cq70/%E6%B3%95%E5%BC%8F%E8%98%8B%E6%9E%9C%E6%B4%BE-%E9%A3%9F%E8%AD%9C%E6%88%90%E5%93%81%E7%85%A7%E7%89%87.jpg',
                content: '蘋果、派皮、糖',
                price: '210',
                tag1: 'dessert'
            },
            {
                name: '多多綠茶',
                img: 'https://www.85cafe.com/file/product/w500/%E5%A4%9A%E5%A4%9A%E7%B6%A0%E8%8C%B6.jpg',
                content: '養樂多、糖、綠茶',
                price: '50',
                tag1: 'drink'
            }
        ]

        var boxs = document.querySelector(".boxs")
        var btns = document.querySelectorAll(".btn")
        var add = document.querySelector(".add")

        menuAll() //預設顯示全部

        //選擇器
        function filter(x) {
            clearAllactive()
            boxs.innerHTML = ""  //先清空畫面


            if (x == "ALL") {   //當選擇ALL時進入
                menuAll()   //顯示全部
            } else {
                //進入迴圈
                SY_goodgoodEat_Product.forEach(element => {
                    //判斷tag1 與 tag2 有沒有選擇到的字串
                    if (element.tag1 == x || element.tag2 == x) {
                        boxs.innerHTML += `
                    <div class="box">
                <div class="imgbox">
                    <img src="${element.img}" alt="">
                </div>
                <div class="text">
                    <h1>${element.name}</h1>
                    <h4>${element.content}</h4>
                    <h3>售價:${element.price}元</h3>
                </div>
            </div>`
                    }
                });
            }
        }

        function menuAll() {
            SY_goodgoodEat_Product.forEach(element => {
                boxs.innerHTML += `
                    <div class="box">
                <div class="imgbox">
                    <img src="${element.img}" alt="">
                </div>
                <div class="text">
                    <h1>${element.name}</h1>
                    <h4>${element.content}</h4>
                    <h3>售價:${element.price}元</h3>
                </div>
            </div>`
            });

        }

        function clearAllactive() {
            btns.forEach(element => {
                element.classList.remove('active')
            });
        }
        function btnactive(str) {
            if (str == `ALL`) {
                btns[0].classList.add('active')
            } else if (str == `drink`) {
                btns[1].classList.add('active')
            } else if (str == `dessert`) {
                btns[2].classList.add('active')
            } else if (str == `food`) {
                btns[3].classList.add('active')
            }
        }

        function openadd() {//顯示新增選單,點第二下會隱藏
            if (add.classList.contains('active')) {
                add.classList.remove('active')
            } else {
                add.classList.add('active')
            }

        }


        var addmenuvalue = document.querySelectorAll(".addmenuvalue")

        function newmenu() {
            //當必填資料都有輸入值時
            if (addmenuvalue[0].value != "" && addmenuvalue[1].value != "" && addmenuvalue[2].value != "" && addmenuvalue[3].value != "" && addmenuvalue[4].value != "") {

                //將輸入的資料導入物件
                addmenu = {
                    name: addmenuvalue[0].value,
                    img: addmenuvalue[1].value,
                    content: addmenuvalue[2].value,
                    price: addmenuvalue[3].value,
                    tag1: addmenuvalue[4].value,
                    tag2: addmenuvalue[5].value
                }
                SY_goodgoodEat_Product.push(addmenu);

                //迴圈清空資料
                for (let index = 0; index < addmenuvalue.length; index++) {
                    addmenuvalue[index].value = ""
                }
            }
            //被點擊後必定把視窗收起來
            add.classList.remove('active');
        }
//    1.牛排
//    2.https://d20aeo683mqd6t.cloudfront.net/zh-hant/articles/title_images/000/039/381/medium/pixta_45067017_M.jpg?2019
//    3.牛肉
//    4.20000
//    5.food


    </script>
</body>

</html>
