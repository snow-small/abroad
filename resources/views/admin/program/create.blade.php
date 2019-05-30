@extends('layout.admin.layout')

@section('body')

    <body class="body">

    @include('layout.admin.header')

    <div class="wrap">
        @include('layout.admin.side')

        <div class="wrap__main">
            @include('layout.admin.common')

            <div class="wrap__content">
                <h2 class="user__list">添加专业</h2>
                <br/>
                <form action="{{ url('admin/program') }}" method="post" class="form-horizontal" id="program_form">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="name" class="control-label col-md-2">专业名</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="name"
                                       id='name' value="{{ old('name') }}" placeholder="请填写专业名">
                            </div>
                        </div>
                        <br><br><br>

                        <div class="form-group-row">
                            <div class="col-md-2 col-md-offset-2">
                                <button class="btn btn-primary" type="submit" style="width: 100%; background: #c7254e;border:1px solid #c7254e;">添  加</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script>
        $(function () {
            $('#program_form').submit(function () {
                var name = $('#name').val();
                if (name == '' || name.length < 0) {
                    layer.tips('名称不能为空', '#name', {time: 2000, tips: 2});
                    $('#name').focus();
                    return false;
                }

                return true;
            });
        });
    </script>
    </body>



@stop