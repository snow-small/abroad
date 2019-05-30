@extends('layout.admin.layout')

@section('body')
    <body class="login">
        <div class="container login__wrap">
            <form action="{{ url('admin/login') }}" method="post" id="login_form" >
                {{ csrf_field() }}
                <div class="text-center login__logo">
                    <span class="glyphicon glyphicon-globe"></span>
                </div>
                <h3 class="text-center login__title">Abroad后台登录</h3>

                @include('layout.admin.error')

                <br/>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
                        <input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名">
                    </div>
                </div>
                <br/>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span> </span>
                        <input type="password" class="form-control" name="password" id="password" placeholder="请输入密码">
                    </div>
                </div>
                <br/>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn login__sub" type="submit">登 录</button>
                    </div>
                </div>

            </form>
        </div>


    </body>

    <script type="text/javascript" src="{{ asset('public/admin/js/login.js') }}"></script>
@stop