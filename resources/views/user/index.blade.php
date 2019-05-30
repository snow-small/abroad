@extends('layout.user.layout')

@section('body')

@include('layout.user.header')

<div class="loading">
    <img class="loading__img" src="{{ asset('/public/user/images/abroad.gif') }}" alt="">
    <div class="loading__status">
        <span class="loading__line"></span>
        <b>100%</b>
    </div>

</div>

<div class="screen-1 container">
    <div class="screen-1__wrap">
        <div id="myCarousel" class="carousel slide screen-1__img">
            <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ asset('public/user/images/car1.jpg') }}" alt="First slide">
                </div>
                <div class="item">
                    <img src="{{ asset('public/user/images/car2.jpg') }}" alt="Second slide">
                </div>
                <div class="item">
                    <img src="{{ asset('public/user/images/car3.jpg') }}" alt="Third slide">
                </div>
                <div class="item">
                    <img src="{{ asset('public/user/images/car4.jpg') }}" alt="Third slide">
                </div>
            </div>
            <!-- 轮播（Carousel）导航 -->
            <a class="carousel-control left" href="#myCarousel"
               data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel"
               data-slide="next">&rsaquo;</a>
        </div>
    </div>

</div>

<div class="screen-2">
    <h2 class="screen-2__first">First</h2>
    <h2 class="screen-2__about">about <span class='screen-2__about_us'>us</span></h2>
    <p class='screen-2__text screen-2__text-item-i-1'>
        {{--我们是基于留学数据的服务信息系统，为外国友人提供来华留学的平台--}}
        We are a service information system based on overseas study data and provide a platform for foreign friends to study in China.
    </p>
    <p class='screen-2__text screen-2__text-item-i-2'>
        We are the real students in China as the data, true and reliable.
        {{--我们以真实的来华留学生为数据，真实可靠</p>--}}
    <p class='screen-2__text screen-2__text-item-i-3'>
        We have intimate service.
        {{--我们有着贴心的服务</p>--}}

    <div class="screen-2__wrap">
        <div class="screen-2__fix screen-2__fix-item-i-1">
            <span class="glyphicon glyphicon-headphones"></span>
            <p>Considerate service</p>
        </div>
        <div class="screen-2__fix screen-2__fix-item-i-2">
            <span class="glyphicon glyphicon-home"></span>
            <p>Rich resources</p>
        </div>
        <div class="screen-2__fix screen-2__fix-item-i-3">
            <span class="glyphicon glyphicon-list-alt"></span>
            <p>professional</p>
        </div>
    </div>
</div>

<div class="screen-3">
    <h2 class="screen-3__second">Second</h2>
    <h2 class="screen-3__about">Professional<span class='screen-3__about_us'> Evaluation</span></h2>
    <img class="screen-3__img" src="{{ asset('public/user/images/second.png') }}" />
</div>

<div class="screen-5">
    <h2 class="screen-5__news">News</h2>
    <h2 class="screen-5__abroad">Abroad <span class='screen-5__abroad_news'>News</span></h2>
    <div class="screen-5__wrap">
        <div class="screen-5__img">
            <img src="{{ asset('') }}{{ $news[0]->img }}" />
        </div>
        @foreach ($news as $i=>$new)
            <div class="screen-5__art screen-5__art-item-i-{{ $i+1 }}">
                <h2 class='screen-5__art__header'>
                    <a href="{{ url('news/show/'.$new->id) }}">{{ $new->title }}</a>
                </h2>
                <p class='screen-5__art__cont'>{{ str_limit($new->description, 80, '...') }}</p>
            </div>
        @endforeach
        <div class="screen-5__more">
            <a  href="{{ url('news') }}">更多>></a>
        </div>
    </div>
</div>

@include('layout.user.footer')

<script type="text/javascript" src="{{ asset('public/user/js/animate.js') }}"></script>
<script type="text/javascript">
    $(function () {
        var img = $('img');                // 获取所有图片
        var num = 0;
        img.each(function (i) {
            var oImg = new Image();
            oImg.src = img[i].src;
            oImg.onload = function () {   // 当图片加载好后
                oImg.onload = null;   // 清除重复请求
                num++;
                $(".loading__line").css({
                    'width': parseInt(num/($('img').length)*300) + 'px'
                });
                $(".loading b").html(parseInt(num/($('img').length) * 100) + '%');  // 实时百分比
                if (num >= $('img').length) {
                    $(".loading").fadeOut();
                }
            }
        })
    });
</script>

@stop
