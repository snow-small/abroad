@extends('layout.admin.layout')

@section('body')

    <body class="body">

    @include('layout.admin.header')

    <div class="wrap">
        @include('layout.admin.side')

        <div class="wrap__main">
            @include('layout.admin.common')

            <div class="wrap__content">
                <h2 class="user__title">新闻列表</h2>
                <a href="{{ url('admin/news/create') }}" class="user__title-create">添加文章</a>
                <br/>
                <div class="user__list">
                    <table class="table table-responsive" style="position: relative; margin-bottom: 80px;">

                        <tr>
                            <th>id</th>
                            <th>author</th>
                            <th>title</th>
                            <th>description</th>
                            <th>created_at</th>
                            <th>handle</th>
                        </tr>

                        @foreach($news as $new)
                            <tr>
                                <td>{{ $new->id }}</td>
                                <td>{{ $new->admin->username }}</td>
                                <td>{{ $new->title }}</td>
                                <td>{{ str_limit($new->description, 40, '...') }} </td>
                                <td>{{ $new->created_at }}</td>
                                <td>
                                    <a type="button" href="{{ url('news/show/'.$new->id) }}" class="btn">查看</a>
                                    <a type="button" href="{{ url('admin/news/'.$new->id.'/edit') }}" class="btn">编辑</a>
                                    <a type="button" class="btn" onclick="del({{ $new->id }})">删除</a>
                                </td>
                            </tr>
                        @endforeach
                        {{ $news->render() }}

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
                $.post("{{ url('admin/news') }}/" + art_id,
                    {
                        '_token': '{{ csrf_token() }}',
                        '_method': 'delete',
                    }, function(data) {
                        if(data.status == 0) {
                            layer.msg(data.msg, { icon: 6});
                            location.href = "{{ url('admin/news') }}";
                        } else {
                            layer.msg(data.msg, { icon: 5});
                        }
                    });
            }, function() {});
        }
    </script>
    </body>



@stop