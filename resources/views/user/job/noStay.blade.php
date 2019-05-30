@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')

    <div style="width:1200px;
                height:500px;
                padding:50px 50px 100px;
                margin: 0 auto;
                font-size: 40px;
                letter-spacing: 5px;
                text-align: center;
                background:rgba(255, 255, 255, 0.9);
                ">
        <img style="width:200px;height:200px;margin-bottom:50px;" src="{{ asset('/public/user/images/red.gif') }}" alt="">
        <h2>不适合留华</h2>
        <p style="font-size:25px;"><a href="{{ url('job') }}">重新测评</a></p>
    </div>

    @include('layout.user.footer')
@stop