@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')
    <body style="background: #fafafa;">
        <div class="question__wrap" id="back" disabled="disabled" style="display:none;"></div>
        <section class="question__form" id="showForm" style="display:none;">
            <form action="{{ url('question') }}" method="post">
                {{ csrf_field() }}
                <p>提问</p>
                <p class="question__form__close" id="formClose">x</p>
                <div class="question__form__line"></div>
                <div style="padding: 0 50px;">
                    <p>添加问题...</p><br/>
                    <input type="text" class="form-control" name="title" placeholder="请输入问题">
                </div>
                <br/><br/>
                <button type="submit" class="btn">提 问</button>
            </form>
        </section>

        <div class="question">
            <div class="question__left">
                @foreach($questions as $question)
                    <div class="question__left__item">
                        <h2 class="question__left__title">
                            <a href="{{ url('question/show') . '/' . $question->id }}">{{ $question->title }}</a>
                        </h2>
                        <div class="question__left__user">
                            <img src="{{ asset('') }}{{ $question->user->img }}" class="question__left__user__img" alt="">
                            <span class="question__left__user__name">{{ $question->user->username }}</span>
                        </div>
                        <div class="question__left__content">
                            @if(count($question->questionAnswer) > 0)
                                {{ str_limit($question->questionAnswer[0]->content, 200, '...') }}
                                <div class="question__left__bottom">
                                    <span class="glyphicon glyphicon-thumbs-up" id="up{{ $question->questionAnswer[0]->id }}" onclick="toggleUp({{ $question->questionAnswer[0]->id }})">
                                        {{ Illuminate\Support\Facades\Redis::get('questionAnswer:up:'.$question->questionAnswer[0]->id) }}赞
                                    </span>
                                    <span class="glyphicon glyphicon-thumbs-down" id="down{{ $question->questionAnswer[0]->id }}" onclick="toggleDown({{ $question->questionAnswer[0]->id }})">
                                        {{ Illuminate\Support\Facades\Redis::get('questionAnswer:down:'.$question->questionAnswer[0]->id) }}踩
                                    </span>
                                    <span class="glyphicon glyphicon-edit">
                                        {{ Illuminate\Support\Facades\Redis::get('questionAnswer:discuss:'.$question->questionAnswer[0]->id) }}评论
                                    </span>

                                </div>
                            @else
                                <p style="color:#2aabd2;">还没有人回答？？？还不快来！！</p>
                            @endif
                        </div>

                    </div>
                @endforeach

            </div>
            <div class="question__rigth">
                <a href="javascript:void(0);" class="btn" id="ask">点我提问</a>
                <div class="question__right__hot">
                    <h2 class="question__right__hot__tip">热门问答</h2>
                    <div class="question__right__hot__line"></div>
                    @foreach ($hots as $hot)
                        <div class="question__right__hot__item">
                            <h2 class="question__right__hot__title">
                                <a href="{{ url('question/show') . '/' . $hot->id }}">{{ $hot->title }}</a>
                            </h2>
                            <div class="question__left__user">
                                <img src="{{ asset('') }}{{ $hot->user->img }}" class="question__left__user__img" alt="">
                                <span class="question__left__user__name">{{ $hot->user->username }}</span>
                            </div>
                            <div class="question__right__hot__content">
                                @if(count($hot->questionAnswer) > 0)
                                    {{ str_limit($hot->questionAnswer[0]->content, 200, '...') }}
                                @else
                                    <p style="color:#2aabd2;">还没有人回答？？？还不快来！！</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <script>
            $('#ask').click(function (e) {
                e.stopPropagation();
                $('#back').css('display', 'block');
                $('#showForm').css('display', 'block');

                $('#back').bind('click', function () {
                    $('#back').css('display', 'none');
                    $('#showForm').css('display', 'none');
                })
            });
            $('#formClose').click(function (e) {
                e.stopPropagation();
                $('#back').css('display', 'none');
                $('#showForm').css('display', 'none');
            });

            var i = 0;
            var j = 0;

            function toggleUp (ques_id)
            {
                if (i%2 == 0) {
                    $.post("{{ url('question/up') }}/" + ques_id, {
                        '_token':  "{{ csrf_token() }}"
                    }, function (data) {
                       $('#up' + ques_id).html(' ' + data + '赞');
                    });
                } else {
                    $.post("{{ url('question/unUp') }}/" + ques_id, {
                        '_token':  "{{ csrf_token() }}"
                    }, function (data) {
                        $('#up' + ques_id).html(' ' + data + '赞');
                    });
                }
                i++;
            }

            function toggleDown (ques_id)
            {
                if (j%2 == 0) {
                    $.post("{{ url('question/down') }}/" + ques_id, {
                        '_token':  "{{ csrf_token() }}"
                    }, function (data) {
                        $('#down' + ques_id).html(' ' + data + '踩');
                    });
                } else {
                    $.post("{{ url('question/unDown') }}/" + ques_id, {
                        '_token':  "{{ csrf_token() }}"
                    }, function (data) {
                        $('#down' + ques_id).html(' ' + data + '踩');
                    });
                }
                j++;
            }

        </script>
    </body>

    @include('layout.user.footer')
@stop