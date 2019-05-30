<header class='header'>
    <div class='header__wrap'>
        <div class="header__logo">Abroad</div>

        <nav class="header__nav">
            <a href="{{ url('index') }}" style='' class="header__nav-item {{ url() -> current() == url('index')||url() -> current() == url('/')?'header__nav-item_status_active header__nav-item_tip':'' }}  ">&nbsp;&nbsp;Home</a>
            <a href="{{ url('profession') }}" class="header__nav-item {{ url() -> current() == url('profession')||url() -> current() == url('profession/text')?'header__nav-item_status_active header__nav-item_tip':'' }} header__nav-item_tip">
                专业评测
            </a>
            <a href="{{ url('school') }}" class="header__nav-item header__nav-item_tip {{ url() -> current() == url('school')?'header__nav-item_status_active header__nav-item_tip':'' }}">院校申请</a>
            <a href="{{ url('job') }}" class="header__nav-item header__nav-item_tip {{ url() -> current() == url('job')?'header__nav-item_status_active header__nav-item_tip':'' }}">就业评估</a>
            <a href="{{ url('question') }}" class="header__nav-item header__nav-item_tip
                {{ url() -> current() == url('question')?'header__nav-item_status_active header__nav-item_tip':'' }}"
            >问答社区</a>

            @if(empty(session('user')))
                <a href="{{ url('login') }}" style="width: 120px;" class="header__nav-item header__nav-item_right {{ url() -> current() == url('login')?'header__nav-item_status_active':'' }}">
                    <span class="glyphicon glyphicon-user"></span>
                    sign in
                </a>
            @else
                <a href="{{ url('user/person') }}" style="width: 120px;" class="header__nav-item header__nav-item_right {{ url() -> current() == url('login')?'header__nav-item_status_active':'' }}">
                    <img style="width:40px;height:40px;border-radius:50%;" src="{{ asset('') }}{{ session('user')['img'] }}"   alt="">
                    {{ session('user')['username'] }}
                </a>

            @endif


            @if(empty(session('user')['username']))
                <a href="{{ url('register') }}" style="width: 120px;" class="header__nav-item  {{ url() -> current() == url('register')?'header__nav-item_status_active':'' }}">
                    <span class="glyphicon glyphicon-log-in"></span>
                        sign up
                </a>
            @else
                <a href="{{ url('logout') }}" class="header__nav-item  {{ url() -> current() == url('logout')?'header__nav-item_status_active':'' }}">
                    <span class="glyphicon glyphicon-log-out"></span>
                    exit
                </a>
            @endif


            <div class="{{
                url()->current() == url('/') ||
                url()->current() == url('/index') ?
                'header__nav-tip' : ''
             }}"></div>
            {{--<div class="{{ url() -> current() == url('login') || url() -> current() == url('register')?'':'header__nav-tip' }}"></div>--}}
        </nav>
    </div>
</header>