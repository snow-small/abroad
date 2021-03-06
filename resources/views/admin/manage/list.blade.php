@extends('layout.admin.layout')

@section('body')

    <body class="body">

    @include('layout.admin.header')

    <div class="wrap">
        @include('layout.admin.side')

        <div class="wrap__main">
            @include('layout.admin.common')

            <div class="wrap__content">
                <h2 class="user__title">管理员列表</h2>
                <a href="{{ url('admin/manage/create') }}" class="user__title-create">添加管理员</a>
                <br/>
                <div class="user__list">
                    <table class="table table-responsive table-hover" style="position: relative; margin-bottom: 80px;">

                        <tr>
                            <th>id</th>
                            <th>username</th>
                            <th>reg_time</th>
                            <th>login_time</th>
                            <th>handle</th>
                        </tr>

                        @foreach($admins as $admin)
                            <tr>
                                <td>{{ $admin->id }}</td>
                                <td>{{ $admin->username }}</td>
                                <td>{{ date('Y-m-d H:i:s', $admin->reg_time) }}</td>
                                <td>{{ date('Y-m-d H:i:s', $admin->login_time)}}</td>
                                <td>
                                    <a type="button" href="{{ url('admin/manage/'.$admin->id.'/edit') }}" class="btn user__list-handle">编辑</a>
                                    <a type="button" class="btn user__list-handle" onclick="del({{ $admin->id }})">删除</a>
                                </td>
                            </tr>
                        @endforeach
                        {{ $admins->render() }}

                    </table>
                </div>
            </div>

        </div>

    </div>
    <script>
        function del(art_id)
        {
            layer.confirm('您确定要删除我吗？', {
                btn: ['确定', '取消'],
            }, function() {
                $.post("{{ url('admin/manage') }}/" + art_id,
                    {
                        '_token': '{{ csrf_token() }}',
                        '_method': 'delete',
                    }, function(data) {
                        if(data.status == 0) {
                            layer.msg(data.msg, { icon: 6});
                            location.href = "{{ url('admin/manage') }}";
                        } else {
                            layer.msg(data.msg, { icon: 5});
                        }
                    });
            }, function() {});
        }
    </script>
    </body>



@stop