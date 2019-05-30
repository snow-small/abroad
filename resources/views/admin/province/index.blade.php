@extends('layout.admin.layout')


@section('body')
    <body class='body'>

    @include('layout.admin.header')

    <div class="wrap">

        @include('layout.admin.side')

        <div class="wrap__main">

            @include('layout.admin.common')

            <div class="wrap__content">
                <h2 class="user__title">省份列表</h2>
                <a href="{{ url('admin/province/create') }}" class="user__title-create">添加省份</a>
                <div class="user__list">
                    <table class="table table-responsive" style="position: relative; margin-bottom: 80px;">

                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>handle</th>
                        </tr>

                        @foreach($provinces as $province)
                            <tr>
                                <td>{{ $province->id }}</td>
                                <td>{{ $province->name }}</td>
                                <td>
                                    <a type="button" href="{{ url('admin/province/'.$province->id.'/edit') }}" class="btn">编辑</a>
                                    <a type="button" class="btn" onclick="del({{ $province->id }})">删除</a>
                                </td>
                            </tr>
                        @endforeach
                        {{ $provinces->render() }}

                    </table>
                </div>

            </div>
        </div>
    </div>
    <script>
        function del (p_id)
        {
            layer.confirm('您确定要删除我吗？', {
                btn: ['确定', '取消'],
            }, function() {
                $.post("{{ url('admin/province') }}/" + p_id,
                    {
                        '_token': '{{ csrf_token() }}',
                        '_method': 'delete',
                    }, function(data) {
                        if(data.status == 0) {
                            layer.msg(data.msg, { icon: 6});
                            location.href = location.href;
                        } else {
                            layer.msg(data.msg, { icon: 5});
                        }
                    });
            }, function() {});
        }
    </script>

    <script type="text/javascript" src="{{ asset('public/admin/js/index.js') }}"></script>
    </body>
@stop