@extends('layout.admin.layout')


@section('body')
    <body class='body'>

    @include('layout.admin.header')

    <div class="wrap">

        @include('layout.admin.side')

        <div class="wrap__main">

            @include('layout.admin.common')

            <div class="wrap__content">
                <h2 class="user__title">问答列表</h2>
                <div class="user__list">
                    <table class="table table-responsive" style="position: relative; margin-bottom: 80px;">

                        <tr>
                            <th>id</th>
                            <th>author</th>
                            <th>title</th>
                            <th>created_at</th>
                            <th>handle</th>
                        </tr>

                        @foreach($questions as $question)
                            <tr>
                                <td>{{ $question->id }}</td>
                                <td>{{ $question->user->username }}</td>
                                <td>{{ $question->title }}</td>
                                <td>{{ $question->created_at }}</td>
                                <td>
                                    <a type="button" href="{{ url('question/show/'.$question->id) }}" class="btn">查看</a>
                                    <a type="button" class="btn" onclick="del({{ $question->id }})">删除</a>
                                </td>
                            </tr>
                        @endforeach
                        {{ $questions->render() }}

                    </table>
                </div>

            </div>
        </div>
    </div>
    <script>
        function del (ques_id)
        {
            layer.confirm('您确定要删除我吗？', {
                btn: ['确定', '取消'],
            }, function() {
                $.post("{{ url('admin/question') }}/" + ques_id,
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