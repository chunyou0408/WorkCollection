<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            width: 100%;
            min-width: 955px;
            height: 500vh;
            padding-top: 40px;
            background-color: seashell;
        }

        .nav-bar {
            z-index: 1;
            width: 100%;
            min-width: 955px;
            height: 40px;
            background-color: rgb(59, 87, 157);
            position: fixed;
            top: 0;
        }

        .nav-bar-1 {
            padding-left: 20%;
            width: 30%;
            height: 100%;
            /* background-color: darkmagenta; */
            float: left;
        }

        .nav-bar-2 {
            width: 25%;
            height: 100%;
            /* background-color: darkslateblue; */
            float: left;
        }

        .nav-bar-3 {
            margin-right: 0%;
            width: 25%;
            height: 100%;
            /* background-color: darkturquoise; */
            float: left;
        }


        #text01 {
            margin-top: 6px;
            width: 70%;
            height: 22px;
        }

        .imgfbicon,
        .img01,
        .img02,
        .img03,
        .img04,
        .img05 {
            height: 40px;
            float: left;
        }

        .img03 {
            margin-right: 3%;

        }

        .imgfbicon,
        .nav-bar-name,
        .nav-bar-home,
        .nav-bar-findfriend {
            float: left;
            font-size: 12px;
            margin: 12px 5px;
            color: white;
        }

        .imgfbicon {
            margin: 5px 0px;
            height: 30px;
            width: 30px;
            border: 0px solid black;
            border-radius: 50%;
            background-image: url('/img/01-la/05-facebook/黑白熊icon.jpg');
            background-size: cover;
            background-position: center;
        }

        .nav-bar-name {
            margin-top: 14px;
            /* background-color:red; */
        }

        .nav-bar-home {
            /* background-color: green; */
        }

        .nav-bar-findfriend {
            /* background-color: blue; */
        }

        .container {
            width: 100%;
            height: 100%;
            background-color: darkgrey;
        }

        .box1 {
            width: 25%;
            height: 100%;
            float: left;
            /* background-color: red; */
        }

        .box2 {
            width: 50%;
            height: 100%;
            float: left;
            background-color: darkgrey;
        }

        .table {
            width: 100%;
            height: 250px;
            background-color: black
        }

        .table-top {
            width: 100%;
            height: 100%;
        }

        .table-top-01 {
            width: 100%;
            height: 80%;
            background-color: black;
        }

        .table-top-02 {
            width: 100%;
            height: 20%;
            background-color: black;
        }

        .listimg {
            margin-left: 2%;
            float: left;
            height: 150px;
            width: 150px;
            border: 3px solid white;
            border-radius: 50%;
            background-image: url('/img/01-layout/05-facebook/黑白熊icon.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            bottom: 150%;
        }

        .list01,
        .list02,
        .list03,
        .list04 {
            height: 20px;
            padding: 6px 8px;
            border: 1px solid black;
            background-color: white;
        }

        .list01 {
            float: left;
            /* padding-left: 10%; */
            border: 0;
            background-color: black;
            color: white;

        }

        .list02 {
            float: right;
        }

        .list03 {
            margin-left: 2%;
            float: right;

        }

        .list04 {
            margin-right: 2%;
            float: right;
        }

        .table-bot {
            /* padding-left: 20%; */
            width: 100%;
            height: 20%;
            box-sizing: border-box;
            background-color: white;
            padding-left: 30%;
        }

        .table-bot-01,
        .table-bot-02,
        .table-bot-03,
        .table-bot-04,
        .table-bot-05,
        .table-bot-06 {
            box-sizing: border-box;
            height: 100%;
            float: left;
            padding: 17px 10px;
            font-size: 12px;
            color: rgb(59, 87, 157);
            font-weight: bold;
            /* background-color: cadetblue; */
            border: 1px solid black;
        }



        .box3 {
            width: 25%;
            height: 100%;
            float: right;
            /* background-color: red; */
        }
    </style>
</head>

<body>
    <!-- 導覽列 -->
    <div class="nav-bar">
        <!-- 導覽列第一區 /FB圖片 文字輸入欄位-->
        <div class="nav-bar-1">
            <div class="img01"><img src="/img/01-layout/05-facebook/FBICON.jpg" width=40px height=40px alt=""></div>
            <input id="text01" type="text" value="Monokuma">
        </div>
        <!-- 導覽列第二區 /大頭貼 名字 首頁 尋找朋友-->
        <div class="nav-bar-2">
            <div class="imgfbicon"></div>
            <div class="nav-bar-name">Monokuma</div>
            <div class="nav-bar-home">首頁</div>
            <div class="nav-bar-findfriend">尋找朋友</div>
        </div>
        <!-- 導覽列第三區 /小按鈕-->
        <div class="nav-bar-3">
            <div class="img01"><img src="/img/01-layout/05-facebook/FB_navbar朋友.jpg" width=40px height=40px alt=""></div>
            <div class="img02"><img src="/img/01-layout/05-facebook/FB_navbar訊息.jpg" width=40px height=40px alt=""></div>
            <div class="img03"><img src="/img/01-layout/05-facebook/FB_navbar地球.jpg" width=40px height=40px alt=""></div>
            <div class="img04"><img src="/img/01-layout/05-facebook/FB_navbar問號.jpg" width=40px height=40px alt=""></div>
            <div class="img05"><img src="/img/01-layout/05-facebook/FB_navbar下箭頭.jpg" width=40px height=40px alt=""></div>
        </div>


    </div>
    <!-- 導覽列以下 -->
    <div class="container">
        <!-- 左邊區域 -->
        <div class="box1"></div>
        <!-- 中間區域 -->
        <div class="box2">
            <!-- 頂端-個人首頁表格 -->
            <div class="table">
                <!-- 上面欄位  -->
                <div class="table-top">
                    <!-- 黑色區域上半部 -->
                    <div class="table-top-01">
                    </div>
                    <!-- 黑色區域下半部 -->
                    <div class="table-top-02">
                        <!-- 列表按鈕/大頭照 名字 按鈕 更新資料 活動紀錄 ... -->
                        <div class="listimg"></div>
                        <div class="list01">Monokuma</div>
                        <div class="list04">...</div>
                        <div class="list03">活動紀錄</div>
                        <div class="list02">更新資料</div>
                    </div>

                </div>
                <!-- 下面欄位 /動態時報 關於 朋友 相片 典藏 更多 -->
                <div class="table-bot">
                    <div class="table-bot-01">動態時報</div>
                    <div class="table-bot-02">關於</div>
                    <div class="table-bot-03">朋友</div>
                    <div class="table-bot-04">相片</div>
                    <div class="table-bot-05">典藏</div>
                    <div class="table-bot-06">更多</div>
                </div>
            </div>
            <!-- 右邊區域 -->

        </div>
        <div class="box3"></div>
</body>

</html>
