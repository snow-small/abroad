@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')
    <body style="background: #fafafa;">
        <div class="container school">
            <a href="{{ url('apply/myOrder') . '/' . $user_id }}" class="btn btn-danger"
               style="position:absolute;z-index:10;right:50px;top:50px;">历史申请</a>
            <div class="school__wrap"></div>
            <div class="school__left">
                <h2>省  份</h2>
                <div class="school__line"></div>
                <ul class="school__list">
                    @foreach ($provinces as $prov)
                        <li
                            @if ($province->id == $prov->id)
                                    class="school__list__active"
                            @endif
                            onclick="change({{ $prov->id }})"
                        >
                            {{ $prov->name }}
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="school__right">
                <h2>大  学</h2>
                <h3>{{ $province->name }}</h3>
                <ul class="school__schools">
                    @foreach ($schools as $school)
                    <li><i></i>
                        <a href="{{ url('school/show').'/'.$school->id }}">{{ $school->name }}</a>
                        <span>{{ $province->name }}</span>
                    </li>
                    @endforeach
                </ul>
                {{ $schools->render() }}
            </div>
        </div>

    </body>

    <script>
        function change(p_id)
        {
            $.post("{{ url('school/change') }}/" + p_id, {
                '_token': "{{ csrf_token() }}"
            }, function (data) {
                $('body').html(data);
            })
        }
    </script>
    </body>

    @include('layout.user.footer')
@stop