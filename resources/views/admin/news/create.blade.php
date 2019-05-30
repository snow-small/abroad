@extends('layout.admin.layout')

@section('body')

    <body class="body">

    @include('layout.admin.header')

    <div class="wrap">
        @include('layout.admin.side')

        <div class="wrap__main">
            @include('layout.admin.common')

            <div class="wrap__content">
                <h2 class="user__list">添加新闻</h2>
                <br/>
                <form action="{{ url('admin/news') }}" method="post" class="form-horizontal" id="news_form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="error" style="color: #c7254e;">
                        @include('layout.admin.error')
                    </div>

                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="title" class="control-label col-md-2">标 题</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="title"  id='title' value="{{ old('title') }}" placeholder="请填写标题">
                            </div>
                        </div>
                        <br/><br/><br/>

                        <div class="form-group-row" >
                            <img src="" id="show_image">
                        </div>

                        <div class="form-group-row">
                            <label for="img" class="control-label col-md-2">缩略图</label>
                            <div class="col-md-9">
                                <input type="text" style="width:400px;margin-bottom:20px;display:none;" name="img" id="img" class="form-control" />
                                <input type="file" style="float:right;" name="file_upload"  id='file_upload' />
                            </div>
                        </div>

                        <br/><br/><br/><br/><br/><br/>
                        <div class="form-group-row">
                            <label for="description" class="control-label col-md-2">描 述</label>
                            <div class="col-md-9">
                                <textarea name="description" id="description"  class="form-control"
                                          value="{{ old('description') }}" cols="10" rows="3"
                                          placeholder="请添加描述"></textarea>
                            </div>
                        </div>


                        <div class="form-group-row" >
                            <label for="content" class="control-label col-md-2"><span>内 容</span></label>
                            <script type="text/plain" id="editor" name="content"></script>
                        </div>
                        <br>
                        <div class="form-group-row">
                            <div class="col-md-2 col-md-offset-5">
                                <button class="btn btn-primary btn-lg" type="submit" style="width: 100%; background: #c7254e;border:1px solid #c7254e;">添  加</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $("#file_upload").uploadify({
                'buttonText': '图片上传',
                'formData': {
                    '_token': "{{ csrf_token() }}"
                },
                'width': 200,
                'height': 30,
                'float': 'left',
                'swf': "{{ asset('/public/uploadify/uploadify.swf') }}",
                'uploader': "{{ url('admin/news/showimage') }}",
                'onUploadSuccess': function(file, data, response) {
                    $("#show_image").attr('src', "../../" + data);
                    $("#show_image").css({
                        width: '300px',
                        heigth: '150px',
                        marginLeft: '200px',
                        padding: '20px'
                    });
                    $('input[name=img]').css({
                        display: 'block'
                    });
                    $('input[name=img]').val(data);
                   // $('input[name=img]').attr('disabled', 'disabled');
                }
            });
            $('#editor').css({
                width: '800px',
                height: '300px',
                margin: '160px 0 0 200px'
            });
            var ue = UE.getEditor('editor');

        });
    </script>
    <script type="text/javascript" src="{{ asset('public/admin/js/news_validate.js') }}"></script>

    </body>



@stop