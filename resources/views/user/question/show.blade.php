@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')
    <body style="background:#fafafa;">
        <div class="question__show">
            <div class="question__show__left">
                <div class="question__show__item">
                    <h3 class="question__show__title">{{ $question->title }}</h3>
                    @if ($question->user->id == session('user')['id'])
                        <span onclick="delQues({{ $question->id }})" style="float:right;margin:0 90px 0 0;cursor:pointer;" class="glyphicon glyphicon-trash"> 删除</span>
                    @endif
                    <span class="glyphicon glyphicon-eye-open">
                        浏览{{ Illuminate\Support\Facades\Redis::get('question:view:'.$question->id) }}次
                    </span>

                    <form action="{{ url('question/answer/' . $question->id) }}" method="post" >
                        {{ csrf_field() }}
                        <p>我有靠谱答案</p>
                        <div class="form-group">
                            <textarea name="content" class="form-control" rows="10" placeholder="请在这里编写答案......"></textarea>
                        </div>
                        <button type="submit" class="btn">提交答案</button>
                    </form>
                </div>
                <div class="question__show__left__answer">回答区</div>
                <div class="question__show__left__line"></div>
                @foreach ($question->questionAnswer as $questionAnswer)
                    <div class="question__show__left__answer__item">
                        <div class="question__show__left__answer__user">
                            <img style="float:left;width:60px;height:60px;border-radius:50%;margin-right:10px;" src="{{ asset('') }}{{ $questionAnswer->user->img }}" alt="">
                            <p style="padding-top:10px;">{{ $questionAnswer->user->username }}</p>
                            <p style="margin-top:-10px;">{{ $questionAnswer->created_at }}</p>
                        </div>
                        <div class="question__show__left__answer__content">
                            {{ $questionAnswer->content }}

                        </div>
                        <div class="question__show__left__answer__tips">
                            <span
                                    id="up{{ $questionAnswer->id }}" onclick="toggleUp({{ $questionAnswer->id }})"
                                    class="glyphicon glyphicon-thumbs-up"> {{ Illuminate\Support\Facades\Redis::get('questionAnswer:up:'.$questionAnswer->id) }}赞</span>
                            <span
                                    id="down{{ $questionAnswer->id }}" onclick="toggleDown({{ $questionAnswer->id }})"
                                    class="glyphicon glyphicon-thumbs-down"> {{ Illuminate\Support\Facades\Redis::get('questionAnswer:down:'.$questionAnswer->id) }}踩</span>
                            <span class="glyphicon glyphicon-edit"
                                  onclick="toggleDiscuss({{ $questionAnswer->id }})"> {{ Illuminate\Support\Facades\Redis::get('questionAnswer:discuss:'.$questionAnswer->id) }}评论</span>
                            @if (session('user')['id'] == $questionAnswer->user->id)
                                <span onclick="delQuesAns({{ $questionAnswer->id }})" class="glyphicon glyphicon-trash"> 删除</span>
                            @endif
                        </div>
                        <div class="question__show__left__discuss" id="discuss{{ $questionAnswer->id }}" style="display:none">
                            <form action="{{ url('question/discuss/' . $questionAnswer->id) }}" method="post">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="text" class="form-control" name="content" placeholder="写下你的评论">
                                    <span class="input-group-addon">
                                    <button style="border:none;background:#eee;" type="submit">发表评论</button>
                                </span>
                                </div>
                            </form>
                            @foreach ($questionAnswer->questionAnswerDiscuss as $questionAnswerDiscuss)
                                <div class="question__show__left__discuss__item">
                                    <div class="question__show__left__discuss__user">
                                        <img style="float:left;width:60px;height:60px;border-radius:50%;margin-right:10px;" src="{{ asset('') }}{{ $questionAnswerDiscuss->user->img }}" alt="">
                                        <p style="color: #2aabd2;">{{ $questionAnswerDiscuss->user->username }}</p>
                                        <span
                                                id="discussUp{{ $questionAnswerDiscuss->id }}" onclick="toggleDiscussUp({{ $questionAnswerDiscuss->id }})"
                                                style="float:right;margin-top:-25px;cursor:pointer;" class="glyphicon glyphicon-thumbs-up">
                                            {{ Illuminate\Support\Facades\Redis::get('questionAnswerDiscuss:up:'.$questionAnswerDiscuss->id) }}赞
                                        </span>
                                        <p style="font-size:15px;">{{ $questionAnswerDiscuss->content }}</p>
                                        <p style="margin-left:70px;color:#ccc;">{{ $questionAnswerDiscuss->created_at }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="question__show__right">
                <p>猜你想问</p>
                <div class="question__show__right__line"></div>
                <br/>
                @foreach ($loves as $love)
                    <div class="question__show__right__item">
                        <a href="{{ url('question/show') . '/' . $love->id }}">{{ $love->title }}</a>
                    </div>
                @endforeach

            </div>
        </div>

        <script>
            // 删除问题
            function delQues (ques_id)
            {
                layer.confirm('您确定要删除我吗？', {
                    btn: ['确定', '取消'],
                }, function() {
                    $.post("{{ url('question') }}/" + ques_id,
                        {
                            '_token': '{{ csrf_token() }}',
                            '_method': 'delete'
                        }, function(data) {
                            if(data.status == 0) {
                                layer.msg(data.msg, { icon: 6});
                                location.href = "{{ url('question') }}";
                            } else {
                                layer.msg(data.msg, { icon: 5});
                            }
                        });
                }, function() {});
            }

            // 删除问题答案
            function delQuesAns (ques_ans_id)
            {
                layer.confirm('您确定要删除我吗？', {
                    btn: ['确定', '取消'],
                }, function() {
                    $.post("{{ url('question/answer') }}/" + ques_ans_id,
                        {
                            '_token': '{{ csrf_token() }}',
                            '_method': 'delete'
                        }, function(data) {
                            if(data.status == 0) {
                                layer.msg(data.msg, { icon: 6});
                                location.href = location.href;
                            } else {
                                layer.msg(data.msg, { icon: 5});
                            }
                        });
                }, function() {});
            }

            // 显示和隐藏答案评论
            function toggleDiscuss (ans_id)
            {
                var discuss = document.getElementById('discuss' + ans_id);
                if ( discuss.style.display == 'none' ) {
                    discuss.style.display = 'block';
                } else {
                    discuss.style.display = 'none';
                }
            }

            var i = 0;
            var j = 0;
            var k = 0;

            // 答案点赞与取消赞
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

            // 答案踩和取消踩
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

            // 答案评论点赞和取消赞
            function toggleDiscussUp (ans_dis_id)
            {
                if (k%2 == 0) {
                    $.post("{{ url('question/discussUp') }}/" + ans_dis_id, {
                        '_token':  "{{ csrf_token() }}"
                    }, function (data) {
                        $('#discussUp' + ans_dis_id).html(' ' + data + '赞');
                    });
                } else {
                    $.post("{{ url('question/discussunUp') }}/" + ans_dis_id, {
                        '_token':  "{{ csrf_token() }}"
                    }, function (data) {
                        $('#discussUp' + ans_dis_id).html(' ' + data + '赞');
                    });
                }
                k++;
            }
        </script>
    </body>

    @include('layout.user.footer')
@stop