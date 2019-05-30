@extends('layout.admin.layout')


@section('body')
    <body class='body'>

    @include('layout.admin.header')

    <div class="wrap">

        @include('layout.admin.side')

        <div class="wrap__main">

            @include('layout.admin.common')

            <div class="wrap__content">
                <h2 class="user__title">院校列表</h2>
                <a href="{{ url('admin/school/create') }}" class="user__title-create">添加院校</a>
                <div class="user__list">
                    <table class="table table-responsive table-hover" style="position: relative; margin-bottom: 80px;">

                        <tr>
                            <th>id</th>
                            <th>省份</th>
                            <th>名称</th>
                            <th>校徽</th>
                            <th>背景图</th>
                            <th>人数</th>
                            <th>网址</th>
                            <th>所有专业</th>
                            <th>handle</th>
                        </tr>

                        @foreach($schools as $school)
                            <tr>
                                <td>{{ $school->id }}</td>
                                <td>{{ $school->province->name }}</td>
                                <td>{{ $school->name }}</td>
                                <td>
                                    <img src="{{ asset('') }}{{ $school->icon }}"
                                        style="width:40px;height:40px;">
                                </td>
                                <td>
                                    <img src="{{ asset('') }}{{ $school->bgImg }}"
                                         style="width:80px;height:40px;">
                                </td>
                                <td>{{ $school->students }}</td>
                                <td>{{ $school->websit }}</td>
                                <td>{{ $school->program }}</td>
                                <td>
                                    <a type="button" href="{{ url('admin/school/'.$school->id.'/edit') }}" class="btn">编辑</a>
                                    <a type="button" href="{{ url('admin/school/program/'.$school->id) }}" class="btn">添加专业</a>
                                    <a type="button" class="btn" onclick="del({{ $school->id }})">删除</a>
                                </td>
                            </tr>
                        @endforeach
                        {{ $schools->render() }}

                    </table>
                </div>

            </div>
        </div>
    </div>
    <script>
        function del (s_id)
        {
            layer.confirm('您确定要删除我吗？', {
                btn: ['确定', '取消'],
            }, function() {
                $.post("{{ url('admin/school') }}/" + s_id,
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