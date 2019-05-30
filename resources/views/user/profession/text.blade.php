@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')
    <section class="profession__text">
        <form action="{{ url('profession/getValue') }}" method="post">
            {{ csrf_field() }}
            @foreach ($professions as $profession)
                <h3 class="profession__text__title">{{ $profession->title }}：</h3>
                @foreach ($answers as $answer)
                    <div style="text-indent: 1em;">
                        <input class="radios" name="{{ $profession->name }}"
                               type="radio" value="{{ $answer['score'] }}">    {{ $answer['answer'] }}
                    </div>
                @endforeach

            @endforeach

            <div>
                <button type="submit" class="btn btn-primary btn-lg">开始测试</button>
            </div>

        </form>


    </section>

    <script>


    </script>

    @include('layout.user.footer')
@stop