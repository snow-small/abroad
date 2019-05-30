@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')

    {{--登录框--}}
    <div class="container container_img">
        <img src="{{ asset('public/user/images/text.jpg') }}" alt="" class="img-reponsive">
        <form action="{{ url('login') }}" method="post" class="form-horizontal" id="login_form">
            {{ csrf_field() }}
            <h3 class="page-header">sign in</h3>

            @include('layout.user.error')

            <div class="form-group">
                <div class="form-group-row">
                    <label for="username" class="control-label col-md-2">username</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="username"  id='username' value="{{ old('username') }}" placeholder="Please enter user name.">
                    </div>
                </div>
                <br><br>

                <div class="form-group-row">
                    <label for="password" class="control-label col-md-2"><span>password</span></label>
                    <div class="col-md-3">
                        <input type="password" class="form-control" name='password' id='password' placeholder="Please enter password.">
                    </div>
                </div>
                <br><br>

                <div class="form-group-row">
                    <label for="code" class="control-label col-md-2">Verification code</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name='code' id='code' >
                    </div>
                    <img  src="{{ url('code') }}" style="cursor: pointer;" onclick="this.src='{{ url('code') }}?'+Math.random();" />
                </div>
                <br><br><br>

                <div class="form-group-row">
                    <div class="col-md-2 col-md-offset-2">
                        <button class="btn btn-primary btn-lg" type="submit" style="width: 100%">sign in</button>
                        <div class="col-md-12 col-md-offset-5">
                            <br>
                            <a href="{{ url('register') }}" class="pull-right clearfix">No account？register</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="{{ asset('public/user/js/log_validate.js') }}"></script>

@stop