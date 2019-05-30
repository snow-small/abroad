@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')
    <body style="background: #fafafa;">
        <div class="news">
            <section class="news__left">
                @foreach ($news as $new)
                    <div class="news__left__item">
                        <h2 class="news__left__title">
                            <a href="{{ url('news/show/'.$new->id) }}">{{ $new->title }}</a>
                        </h2>
                        <p class="news__left__date">{{ $new->created_at }}</p>
                        <div class="news__left__contain">
                            <div class="news__left__description">
                                {{ str_limit($new->description, 250, '...') }}
                            </div>
                            <img src="{{ asset('') }}{{ $new->img }}" alt="">
                        </div>
                    </div>
                @endforeach

            </section>

            <section class="news__right">
                <div class="news__right__love">
                    <p>猜你想看</p>
                    <div class="news__right__line"></div>
                </div>
                @foreach ($loves as $love)
                    <div class="news__right__item">
                        <h2 class="news__left__title">
                            <a href="{{ url('news/show/'.$love->id) }}">{{ $love->title }}</a>
                        </h2>
                        <span class="news__left__date">{{ $love->created_at }}</span>
                        <span class="glyphicon glyphicon-eye-open">
                            浏览{{ \Illuminate\Support\Facades\Redis::get('news:view:'.$love->id) }}次
                        </span>
                    </div>
                @endforeach

            </section>

        </div>
    </body>

    @include('layout.user.footer')
@stop