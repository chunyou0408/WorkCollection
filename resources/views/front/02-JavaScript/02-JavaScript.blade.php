@extends('layouts.template')
@section('css')
{{-- aos --}}
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
{{-- hover.css --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.0/css/hover.css" />

<style>
    .row h1 {
        padding: 30px 0;
    }
</style>
@endsection

@section('main')
<div class="container">
    <div class="row">
        <h1 style="width:100%; text-align: center">JavaScript相關</h1>
    </div>
    <div class="row">
        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-up">
            <div class="card-header">
                <h2>猜數字遊戲 0~100<h2>
            </div>
            <a href="/02-JavaScript/guess_number_higher_or_lower" class="hvr-bob">
                <img src="/img/02-JavaScript/01-guess_number_higher_or_lower/01.png" class="card-img-top" alt="..."
                    width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">課後練習題目</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-up">
            <div class="card-header">
                <h2>猜數字遊戲 ?A?B<h2>
            </div>
            <a href="/02-JavaScript/bulls_and_cows" class="hvr-bob">
                <img src="/img/02-JavaScript/02-bulls_and_cows/01.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">課後練習題目</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-up">
            <div class="card-header">
                <h2>BMI計算機<h2>
            </div>
            <a href="/02-JavaScript/BMI" class="hvr-bob">
                <img src="/img/02-JavaScript/03-BMI/01.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">課後練習題目</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-up">
            <div class="card-header">
                <h2>Tabs分頁<h2>
            </div>
            <a href="/02-JavaScript/tabs" class="hvr-bob">
                <img src="/img/02-JavaScript/04-tabs/01.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">課後練習題目</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-up">
            <div class="card-header">
                <h2>食物商品清單-filter<h2>
            </div>
            <a href="/02-JavaScript/foodstuff" target="_blank" class="hvr-bob">
                <img src="/img/02-JavaScript/05-foodstuff/01.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">課後練習題目,顯示已儲存好的物件資料</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-up">
            <div class="card-header">
                <h2>家具存貨系統-filter<h2>
            </div>
            <a href="/02-JavaScript/furniture" target="_blank" class="hvr-bob">
                <img src="/img/02-JavaScript/06-furniture/01.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">課後練習題目,利用伺服器回傳的資料,顯示到畫面上</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-up">
            <div class="card-header">
                <h2>天氣卡片API<h2>
            </div>
            <a href="/02-JavaScript/weatherAPI" target="_blank" class="hvr-bob">
                <img src="/img/02-JavaScript/07-weatherAPI/01.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">課後練習題目,利用中央氣象局提供的資訊,顯示到畫面上</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-up">
            <div class="card-header">
                <h2>Bootstrap排版練習<h2>
            </div>
            <a href="/02-JavaScript/Bootstrap" target="_blank" class="hvr-bob">
                <img src="/img/02-JavaScript/08-Bootstrap/01.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">課後練習題目</p>
            </div>
        </div>


    </div>
</div>
@endsection

@section('js')
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection
