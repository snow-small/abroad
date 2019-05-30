@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')
    <body style="background:#fafafa;">
    <h2 class="apply__program">The course you are applying：{{ $program->name }}</h2>
    <section class="profession" style="margin: 100px auto;">
        <h3 class="profession__notice__title">Tips: there will be 4 main parts for you to complete online application.</h3>
        <p class="profession__notice__item">1. Fill in the online application form.</p>
        <p class="profession__notice__item">2. Upload the required application materials.</p>
        <p class="profession__notice__item">3. Payment application fee.</p>
        <p class="profession__notice__item">4. Submit your application to the university.</p>
        <a href="{{ url('apply/table') . '/' .  $s_id  . '/' . $program->id }}"
           style="margin-top:20px;" class="btn btn-primary btn-lg" >Got it! Get started!</a>
    </section>


    </body>

    @include('layout.user.footer')
@stop