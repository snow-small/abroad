@extends('layout.user.layout')

@section('body')
    @include('layout.user.header')

    {{--注册框--}}
    <div class="container container_img">
        <img src="{{ asset('public/user/images/text.jpg') }}" alt="" class="img-reponsive">
        <form action="{{ url('register') }}" method="post" class="form-horizontal" id="register_form">
            {{ csrf_field() }}
            <h3 class="page-header">sign up</h3>

            @include('layout.user.error')

            <div class="form-group">
                <div class="form-group-row">
                    <label for="username" class="control-label col-md-2">username</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="username"  id='username' value="{{ old('username') }}" placeholder="Please enter the user name.">
                    </div>
                </div>
                <br><br>

                <div class="form-group-row">
                    <label for="password" class="control-label col-md-2"><span>password</span></label>
                    <div class="col-md-3">
                        <input type="password" class="form-control" name='password' id='password' placeholder="Please enter the password.">
                    </div>
                </div>
                <br><br>

                <div class="form-group-row">
                    <label for="repassword" class="control-label col-md-2"><span>confirm</span></label>
                    <div class="col-md-3">
                        <input type="password" class="form-control" name='password_confirmation' id='repassword' placeholder="Please enter the confirm password.">
                    </div>
                </div>
                <br><br>

                <div class="form-group-row">
                    <label class="control-label col-md-2">sex</label>
                    <div class="col-md-4">
                        <label for="male" class="radio-inline">
                            <input type="radio" name="sex" id="male" value="male" > male
                        </label>
                        <label for="female" class="radio-inline">
                            <input type="radio" name="sex" id="female" value="female" > formale
                        </label>
                    </div>
                </div>
                <br><br>

                <div class="form-group-row">
                    <label for="phone" class="control-label col-md-2">phone</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" value="{{ old('phone') }}" name="phone"  id='phone' placeholder="Please enter your phone.">
                    </div>
                </div>
                <br><br><br>

                <div class="form-group-row">
                    <div class="col-md-2 col-md-offset-2">
                        <button class="btn btn-primary btn-lg" type="submit" style="width: 100%">sign up</button>
                        <div class="col-md-12 col-md-offset-10">
                            <br>
                            <a href="{{ url('login') }}" class="pull-right clearfix">Existing account?login</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="{{ asset('public/user/js/reg_validate.js') }}"></script>
@stop