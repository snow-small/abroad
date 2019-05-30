<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('public/admin/css/login.css')}}">
    <link rel="stylesheet" href="{{ asset('public/admin/css/index.css')}}">
    <link rel="stylesheet" href="{{ asset('public/admin/css/user_list.css')}}">
    <link rel="stylesheet" href="{{ asset('public/admin/css/order.css')}}">
    <link rel="stylesheet" href="{{ asset('public/boot/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('/public/uploadify/uploadify.css')}}">
    <script type="text/javascript" src="{{ asset('public/boot/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/boot/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/uploadify/jquery.uploadify.min.js') }}"></script>
    <script type="text/javascript">window.UEDITOR_HOME_URL = "{{ asset('resources/org/ueditor') }}/";</script>
    <script type="text/javascript" src="{{ asset('/resources/org/ueditor/ueditor.config.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/resources/org/ueditor/ueditor.all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/org/layer/layer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/admin/js/index.js') }}"></script>

</head>


    @yield('body')


</html>