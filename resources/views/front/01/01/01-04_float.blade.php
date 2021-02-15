@extends('layouts.template')
@section('css')
<style>
    .all {
        margin: auto;
        max-width: 1400px;
        width: 100%;
        height: 800px;
    }
    .box1 {
        width: 100%;
        height: 20%;
        background-color: hotpink;
    }

    .box2 {
        width: 100%;
        height: 60%;
        background-color: black;
    }

    .box2-left {
        width: 20%;
        height: 60%;
        background-color: darkkhaki;
        float: left;
    }

    .box2-right {
        width: 20%;
        height: 100%;
        background-color: pink;
        float: right;
    }

    .box2-mid1 {
        width: 60%;
        height: 20%;
        background-color: red;
        float: right;
    }

    .box2-mid2 {
        width: 60%;
        height: 20%;
        background-color: purple;
        float: right;
    }

    .box2-mid3 {
        width: 60%;
        height: 20%;
        background-color: violet;
        float: right;
    }

    .box2-mid4 {
        width: 80%;
        height: 20%;
        background-color: mediumaquamarine;
        float: left;
    }

    .box2-mid5 {
        width: 80%;
        height: 20%;
        background-color: powderblue;
        float: left;
    }

    .box3 {
        width: 100%;
        height: 20%;
        background-color: sienna;
    }

    .next_btn{
        margin: 10px 30px;
        border: 1px solid black;
        background-color: whitesmoke;
        padding: 5px 20px;
    }
</style>
@endsection

@section('main')
<h1 style="text-align: center">float-04</h1>
<a href="/01/00" class="next_btn" style="float: right">回列表</a>
<div style="clear: both"></div>
<a href="03" class="next_btn" style="float: left">上一個</a>
<a href="05" class="next_btn" style="float: right">下一個</a>
<div style="clear: both"></div>
<!-- 巢狀結構 -->

<!-- 父層 -->
<div class="all">
    <!-- 子層 -->
    <div class="box1"></div>
    <div class="box2">
        <div class="box2-left"></div>
        <div class="box2-right"></div>
        <div class="box2-mid1"></div>
        <div class="box2-mid2"></div>
        <div class="box2-mid3"></div>
        <div class="box2-mid4"></div>
        <div class="box2-mid5"></div>
    </div>
    <div class="box3"></div>
</div>

@endsection
