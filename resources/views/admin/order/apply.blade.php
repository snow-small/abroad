@extends('layout.admin.layout')

@section('body')

    <body class="body">

    @include('layout.admin.header')

    <div class="wrap">
        @include('layout.admin.side')

        <div class="wrap__main">
            @include('layout.admin.common')

            <div class="wrap__content" style="padding: 20px 50px;line-height: 30px;">
               <div>申请人：{{ $user->username }}</div>
               <div>申请学校：{{ $school->name }}</div>
               <div>申请专业：{{ $program->name }}</div>
               <div><a href="{{ url('admin/order') }}" class="btn">返回</a></div>
               <div>姓：{{ $order->firstName }}</div>
               <div>名：{{ $order->lastName }}</div>
               <div>中文名：{{ $order->cName }}</div>
               <div>性别：{{ $order->sex }}</div>
               <div>国籍：{{ $order->nation }}</div>
               <div>护照号：{{ $order->passport }}</div>
               <div>护照开始时间：{{ $order->begin }}</div>
               <div>护照到期时间：{{ $order->end }}</div>
               <div>出生日期：{{ $order->birth }}</div>
               <div>出生地：{{ $order->birthPlace }}</div>
               <div>母语：{{ $order->language }}</div>
               <div>病史：{{ $order->history }}</div>
               <div>是否结婚：{{ $order->marry }}</div>
               <div>当前联系人的通讯地址：{{ $order->address }}</div>
               <div>邮政编码：{{ $order->zip }}</div>
               <div>电话：{{ $order->tel }}</div>
               <div>邮箱：{{ $order->email }}</div>
               <div>家庭地址：{{ $order->home }}</div>
               <div>中文水平：{{ $order->cLevel }}</div>
               <div>英语水平：{{ $order->eLevel }}</div>
               <div>HSK水平：{{ $order->hsk }}</div>
               <div>HSK分数：{{ $order->mark }}</div>
               <div>在哪学习中文：{{ $order->study }}</div>
               <div>生活来源：{{ $order->source }}</div>
               <div>赞助商的名字：{{ $order->sponsor }}</div>
               <div>关系：{{ $order->relation }}</div>
               <div>地址：{{ $order->cAddress }}</div>
               <div>电话：{{ $order->sPhone }}</div>
               <div>当前学校：{{ $order->school }}</div>
               <div>当前职业：{{ $order->occupation }}</div>
               <div>最高学术学位：{{ $order->highest }}</div>
               <div>从什么时候开始学习：{{ $order->sfrom }}</div>
               <div>什么时候结束：{{ $order->sto }}</div>
               <div>配偶年纪：{{ $order->sAge }}</div>
               <div>配偶名：{{ $order->sName }}</div>
               <div>配偶职业：{{ $order->sOccupation }}</div>
               <div>配偶电话：{{ $order->sTel }}</div>
               <div>配偶邮箱：{{ $order->sEmail }}</div>
               <div>母亲年龄：{{ $order->mAge }}</div>
               <div>母亲名：{{ $order->mName }}</div>
               <div>母亲职业：{{ $order->mOccupation }}</div>
               <div>母亲电话：{{ $order->mTel }}</div>
               <div>母亲邮箱：{{ $order->mEmail }}</div>
               <div>父亲年纪：{{ $order->fAge }}</div>
               <div>父亲名：{{ $order->fName }}</div>
               <div>父亲职业：{{ $order->fOccupation }}</div>
               <div>父亲电话：{{ $order->fTel }}</div>
               <div>父亲邮箱：{{ $order->fEmail }}</div>
               <div>邮寄城市：{{ $order->city }}</div>
               <div>邮寄国家：{{ $order->country }}</div>
               <div>邮寄详细地址：{{ $order->detail }}</div>
               <div>当前地址：{{ $order->place }}</div>

            </div>

        </div>

    </div>

    </body>



@stop