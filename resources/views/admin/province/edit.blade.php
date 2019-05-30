@extends('layout.admin.layout')

@section('body')

    <body class="body">

    @include('layout.admin.header')

    <div class="wrap">
        @include('layout.admin.side')

        <div class="wrap__main">
            @include('layout.admin.common')

            <div class="wrap__content">
                <h2 class="user__list">编辑城市</h2>
                <br/>
                <form action="{{ url('admin/province/'.$province->id) }}" method="post" class="form-horizontal" id="province_form">
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="name" class="control-label col-md-2">省份名</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="name"
                                       id='name' value="{{ $province->name }}" placeholder="请填写省份名">
                            </div>
                            @if (session()->get('province_error'))
                                <span style="color:red;">{{ session()->get('province_error') }}</span>
                            @endif

                        </div>
                        <br><br><br>

                        <div class="form-group-row">
                            <div class="col-md-2 col-md-offset-2">
                                <button class="btn btn-primary" type="submit" style="width: 100%; background: #c7254e;border:1px solid #c7254e;">修  改</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <script type="text/javascript" src="{{ asset('public/admin/js/province_validate.js') }}"></script>
        </div>

    </div>
    </body>



@stop