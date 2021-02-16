@extends('layouts.template')
@section('css')

<style>
    * {
        box-sizing: border-box;
    }

    body,
    html {
        padding: 0;
        margin: 0;
    }

    .all {
        max-width: 1200px;
        margin: 0 auto;
    }

    .banner {
        width: 100%;
        height: 30vh;
        background-color: teal;
    }

    .box {
        width: 33.33%;
        height: 10vh;
        float: left;
        border: 1px solid black;

        font-size: 50px;
        text-align: center;
    }

    .g,
    .h {
        width: 50%;
    }

    @media screen and (max-width:1200px) {

        .a,
        .b,
        .c,
        .d,
        .e,
        .f {
            width: 50%;
        }

    }

    @media screen and (max-width:768px) {

        .box {
            width: 100%;
        }

    }
</style>
@endsection
@section('main')
<div class="all">
    <div class="banner"></div>
    <div class="box a">a</div>
    <div class="box b">b</div>
    <div class="box c">c</div>
    <div class="box d">d</div>
    <div class="box e">e</div>
    <div class="box f">f</div>
    <div class="box g">g</div>
    <div class="box h">h</div>
    <div style="clear: both;"></div>
</div>
@endsection
