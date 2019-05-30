$(function() {
    $('#register_form').submit(function() {
        var username = $('#username').val(),
            password = $('#password').val(),
            repassword = $('#repassword').val(),
            phone = $('#phone').val();

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


        if (repassword == '' || repassword.length <= 0 || (password != repassword)) {
            layer.tips('两次密码输入不一致', '#repassword', {time: 2000, tips: 2});
            $('#repassword').focus();
            return false;
        }

        if(phone == '' || phone.length <= 0) {
            layer.tips('手机号不能为空', '#phone', {time: 2000, tips: 2});
            $('#phone').focus();
            return false;
        }

        return true;
    });
});