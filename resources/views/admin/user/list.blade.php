@extends('layout.admin.layout')

@section('body')

    <body class="body">

        @include('layout.admin.header')

        <div class="wrap">
            @include('layout.admin.side')

            <div class="wrap__main">
                @include('layout.admin.common')

                <div class="wrap__content">
                    <h2 class="user__title">用户列表</h2>
                    <a href="{{ url('admin/user/create') }}" class="user__title-create">添加用户</a>
                    <br/>
                    <div class="user__list">
                        <table class="table table-responsive table-hover" style="position: relative; margin-bottom: 80px;">

                            <tr>
                                <th>id</th>
                                <th>username</th>
                                <th>sex</th>
                                <th>phone</th>
                                <th>handle</th>
                            </tr>

                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->sex }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>
                                        <a type="button" href="{{ url('admin/user/'.$user->id.'/edit') }}" class="btn user__list-handle">编辑</a>
                                        <a type="button" class="btn user__list-handle" onclick="del({{ $user->id }})">删除</a>
                                    </td>
                                </tr>
                            @endforeach
                            {{ $users->render() }}

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
                    $.post("{{ url('admin/user') }}/" + art_id,
                        {
                            '_token': '{{ csrf_token() }}',
                            '_method': 'delete',
                        }, function(data) {
                            if(data.status == 0) {
                                layer.msg(data.msg, { icon: 6});
                                location.href = "{{ url('admin/user') }}";
                            } else {
                                layer.msg(data.msg, { icon: 5});
                            }
                        });
                }, function() {});
            }
        </script>
    </body>



@stop