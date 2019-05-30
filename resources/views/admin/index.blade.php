@extends('layout.admin.layout')


@section('body')
    <body class='body'>

        @include('layout.admin.header')

        <div class="wrap">

            @include('layout.admin.side')

            <div class="wrap__main">

                @include('layout.admin.common')

                <div class="wrap__content">
                    <h3 style="color:#37363e;"><strong>系统环境配置</strong></h3>
                    <br/>
                    <ul class="nav system">
                        <li>
                            <label >操作系统： </label><span>{{ PHP_OS }}</span>
                        </li>
                        <li>
                            <label>运行环境：  </label><span>{{ $_SERVER['SERVER_SOFTWARE']}}</span>
                        </li>
                        <li>
                            <label>雪儿设计-版本：  </label><span>v-0.1</span>
                        </li>
                        <li>
                            <label>上传附件限制：  </label><span>2M</span>
                        </li>
                        <li>
                            <label>北京时间：  </label><span>{{ date('Y年m月d日 H时i分s秒') }}</span>
                        </li>
                        <li>
                            <label>服务器域名/IP：  </label><span>{{ $_SERVER['SERVER_NAME']}} [ {{ $_SERVER['SERVER_ADDR'] }} ]</span>
                        </li>
                        <li>
                            <label>Host：  </label><span>{{ $_SERVER['SERVER_ADDR'] }}</span>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        <script type="text/javascript" src="{{ asset('public/admin/js/index.js') }}"></script>
    </body>
@stop