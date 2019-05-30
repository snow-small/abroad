@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')
    <body style="background:#fafafa;">
        <article class="school__show container">
            <div class="school__show__top">
                <img src="{{ asset('') }}{{ $school->icon }}" class="school__show__icon">
                <h2 class="school__show__name">{{ $school->name }}</h2>
                <ul class="school__show__item">
                    <li>学位课程：{{ $num }}</li>
                    <li>学生数量：{{ $school->students }}</li>
                    <li>网站：{{ $school->websit }}</li>
                </ul>
            </div>

            <div class="school__show__bottom">
                <h2 class="school__show__introduce">专业申请</h2>
                @foreach ($programs as $program)
                    <section class="school__apply">
                        <h2 class="school__apply__program">{{ $program->program }}</h2>
                        <ul class="school__apply__detail">
                            <li>学制（年）：{{ $program->duration }}</li>
                            <li>授课语言：{{ $program->language }}</li>
                            <li>学费：{{ $program->tution }}</li>
                        </ul>
                        <a href="{{ url('apply/introduce') . '/' . $school->id . '/' . $program->p_id }}">立即申请</a>
                    </section>
                @endforeach





            </div>
        </article>

        <script>
            $(function () {
                $('.school__show__top').css({
                    'background': "url({{ asset($school->bgImg) }})",
                    'paddingBottom': '50px'
                });
                var r = 1;
                $('.school__show__icon').mouseover(function () {
                    $(this).css({
                        'transform': 'rotateY(' + r*360 + 'deg)'
                    });
                    r++;
                });


            });
        </script>
    </body>

    @include('layout.user.footer')
@stop