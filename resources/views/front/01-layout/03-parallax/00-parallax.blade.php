@extends('layouts.template')
@section('css')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;500;900&display=swap" rel="stylesheet">

<style>
    body {
        margin: 0;
    }

    .all {
        width: 100%;
        height: auto;
    }

    .banner,
    .backg1,
    .backg2 {
        width: 100%;
        background-position: 50% 50%;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        opacity: 0.7;
        /* 透明度 */
    }

    .banner {
        height: 100vh;
        background-color: blue;
        position: relative;
        background-image: url('/img/01-layout/03-parallax/iron_man-Avengers-Endgame-2019-Desktop-Wallpaper-1.jpg');
    }

    .headline {
        font-size: 100px;
        background-color: black;
        color: white;
        font-family: 'Anton', sans-serif;
        padding: 0 10px;
        position: absolute;
        top: calc(50% - 75px);
        left: calc(50% - 192.552px);

    }

    .text01 {
        background-color: white;
        width: 100%;
        padding: 60px;
        box-sizing: border-box;
        /*自動扣除*/
    }

    .title {
        font-size: 25px;
        letter-spacing: 2px;
        text-align: center;
        padding-bottom: 20px;
        font-weight: 600;
        font-family: 'Noto Sans TC', sans-serif;
    }

    .content01 {
        font-size: 18px;
        letter-spacing: 2px;
        text-align: justify;
        text-indent: 40px;
        font-family: 'Noto Sans TC', sans-serif;
    }

    .backg1 {
        height: 70vh;
        background-color: red;
        position: relative;
        background-image: url('/img/01-layout/03-parallax/Iron-Man-Hulkbuster_1920x1080.jpg');

    }

    .headline01,
    .headline02,
    .headline03,
    .headline04 {
        font-size: 80px;
        color: black;
        font-weight: bold;
        position: absolute;

    }

    .headline01 {
        top: calc(10%);
        left: calc(10%);
        font-family: 'Noto Sans TC', sans-serif;
    }

    .text02,
    .text03 {
        background-color: black;
        color: white;
        width: 100%;
        padding: 60px;
        box-sizing: border-box;
        /*自動扣除*/
    }

    .content02 {
        font-size: 18px;
        text-align: justify;
        padding-bottom: 20px;
        font-family: 'Noto Sans TC', sans-serif;
    }

    .backg2 {
        height: 70vh;
        background-color: red;
        position: relative;
        background-image: url('/img/01-layout/03-parallax/mark85.jpg');
    }

    .headline02 {
        top: calc(70%);
        left: calc(70%);
        font-family: 'Anton', sans-serif;

    }

    /*
    .text03 {
        background-color: black;
        color: white;
        width: 100%;
        padding: 60px;
        box-sizing: border-box;
    }

*/

    .footer {
        height: calc(100vh + 500px);
        width: 100%;
        background-color: blue;
        position: relative;
        background-image: url('/img/01-layout/03-parallax/maxresdefault.jpg');
        background-size: cover;
        background-attachment: fixed;
        background-position: 95% 0%;
        opacity: 0.6;
        /* 透明度 */
    }

    .headline03 {
        top: calc(5%);
        left: calc(50%);
        font-family: 'Anton', sans-serif;

    }

    .headline04 {
        font-size: 100px;
        background-color: black;
        color: white;
        font-family: 'Anton', sans-serif;
        padding: 0 10px;
        position: absolute;
        /* top: calc(50% - 75px);
        left: calc(50% - 157.203px); */
        top: calc(50% - 75px + 250px);
        left: calc(50% - 157.203px);

    }
</style>
@endsection
@section('main')
<div class="all">
    <div class="banner">
        <samp class=headline>IRON MAN</samp>
    </div>
    <div class="text01">
        <div class="title">鋼鐵人-東尼史塔克</div>
        <div class="content01">安東尼·愛德華·史塔克（英語：Anthony Edward
            Stark），別稱鋼鐵人，是基於同名漫威漫畫角色，在漫威電影宇宙（MCU）系列電影中由小勞勃·道尼飾演的角色。電影中，東尼·史塔克是一名企業家、天才發明家兼極度自戀的花花公子，擔任史塔克工業執行長。他在電影最初作為美軍的主要武器供應商，隨後，為了保衛世界和平，運用其技術知識發展動力服。截至2019年，這個角色曾在十部系列電影中登場（包含在《無敵浩克》的短暫客串），是漫威電影宇宙的核心人物之一，為了擊敗薩諾斯而使用無限寶石犧牲自己，彈指把薩諾斯大軍消滅。
        </div>
    </div>
    <div class="backg1">
        <samp class=headline01>浩克毀滅者</samp>
    </div>
    <div class="text02">
        <samp class="content02">MARK XLIV（馬克44）號是東尼·史塔克創造的第44套裝甲，名稱為浩克毀滅者（Hulk
            Buster），又稱反浩克裝甲。出現在真人電影復仇者聯盟2：奧創紀元裡。馬克44號配色方案為紅色和金色。</samp>
    </div>
    <div class="backg2">
        <samp class=headline02>mark 85</samp>
    </div>
    <div class="text03">
        <samp
            class="content02">這次設計運用了紅色和金色搭配，裡面大量金色要素是為了紀念馬克4號，它是鋼鐵人中最經典的盔甲之一，這是因為馬克4號是托尼在10年前製作的，也因為《復仇者聯盟4》將會是漫威的前10年的結束後10年的開始，所以他們以馬克85來紀念這10年的歷程所以這套盔甲必成為經典戰甲，這也將是鋼鐵人迷們垂涎的一套戰甲，因為它的意義太重大了。</samp>
    </div>
    <div class="footer">
        <samp class=headline03>mark 4</samp>
        <samp class=headline04>THE END</samp>
    </div>
</div>
@endsection
