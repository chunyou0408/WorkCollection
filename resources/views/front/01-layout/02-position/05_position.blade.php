@extends('layouts.template')
@section('css')
<style>
    .box1 {
        width: 50px;
        height: 50px;
        background-color: midnightblue;
        position: relative;
        top: calc(100% - 50px);
        left: calc(100% - 50px);
    }

    .all {
        margin: auto;
        width: 500px;
        height: 300px;
        background-color: mediumspringgreen;
    }
</style>
@endsection

@section('main')
<h1 style="text-align: center">position-05</h1>

<a href="/01-layout/position" class="next_btn" style="float: right">回列表</a>
<div style="clear: both"></div>
<a href="/01-layout/position/04" class="next_btn" style="float: left">上一個</a>
<a href="/01-layout/position/06" class="next_btn" style="float: right">下一個</a>
<div style="clear: both"></div>

<div class="all">
    <div class="box1"></div>
</div>

@endsection
