@extends('layout.admin.layout')

@section('body')

    <body class="body">

    @include('layout.admin.header')

    <div class="wrap">
        @include('layout.admin.side')

        <div class="wrap__main">
            @include('layout.admin.common')

            <div class="wrap__content">
                <h2 class="user__list">添加管理员</h2>
                <br/>
                <form action="{{ url('admin/manage') }}" method="post" class="form-horizontal" id="register_form">
                    {{ csrf_field() }}
                    <div class="error" style="color: #c7254e;">
                        @include('layout.user.error')
                    </div>


                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="username" class="control-label col-md-2">用户名</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="username"  id='username' value="{{ old('username') }}" placeholder="请填写用户名">
                            </div>
                        </div>
                        <br><br>

                        <div class="form-group-row">
                            <label for="password" class="control-label col-md-2"><span>密  码</span></label>
                            <div class="col-md-3">
                                <input type="password" class="form-control" name='password' id='password' placeholder="请输入至少6位密码">
                            </div>
                        </div>
                        <br><br>

                        <div class="form-group-row">
                            <label for="repassword" class="control-label col-md-2"><span>确认密码</span></label>
                            <div class="col-md-3">
                                <input type="password" class="form-control" name='password_confirmation' id='repassword' placeholder="再次输入密码">
                            </div>
                        </div>

                        <br><br><br>

                        <div class="form-group-row">
                            <div class="col-md-2 col-md-offset-2">
                                <button class="btn btn-primary btn-lg" type="submit" style="width: 100%; background: #c7254e;border:1px solid #c7254e;">添  加</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <script type="text/javascript" src="{{ asset('public/admin/js/admin_validate.js') }}"></script>
        </div>

    </div>
    </body>



@stop