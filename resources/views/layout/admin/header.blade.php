<header class='header'>
    <div class="header__wrap">
        <h2 class="header__logo">ARoom</h2>

        <nav class="header__nav">
            <a href="{{ url('admin/logout') }}" class="header__nav-item">
                <span class="glyphicon glyphicon-log-out"></span>
                退出
            </a>
            <span href="javascript:void(0)" class="header__nav-item" disabled="disabled">
                <span class="glyphicon glyphicon-user"></span>
                {{ session('admin')['username'] }}
            </span>

        </nav>
    </div>
</header>