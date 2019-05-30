@extends('layout.admin.layout')

@section('body')

    <body class="body">

    @include('layout.admin.header')

    <div class="wrap">
        @include('layout.admin.side')

        <div class="wrap__main">
            @include('layout.admin.common')

            <div class="wrap__content">
                <h2 class="user__list">修改状态</h2>
                <br/>
                <form action="{{ url('admin/order/' . $order->id) }}" method="post" class="form-horizontal" id="order_form">
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div class="form-group">
                        <label for="status" class="control-label col-md-2">状态：</label>
                        <div class="col-md-5">
                            <select class="form-control" name="status" id="status">
                                @foreach ($status as $item)
                                    <option value="{{ $item->id }}"
                                    @if ($order->status == $item->id) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="form-group-row">
                            <label for="description" class="control-label col-md-2">描述：</label>
                            <div class="col-md-5">
                                <textarea cols="5" rows="3" type="text" class="form-control" name="description"
                                          id='description' >{{ $order->description }}</textarea>
                            </div>
                        </div>
                        <br><br><br><br><br>

                        <div class="form-group-row">
                            <div class="col-md-2 col-md-offset-2">
                                <button class="btn btn-primary" type="submit" style="width: 100%; background: #c7254e;border:1px solid #c7254e;">修  改</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script>
        $(function () {
            $('#order_form').submit(function () {
                var status = $('#status').val();
                if (status == '' || status.length < 0) {
                    layer.tips('状态不能为空', '#status', {time: 2000, tips: 2});
                    $('#status').focus();
                    return false;
                }

                var description = $('#description').val();
                if (description == '' || description.length < 0) {
                    layer.tips('描述不能为空', '#description', {time: 2000, tips: 2});
                    $('#description').focus();
                    return false;
                }

                return true;
            });
        });
    </script>
    </body>



@stop