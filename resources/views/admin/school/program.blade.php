@extends('layout.admin.layout')

@section('body')

    <body class="body">

    @include('layout.admin.header')

    <div class="wrap">
        @include('layout.admin.side')

        <div class="wrap__main">
            @include('layout.admin.common')

            <div class="wrap__content">
                <h2 class="user__list">添加专业</h2>
                <br/>
                <form action="{{ url('admin/school/program/'.$school->id) }}" method="post" class="form-horizontal" id="program_form">
                    {{ csrf_field() }}

                    <h3>{{ $school->name }}</h3>
                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="p_id" class="control-label col-md-2">选择专业</label>
                            <div class="col-md-3">
                                <select name="p_id" id="p_id" class="form-control">
                                    @foreach ($programs as $program)
                                        <option value="{{ $program->id }}">{{ $program->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="duration" class="control-label col-md-2">年份</label>
                            <div class="col-md-3">
                                <input type="text" name="duration" id="duration" value="{{ old('duration') }}"
                                       class="form-control" placeholder="几年制">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="language" class="control-label col-md-2">授课语言</label>
                            <div class="col-md-3">
                                <input type="text" name="language" id="language" value="{{ old('language') }}"
                                       class="form-control" placeholder="请写入授课语言">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="apply" class="control-label col-md-2">申请费用</label>
                            <div class="col-md-3">
                                <input type="text" name="apply" id="apply" value="{{ old('apply') }}"
                                       class="form-control" placeholder="请写入申请费用">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="tution" class="control-label col-md-2">学费</label>
                            <div class="col-md-3">
                                <input type="text" name="tution" id="tution" value="{{ old('tution') }}"
                                       class="form-control" placeholder="请写入学费">
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
            <script type="text/javascript" src="{{ asset('public/admin/js/program_validate.js') }}"></script>
        </div>

    </div>
    </body>



@stop