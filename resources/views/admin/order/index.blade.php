@extends('layout.admin.layout')

@section('body')

    <body class="body">

    @include('layout.admin.header')

    <div class="wrap">
        @include('layout.admin.side')

        <div class="wrap__main">
            @include('layout.admin.common')

            <div class="wrap__content">
                <h2 class="user__title">订单列表</h2>
                <br/>
                <div class="user__list">
                    <table class="table table-responsive" style="position: relative; margin-bottom: 80px;">

                        <tr>
                            <th>id</th>
                            <th>申请人</th>
                            <th>学校</th>
                            <th>专业</th>
                            <th>申请费用</th>
                            <th>状态</th>
                            <th>描述</th>
                            <th>handle</th>
                        </tr>

                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user->username }}</td>
                                <td>{{ $order->school->name }}</td>
                                <td>{{ $order->program->name }} </td>
                                <td>{{ $order->total }}</td>
                                <td>{{ $order->status->name }}</td>
                                <td>{{ $order->description }}</td>
                                <td>
                                    <a type="button" href="{{ url('admin/order/'.$order->id.'/edit') }}" class="btn">状态</a>
                                    <a type="button" href="{{ url('admin/order/'.$order->id) }}" class="btn">资料</a>
                                    <a type="button" href="{{ url('admin/order/apply/'.$order->id) }}" class="btn">申请表</a>
                                </td>
                            </tr>
                        @endforeach
                        {{ $orders->render() }}

                    </table>
                </div>
            </div>

        </div>

    </div>

    </body>



@stop