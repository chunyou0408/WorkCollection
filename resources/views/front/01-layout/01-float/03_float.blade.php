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
        width: 100%;
        height: 30%;
        background-color: hotpink;
        float: left;
    }
    .box2{
        width: 100%;
        height: 40%;
        background-color: black;
        float: right;
    }

    .box2-left{
        width: 15%;
        height: 100%;
        background-color: darkkhaki;
        float: left;
    }

    .box2-right{
        width: 85%;
        height: 100%;
        background-color: red;
        float: right;
    }
    .box2-right-1{
        width: 100%;
        height: 33%;
        background-color: mediumpurple;
    }
    .box2-right-1-right{
        width: 80%;
        height: 100%;
        background-color: teal;
        float: right;
    }
    .box2-right-2{
        width: 100%;
        height: 33%;
        background-color: pink;
    }
    .box2-right-2-left{
        width: 80%;
        height: 100%;
        background-color: purple;
        float: left;
    }
    .box2-right-3{
        width: 100%;
        height: 34%;
        background-color: slategray;
    }
    .box2-right-3-right{
        width: 80%;
        height: 100%;
        background-color: magenta;
        float: right;
    }
    .box3{
        width: 100%;
        height: 30%;
        background-color: sienna;
        /* clear: left; */
        /* clear: right; */
        clear: both;
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
<h1 style="text-align: center;margin-top: 30px;">float-03</h1>
<a href="/01-layout/float" class="next_btn" style="float: right">回列表</a>
<div style="clear: both"></div>
<a href="/01-layout/float/02" class="next_btn" style="float: left">上一個</a>
<a href="/01-layout/float/04" class="next_btn" style="float: right">下一個</a>
<div style="clear: both"></div>
 <!-- 巢狀結構 -->

    <!-- 父層 -->
    <div class="all">
        <!-- 子層 -->
        <div class="box1"></div>
        <div class="box2">
            <div class="box2-left"></div>
            <div class="box2-right">
                <div class="box2-right-1">
                    <div class="box2-right-1-right"></div>
                </div>
                <div class="box2-right-2">
                    <div class="box2-right-2-left"></div>
                </div>
                <div class="box2-right-3">
                    <div class="box2-right-3-right"></div>
                </div>
            </div>
        </div>
        <div class="box3"></div>
    </div>

@endsection
