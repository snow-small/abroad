@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')
    <body style="background: #fafafa;">
        <article class="news__show">
            <h2 class="news__show__title">{{ $new->title }}</h2>
            <span>{{ $new->user->username }}</span>
            <span>{{ $new->created_at }}</span>
            <span class="glyphicon glyphicon-eye-open">
                浏览{{ \Illuminate\Support\Facades\Redis::get('news:view:'.$new->id) }}次
            </span>
            <div class="news__show__description">描述：{{ $new->description }}</div>
            <img src="{{ asset('') }}{{ $new->img }}" alt="" class="news__show__img">
            <div class="news__show__content">{!! $new->content !!}</div>
        </article>
    </body>

    @include('layout.user.footer')
@stop