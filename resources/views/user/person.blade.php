@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')
    <body style="background:#fafafa;">
    <div class="person">
        <form id="personForm" action="{{ url('user/person') }}" method="post">

            {{ csrf_field() }}
            <h2 class="person__title">Personal center</h2>
            @if (session()->get('person_error'))
                <p style="color:red;font-size:16px;margin-bottom:10px;" class="error">{{ session()->get('person_error') }}</p>
            @endif
            @if (session()->get('username_error'))
                <p style="color:red;font-size:16px;margin-bottom:10px;" class="error">{{ session()->get('username_error') }}</p>
            @endif
            <div class="form-group-row">
                <label for="password" class="control-label col-md-2"><span>username：</span></label>
                <div class="col-md-5">
                    <input type="text" value="{{ $user->username }}" class="form-control" name='username' id='username'>
                </div>
            </div>
            <br><br>

            <div class="form-group-row">
                <label class="control-label col-md-2">sex</label>
                <div class="col-md-8">
                    <label for="male" class="radio-inline">
                        <input type="radio" name="sex"
                               @if($user->sex == 'male') checked @endif id="male" value="male" > male
                    </label>
                    <label for="female" class="radio-inline">
                        <input type="radio" name="sex"
                               @if($user->sex == 'female') checked @endif id="female" value="female" > formale
                    </label>
                </div>
            </div>
            <br/><br/>

            <div class="form-group-row">
                <label for="password" class="control-label col-md-2"><span>password:</span></label>
                <div class="col-md-5">
                    <input type="password" class="form-control" name='password' placeholder="Please enter the correct password." id='password'>
                </div>
            </div>
            <br><br>

            <div class="form-group-row">
                <label for="password" class="control-label col-md-2"><span>phone:</span></label>
                <div class="col-md-5">
                    <input type="text" value="{{ $user->phone }}" class="form-control" name='phone' id='phone'>
                </div>
            </div>
            <br><br>

            <div class="form-group-row">
                <label for="password" class="control-label col-md-2"><span>Head portrait:</span></label>
                <img id="showImg" style="margin-top:-30px;width:100px;height:100px;border-radius:50%;" src="{{ asset('') }}{{ session('user')['img'] }}"   alt="">

                <div class="col-md-5">
                    <input type="file"  id='upload_img' >
                </div>
                <input type="hidden" name='img' id="img" value="{{ $user->img }}">
            </div>

            <button type="submit" class="btn">change</button>
        </form>
    </div>
    <script src="{{ asset('/public/user/js/person_validate.js') }}"></script>
    <script>
        $(function () {
            $("#upload_img").uploadify({
                'buttonText': '图片上传',
                'formData': {
                    '_token': "{{ csrf_token() }}"
                },
                'width': 200,
                'height': 30,
                'float': 'left',
                'swf': "{{ asset('/public/uploadify/uploadify.swf') }}",
                'uploader': "{{ url('user/img') }}",
                'onUploadSuccess': function(file, data, response) {
                    $('#showImg').attr('src', "{{ asset('') }}"+data);
                    $('#img').val(data);
                }
            });
        });

    </script>

    </body>

@stop