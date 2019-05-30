@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')
    <body style="background:#fafafa;">
    <section class="apply__status">
        <h2 class="apply__status__title">
            我的申请
            <div class="apply__status__status">

                <div class="apply__status__line-active"></div>

                <span class="apply__status__description">{{ $statusTotal[0]->name }}</span>
                <span class="apply__status__circle apply__status__circle-active"></span>
                <span class="apply__status__dot apply__status__dot-active"></span>

                <span class="apply__status__description">{{ $statusTotal[1]->name }}</span>
                <span class="apply__status__circle apply__status__circle-active"></span>
                <span class="apply__status__dot
                @if($status->id == 4 || $status->id == 5 || $status->id == 7 || $status->id == 6)
                    apply__status__dot-active
                @endif"></span>
                @if($status->id == 3)
                    <span class="apply__status__fail-1">x</span>
                @endif


                <span class="apply__status__description">{{ $statusTotal[3]->name }}</span>
                <span class="apply__status__circle
                @if($status->id == 4 || $status->id == 5 || $status->id == 7 || $status->id == 6)
                    apply__status__circle-active
                @endif"></span>
                <span class="apply__status__dot
                @if($status->id == 5 || $status->id == 7 || $status->id == 6)
                    apply__status__dot-active
                @endif"></span>

                <span class="apply__status__description ">{{ $statusTotal[4]->name }} </span>
                <span class="apply__status__circle
                @if($status->id == 5 || $status->id == 7 || $status->id == 6)
                    apply__status__circle-active
                @endif"></span>
                <span class="apply__status__dot
                @if($status->id == 7)
                    apply__status__dot-active
                @endif"></span>
                @if($status->id == 6)
                    <span class="apply__status__fail-2">x</span>
                @endif

                <span class="apply__status__description">{{ $statusTotal[6]->name }} </span>
                <span class="apply__status__circle
                @if($status->id == 7)
                    apply__status__circle-active
                @endif"></span>
                <span class="apply__status__dot apply__status__dot-active"></span>


            </div>

        </h2>
        <div class="apply__line"></div>
        <div class="apply__border">
            <table class="table table-hover apply__status__table">
                <tr>
                    <th>学校</th>
                    <th>专业</th>
                    <th>申请费用</th>
                    <th>状态</th>
                    <th>说明</th>
                    <th>最近更新</th>
                </tr>
                <tr>
                    <td>{{ $school->name }}</td>
                    <td>{{ $program->name }}</td>
                    <td>{{ $schoolProgram->apply }}</td>
                    <td style="color:red;">{{ $status->name }}</td>
                    <td>
                        {{ $order->description }}
                        @if ($order->status == 3 || $order->status == 6)
                            <a onclick="delOrder({{ $order->id }})"
                               class="btn">重新申请</a>
                        @endif
                    </td>
                    <td>{{ $order->updated_at }}</td>
                </tr>
            </table>
        </div>
    </section>

    <section class="apply__old">
        <h2 class="apply__old__title" style="color:#aaa;">
            历史申请
        </h2>
        <div class="apply__line"></div>
        <div class="apply__border">
            <table class="table table-hover apply__status__table">
                <tr>
                    <th>学校</th>
                    <th>专业</th>
                    <th>申请费用</th>
                    <th>状态</th>
                    <th>说明</th>
                    <th>最近更新</th>
                </tr>
                @foreach ($olds as $old)
                    <tr style="background:#fff;height: 20px;">
                        <td>{{ $old->oldSchool->name }}</td>
                        <td>{{ $old->oldProgram->name }}</td>
                        <td>{{ $old->oldSchoolProgram->apply }}</td>
                        <td style="color:red;">{{ $old->oldStatus->name }}</td>
                        <td>
                            {{ $old->description }}
                        </td>
                        <td>{{ $old->updated_at }}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </section>
    
    <script type="text/javascript">
        function delOrder(o_id)
        {
            layer.confirm('您确定要重新申请？', {
                btn: ['确定', '取消'],
            }, function() {
                $.post("{{ url('apply/noOrder') }}/" + o_id,
                    {
                        '_token': '{{ csrf_token() }}',
                        '_method': 'delete',
                    }, function(data) {
                        if(data.status == 0) {
                            layer.msg(data.msg, { icon: 6});
                            location.href = "{{ url('school') }}";
                        } else {
                            layer.msg(data.msg, { icon: 5});
                        }
                    });
            }, function() {});
        }
        $(function () {
            if ( {{ $status->id}} == 3 || {{ $status->id}} == 4) {
                $('.apply__status__line-active').css({
                    'width': '240px'
                });
            }
            if ( {{ $status->id}} == 5) {
                $('.apply__status__line-active').css({
                    'width': '360px'
                });
            }
            if ( {{ $status->id}} == 6 || {{ $status->id}} == 7) {
                $('.apply__status__line-active').css({
                    'width': '480px'
                });
            }
        });
    </script>

    </body>

    @include('layout.user.footer')
@stop