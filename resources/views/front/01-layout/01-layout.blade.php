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
        <h1 style="width:100%; text-align: center">切版相關</h1>
    </div>
    <div class="row">
        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-right">
            <div class="card-header">
                <h2>float練習(5)<h2>
            </div>
            <a href="/01-layout/float" class="hvr-pop">
                <img src="/img/測試圖片.jpg" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">課後練習題目</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-right">
            <div class="card-header">
                <h2>postion練習(8)<h2>
            </div>
            <a href="/01-layout/position" class="hvr-pop">
                <img src="/img/測試圖片.jpg" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">課後練習題目</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-right">
            <div class="card-header">
                <h2>parallax練習<h2>
            </div>
            <a href="/01-layout/parallax" class="hvr-pop">
                <img src="/img/01-layout/03-parallax/iron_man-Avengers-Endgame-2019-Desktop-Wallpaper-1.jpg"
                    class="card-img-top" alt="...">
            </a>
            <div class="card-body">
                <p class="card-text">課後練習題目</p>
            </div>
        </div>


        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-right">
            <div class="card-header">
                <h2>RWD練習<h2>
            </div>
            <a href="/01-layout/RWD" class="hvr-pop">
                <img src="/img/01-layout/04-RWD/01.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">課後練習題目</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-right">
            <div class="card-header">
                <h2>flex練習<h2>
            </div>
            <a href="/01-layout/flex" target="_blank" class="hvr-pop">
                <img src="/img/01-layout/05-flex/01.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">課後練習題目</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-right">
            <div class="card-header">
                <h2>facebook仿切練習<h2>
            </div>
            <a href="/01-layout/facebook" target="_blank" class="hvr-pop">
                <img src="/img/01-layout/06-facebook/01.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">課後練習題目</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-right">
            <div class="card-header">
                <h2>microsoft仿切練習RWD<h2>
            </div>
            <a href="/01-layout/microsoft" target="_blank" class="hvr-pop">
                <img src="/img/01-layout/07-microsoft/01.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">課後練習題目</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-right">
            <div class="card-header">
                <h2>Bootstrap排版練習<h2>
            </div>
            <a href="/01-layout/Bootstrap" target="_blank" class="hvr-pop">
                <img src="/img/01-layout/08-bootstrap/01.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">課後練習題目</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-right">
            <div class="card-header">
                <h2>個人網站重新切版<h2>
            </div>
            <a href="/01-layout/work" target="_blank" class="hvr-pop">
                <img src="/img/測試圖片.jpg" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">個人網站重新切版(施工中)</p>
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
