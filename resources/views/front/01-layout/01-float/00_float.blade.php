@extends('layouts.template')
@section('css')
<style>
    .row h1 {
        padding: 30px 0;
    }

    .back_btn {
        margin: 10px 0;
        border: 1px solid black;
        background-color: whitesmoke;
        padding: 5px 20px;
    }
</style>
@endsection

@section('main')
<div class="container">
    <div class="row">
        <h1 style="width:100%; text-align: center">float練習(5)</h1>
    </div>
    <a href="/01-layout" class="back_btn" style="float: right">回切版練習</a>
    <div style="clear: both"></div>
    <div class="row">
        <div class="card col-12 col-md-6 col-lg-4">
            <div class="card-header">
                <h2>float練習-1<h2>
            </div>
            <a href="/01-layout/float/01">
                <img src="/img/01-layout/01-float/01.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">利用float練習的切版</p>
            </div>
        </div>

        <div class="card col-12 col-md-6 col-lg-4">
            <div class="card-header">
                <h2>float練習-2<h2>
            </div>
            <a href="/01-layout/float/02">
                <img src="/img/01-layout/01-float/02.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">利用float練習的切版</p>
            </div>
        </div>
        <div class="card col-12 col-md-6 col-lg-4">
            <div class="card-header">
                <h2>float練習-3<h2>
            </div>
            <a href="/01-layout/float/03">
                <img src="/img/01-layout/01-float/03.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">利用float練習的切版</p>
            </div>
        </div>
        <div class="card col-12 col-md-6 col-lg-4">
            <div class="card-header">
                <h2>float練習-4<h2>
            </div>
            <a href="/01-layout/float/04">
                <img src="/img/01-layout/01-float/04.png" class="card-img-top" alt="..." width="100%">
            </a>
            <div class="card-body">
                <p class="card-text">利用float練習的切版</p>
            </div>
        </div>
        <div class="card col-12 col-md-6 col-lg-4">
            <div class="card-header">
                <h2>float練習-5<h2>
            </div>
            <a href="/01-layout/float/05" style="display: flex;height: 293px;">
                <img src="/img/01-layout/01-float/05.png" class="card-img-top" alt="..." width="100%" style="margin: auto">
            </a>
            <div class="card-body">
                <p class="card-text">利用float練習的切版</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection
