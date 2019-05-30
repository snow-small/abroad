$(function() {
    $('#login_form').submit(function() {
        var username = $('#username').val(),
            password = $('#password').val(),
            code = $('#code').val();

        if(username == '' || username.length < 0) {
            layer.tips('用户名不能为空', '#username', {time: 2000, tips: 2});
            $('#username').focus();
            return false;
        }

        if(password == '' || password.length <= 0) {
            layer.tips('密码不能为空', '#password', {time: 2000, tips: 2});
            $('#password').focus();
            return false;
        }

        if(code == '' || code.length <= 0) {
            layer.tips('验证码不能为空', '#code', {time: 2000, tips: 2});
            $('#code').focus();
            return false;
        }

        return true;
    });

});