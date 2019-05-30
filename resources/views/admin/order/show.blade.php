@extends('layout.admin.layout')

@section('body')

    <body class="body">

    @include('layout.admin.header')

    <div class="wrap">
        @include('layout.admin.side')

        <div class="wrap__main">
            @include('layout.admin.common')

            <div class="wrap__content">
                <div class="order__show">
                    <h2 class="order__show__title">申请资料</h2>
                    <a href="{{ url('admin/order') }}">返回</a>
                    <div class="order__show__line"></div>
                    <ul class="order__show__item">
                        @foreach ($dir as $file)
                            <li><a href="{{ asset($path.'/'.$file) }}">{{ $file }}</a></li>
                        @endforeach

                    </ul>
                </div>
            </div>

        </div>

    </div>

    </body>



@stop