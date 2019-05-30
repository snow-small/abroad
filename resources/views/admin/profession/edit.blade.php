@extends('layout.admin.layout')

@section('body')

    <body class="body">

    @include('layout.admin.header')

    <div class="wrap">
        @include('layout.admin.side')

        <div class="wrap__main">
            @include('layout.admin.common')

            <div class="wrap__content">
                <h2 class="user__list">修改专业题</h2>
                <br/>
                <form action="{{ url('admin/profession/'.$profession->id) }}" method="post" class="form-horizontal" id="profession_form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="title" class="control-label col-md-2">标 题</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="title"
                                       id='title' value="{{ $profession->title }}"
                                       placeholder="请填写标题">
                            </div>
                            @if ($errors -> first('title'))
                                <span style="color:red;">{{ $errors->first('title') }}</span>
                            @endif

                        </div>

                        <br/><br/><br/>

                        <div class="form-group-row">
                            <label for="name" class="control-label col-md-2">name</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="name" id="name"
                                       placeholder="请输入name" value="{{ $profession->name }}">
                            </div>
                            @if ($errors -> first('name'))
                                <span style="color:red;">{{ $errors->first('name') }}</span>
                            @endif

                            @if (session()->get('name_error'))
                                <span style="color:red;">{{ $session()->get('name_error') }}</span>
                            @endif
                        </div>

                        <br/><br/><br/>
                        <div class="form-group-row">
                            <div class="col-md-2 col-md-offset-3">
                                <button class="btn btn-primary btn-lg" type="submit" style="width: 100%; background: #c7254e;border:1px solid #c7254e;">修  改</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>

    </script>
    <script type="text/javascript" src="{{ asset('public/admin/js/profession_validate.js') }}"></script>

    </body>



@stop