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
        <h1 style="width:100%; text-align: center">實務切版</h1>
    </div>
    <div class="row">
        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-up">
            <div class="card-header">
                <h2>我要詢價<h2>
            </div>
            <a href="/03-work/01-inquire" target="_blank" class="hvr-bob">
                <img src="/img/03-work/04/01.png" class="card-img-top" alt="..."
                    width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">到工作室的練習切版</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-up">
            <div class="card-header">
                <h2>常見問題<h2>
            </div>
            <a href="/03-work/02-common_problem" target="_blank" class="hvr-bob">
                <img src="/img/03-work/05/01.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">到工作室的練習切版</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4" data-aos="fade-up">
            <div class="card-header">
                <h2>聯絡我們<h2>
            </div>
            <a href="/03-work/03-contact_us" target="_blank" class="hvr-bob">
                <img src="/img/03-work/06/01.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">到工作室的練習切版</p>
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
