@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')
        <section class="profession">
            <h3 class="profession__notice__title">Tips:</h3>
            <p class="profession__notice__item">1. Only one test opportunity per person, please choose carefully.</p>
            <p class="profession__notice__item">2. There is no "right" and "wrong" in the questionnaire. Choose how you do it, not what you think is better.</p>
            <br>
            <p class="profession__notice__item">3. The purpose of the test is to reflect the most authentic self. Please relax and choose the one that is closer to your normal feelings or behavior.</p>
            <a href="{{ url('profession/text') }}" class="btn btn-primary btn-lg" >Got it! Start testing!</a>
        </section>
    @include('layout.user.footer')
@stop