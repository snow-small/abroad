@extends('layout.admin.layout')


@section('body')
    <body class='body'>

    @include('layout.admin.header')

    <div class="wrap">

        @include('layout.admin.side')

        <div class="wrap__main">

            @include('layout.admin.common')

            <div class="wrap__content">
                <h2 class="user__title">专业列表</h2>
                <a href="{{ url('admin/program/create') }}" class="user__title-create">添加专业</a>
                <div class="user__list">
                    <table class="table table-responsive" style="position: relative; margin-bottom: 80px;">

                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>handle</th>
                        </tr>

                        @foreach($programs as $program)
                            <tr>
                                <td>{{ $program->id }}</td>
                                <td>{{ $program->name }}</td>
                                <td>
                                    <a type="button" href="{{ url('admin/program/'.$program->id.'/edit') }}" class="btn">编辑</a>
                                </td>
                            </tr>
                        @endforeach
                        {{ $programs->render() }}

                    </table>
                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('public/admin/js/index.js') }}"></script>
    </body>
@stop