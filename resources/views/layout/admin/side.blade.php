<div class="wrap__side">
    <div class="wrap__manage">
        <h2 class="wrap__manage__people-title">
            <span class="glyphicon glyphicon-star-empty"></span>
            会员管理
        </h2>
        <ul class="wrap__manage__people-manage " style="display: block;">
            <li><a href="{{ url('admin/user') }}">会员列表</a></li>
            <li><a href="{{ url('admin/user/create') }}">添加会员</a></li>
            {{--<li><a href="javascript:;">修改会员</a></li>--}}
        </ul>
    </div>

    <div class="wrap__manage">
        <h2 class="wrap__manage__order-title" >
            <span class="   glyphicon glyphicon-usd"></span>
            订单管理
        </h2>
        <ul class="wrap__manage__order-manage" style="display: none;">
            <li><a href="{{ url('admin/order') }}">订单列表</a></li>
        </ul>
    </div>
    
    <div class="wrap__manage">
        <h2 class="wrap__manage__news-title" >
            <span class="glyphicon glyphicon-comment"></span>
            新闻管理
        </h2>
        <ul class="wrap__manage__news-manage" style="display: none;">
            <li><a href="{{ url('admin/news') }}">新闻列表</a></li>
            <li><a href="{{ url('admin/news/create') }}">添加新闻</a></li>
        </ul>
    </div>
    <div class="wrap__manage">
        <h2 class="wrap__manage__profession-title" >
            <span class="glyphicon glyphicon-list-alt"></span>
            专业题管理
        </h2>
        <ul class="wrap__manage__profession-manage" style="display: none;">
            <li><a href="{{ url('admin/profession') }}">专业题列表</a></li>
            <li><a href="{{ url('admin/profession/create') }}">添加专业题</a></li>
        </ul>
    </div>
    <div class="wrap__manage">
        <h2 class="wrap__manage__city-title" >
            <span class="glyphicon glyphicon-tag"></span>
            省份管理
        </h2>
        <ul class="wrap__manage__city-manage" style="display: none;">
            <li><a href="{{ url('admin/province') }}">省份列表</a></li>
            <li><a href="{{ url('admin/province/create') }}">添加省份</a></li>
        </ul>
    </div>
    <div class="wrap__manage">
        <h2 class="wrap__manage__program-title" >
            <span class="glyphicon glyphicon-tags"></span>
            专业管理
        </h2>
        <ul class="wrap__manage__program-manage" style="display: none;">
            <li><a href="{{ url('admin/program') }}">专业列表</a></li>
            <li><a href="{{ url('admin/program/create') }}">添加专业</a></li>
        </ul>
    </div>
    <div class="wrap__manage">
        <h2 class="wrap__manage__school-title" >
            <span class="glyphicon glyphicon-tags"></span>
            院校管理
        </h2>
        <ul class="wrap__manage__school-manage" style="display: none;">
            <li><a href="{{ url('admin/school') }}">院校列表</a></li>
            <li><a href="{{ url('admin/school/create') }}">添加院校</a></li>
        </ul>
    </div>

    <div class="wrap__manage">
        <h2 class="wrap__manage__question-title" >
            <a href="{{ url('admin/question') }}">
                <span class="glyphicon glyphicon-question-sign"></span>
                问答管理
            </a>
        </h2>

    </div>

    <div class="wrap__manage">
        <h2 class="wrap__manage__admin-title">
            <span class="glyphicon glyphicon-wrench"></span>
            管理员管理
        </h2>
        <ul class="wrap__manage__admin-manage" style="display: none;">
            <li><a href="{{ url('admin/manage') }}">管理员列表</a></li>
            <li><a href="{{ url('admin/manage/create') }}">添加管理员</a></li>
        </ul>
    </div>

</div>