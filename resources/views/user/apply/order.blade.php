@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')
    <section class="apply__old">
        <h2 class="apply__old__title" style="color:#aaa;">
            历史申请
        </h2>
        <div class="apply__line"></div>
        <div class="apply__border">
            <table class="table table-hover apply__status__table" style="margin-bottom:250px;">
                <tr>
                    <th>学校</th>
                    <th>专业</th>
                    <th>申请费用</th>
                    <th>状态</th>
                    <th>说明</th>
                    <th>最近更新</th>
                </tr>
                @foreach ($orders as $order)
                    <tr style="background:#fff;height: 20px;">
                        <td>{{ $order->School->name }}</td>
                        <td>{{ $order->Program->name }}</td>
                        <td>{{ $order->SchoolProgram->apply }}</td>
                        <td style="color:red;">{{ $order->Status->name }}</td>
                        <td>
                            {{ $order->description }}
                        </td>
                        <td>{{ $order->updated_at }}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </section>

    @include('layout.user.footer')
@stop