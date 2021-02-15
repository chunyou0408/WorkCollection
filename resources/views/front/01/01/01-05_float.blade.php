@extends('layouts.template')
@section('css')
<style>
    .all {
        margin: auto;
        max-width: 1400px;
        width: 100%;
        height: 800px;
    }

    .box1{
        width: 33%;
        height: 20%;
        margin-top :5%;
        margin-left :10%;
        background-color: hotpink;
        float: left;
    }

    .box2{
        width: 33%;
        height: 20%;
        margin-top :5%;
        margin-right :10%;
        background-color: powderblue;
        float: right;
    }

    .box3{
        width: 33%;
        height: 20%;
        background-color: seashell;
        clear: both;
        margin:0px auto;
    }

    .box4{
        width: 33%;
        height: 20%;
        margin-bottom :5%;
        margin-left :10%;
        background-color: teal;
        float: left;
    }

    .box5{
        width: 33%;
        height: 20%;
        margin-bottom :5%;
        margin-right :10%;
        background-color: mediumpurple;
        float: right;
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
<h1 style="text-align: center">float-05</h1>
<a href="/01/00" class="next_btn" style="float: right">回列表</a>
<div style="clear: both"></div>
<a href="04" class="next_btn" style="float: left">上一個</a>
<div style="clear: both"></div>

    <!-- 巢狀結構 -->

    <!-- 父層 -->
    <div class="all">
        <!-- 子層 -->
        <div class="box1"></div>
        <div class="box2"></div>
        <div class="box3"></div>
        <div class="box4"></div>
        <div class="box5"></div>
    </div>

@endsection
