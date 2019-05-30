@extends('layout.admin.layout')

@section('body')

    <body class="body">

    @include('layout.admin.header')

    <div class="wrap">
        @include('layout.admin.side')

        <div class="wrap__main">
            @include('layout.admin.common')

            <div class="wrap__content">
                <h2 class="user__list">添加院校</h2>
                <br/>
                <form action="{{ url('admin/school') }}" method="post" class="form-horizontal" id="school_form">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="name" class="control-label col-md-2">院校名</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="name"
                                       id='name' value="{{ old('name') }}" placeholder="请填写院校名">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="p_id" class="control-label col-md-2">省份名</label>
                            <div class="col-md-3">
                                <select name="p_id" id="p_id" class="form-control">
                                    @foreach ($provinces as $province)
                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="icon" class="control-label col-md-2">校徽</label>
                            <div class="col-md-5">
                                <input type="file" style="float:right;" name="icon_upload"  id='icon_upload' />
                                <img src="" id="icon_image" alt="">
                                <input type="text" style="display:none;" class="form-control" name="icon"
                                       id='icon' value="{{ old('icon') }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="bgImg" class="control-label col-md-2">背景</label>
                            <div class="col-md-5">
                                <input type="file" style="float:right;" name="bg_upload"  id='bg_upload' />
                                <img src="" id="bg_image" alt="">
                                <input type="text" style="display:none;" class="form-control" name="bgImg"
                                       id='bgImg' value="{{ old('bgImg') }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="students" class="control-label col-md-2">人数</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="students"
                                       id='students' value="{{ old('students') }}" placeholder="请填写人数">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="websit" class="control-label col-md-2">网址</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="websit"
                                       id='websit' value="{{ old('websit') }}" placeholder="请填写网址">
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
            <script>
                $(function () {
                    $("#icon_upload").uploadify({
                        'buttonText': '图片上传',
                        'formData': {
                            '_token': "{{ csrf_token() }}"
                        },
                        'width': 200,
                        'height': 30,
                        'float': 'left',
                        'swf': "{{ asset('/public/uploadify/uploadify.swf') }}",
                        'uploader': "{{ url('admin/school/icon') }}",
                        'onUploadSuccess': function(file, data, response) {
                            $("#icon_image").attr('src', "../../" + data);
                            $("#icon_image").css({
                                width: '50px',
                                height: '50px',
                                paddingBottom: '10px'
                            });
                            $('input[name=icon]').css({
                                display: 'block'
                            });
                            $('input[name=icon]').val(data);

                        }
                    });

                    $("#bg_upload").uploadify({
                        'buttonText': '图片上传',
                        'formData': {
                            '_token': "{{ csrf_token() }}"
                        },
                        'width': 200,
                        'height': 30,
                        'float': 'left',
                        'swf': "{{ asset('/public/uploadify/uploadify.swf') }}",
                        'uploader': "{{ url('admin/school/bg') }}",
                        'onUploadSuccess': function(file, data, response) {
                            $("#bg_image").attr('src', "../../" + data);
                            $("#bg_image").css({
                                width: '150px',
                                height: '50px',
                                paddingBottom: '10px'
                            });
                            $('input[name=bgImg]').css({
                                display: 'block'
                            });
                            $('input[name=bgImg]').val(data);

                        }
                    });

                });
            </script>
            <script type="text/javascript" src="{{ asset('public/admin/js/school_validate.js') }}"></script>
        </div>

    </div>
    </body>



@stop