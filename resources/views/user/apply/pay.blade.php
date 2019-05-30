@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')
    <body style="background:#fafafa;">
    <h2 class="apply__program" style="width:400px;">你正在申请的课程是：{{ $program->name }}</h2>
    <form action="{{ url('apply/order') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="a_id" value="{{ $a_id }}">
        <section class="apply__pay">
            <h2 class="apply__title" style="padding: 20px 0;">
                付款页面，请仔细核对页面信息
            </h2>
            <div class="apply__line"></div>
            <table class="table table-hover apply__pay__table">
                <tr>
                    <th>学校</th>
                    <th>专业</th>
                    <th>申请费用</th>
                    <th>状态</th>
                </tr>
                <tr>
                    <td>{{ $school->name }}</td>
                    <td>{{ $program->name }}</td>
                    <td>RMB: {{ $schoolProgram->apply }}</td>
                    <td>未付款</td>
                </tr>
            </table>
        </section>

        <div class="apply__pay__total">合计：<b>{{ $schoolProgram->apply }}</b> 元</div>
        <div class="apply__pay__confirm">
            <button type="submit" class="btn btn-primary">确认无误</button>

        </div>
    </form>


    <img src="{{ asset('public/user/images/pay.png') }}"
         style="width:264px;height:264px;margin-left:400px;margin-top:-150px;" alt="">
    </body>

    @include('layout.user.footer')
@stop