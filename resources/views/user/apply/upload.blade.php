@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')
    <body style="background:#fafafa;">
    <h2 class="apply__program">你正在申请的课程是：{{ $program->name }}</h2>
    <section class="apply__notice">
        <p>注意：</p>
        <p>1.为避免延误入学，请按照左栏中的说明上传每个文件。</p>
        <p>2.请确保扫描或拍摄的文件清晰可读并可以打印。</p>
        <p>3.系统只接受以下格式的RAR，PDF，JPG，PNG，GIF，DOC，DOCX。</p>
        <p>4.单个上传文件大小不能超过5M。</p>
    </section>
    <form action="{{ url('apply/upload') }}" method="post" id="upload_submit" class="apply__upload" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="a_id" value="{{ $a_id }}">
        <h2 class="apply__title">
            上传材料（注：<span style="color:red;font-size:20px;">*</span>为必填项）
        </h2>
        <div class="apply__line"></div>
        <section class="apply__file">
            <p class="apply__file__title">
                <span style="color:red;font-size:20px;">*</span>
                1.护照照片
            </p>
            <p>申请人最近的护照照片</p>
            <div class="apply__file__wrap">
                <input type="file" name="photo" id="photo">
            </div>
        </section>

        <section class="apply__file">
            <p class="apply__file__title">
                <span style="color:red;font-size:20px;">*</span>
                2.有效护照复印件
            </p>
            <p>包含姓名，护照号码和截止日期以及照片</p>
            <div class="apply__file__wrap">
                <input type="file" name="photoCopy" id="photoCopy">
            </div>
        </section>

        <section class="apply__file">
            <p class="apply__file__title">
                3.健康证明
            </p>
            <p>公证的外国人身体检查记录的复印件（6个月以上的学习期限）</p>
            <div class="apply__file__wrap">
                <input type="file" name="health" id="health">
            </div>
        </section>

        <section class="apply__file">
            <p class="apply__file__title">
                4.HSK证书
            </p>
            <p>HSK（sdyincnese能力考试）证书，无需英语培训课程</p>
            <div class="apply__file__wrap">
                <input type="file" name="hsk" id="hsk">
            </div>
        </section>

        <section class="apply__file">
            <p class="apply__file__title">
                <span style="color:red;font-size:20px;">*</span>
                5.最高学历证书/文凭
            </p>
            <p>除sdyincnese或英语以外的其他语言的毕业证书应翻译成sdyincnese或英文，并通过公证。</p>
            <div class="apply__file__wrap">
                <input type="file" name="highest" id="highest">
            </div>
        </section>

        <section class="apply__file">
            <p class="apply__file__title">
                <span style="color:red;font-size:20px;">*</span>
                6.高等教育学术成绩单
            </p>
            <div class="apply__file__wrap">
                <input type="file" name="transcript" id="transcript">
            </div>
        </section>

        <section class="apply__file">
            <p class="apply__file__title">
                7.转校
            </p>
            <p>在中国学习并想要转入我们大学的学生必须获得原创大学的许可。</p>
            <div class="apply__file__wrap">
                <input type="file" name="latter" id="latter">
            </div>
        </section>

        <section class="apply__file">
            <p class="apply__file__title">
                8.班级申请
            </p>
            <p>对于中国的留学生，我们需要你的班级申请表。</p>
            <div class="apply__file__wrap">
                <input type="file" name="class" id="class">
            </div>
        </section>

        <section class="apply__file">
            <p class="apply__file__title">
                9.最新的签证/居留许可页面，入口盖章页
            </p>
            <p>对于已经在中国的学生，我们需要最新的签证/居留许可页面，入场印章页面副本。</p>
            <div class="apply__file__wrap">
                <input type="file" name="visa" id="visa">
            </div>
        </section>

        <section class="apply__file">
            <p class="apply__file__title">
                <span style="color:red;font-size:20px;">*</span>
                10.确认签名
            </p>
            <p>我保证我申请表中的所有信息和我的所有申请材料都是真实的。我同意上传我的签名以确认。注意：签名必须来自申请人自己。</p>
            <div class="apply__file__wrap">
                <input type="file" name="confirm" id="confirm">
            </div>
        </section>

        <div style="text-align:center;">
            <button type="submit" class="btn btn-primary btn-lg"
                    style="margin-left:-50px;">下一步</button>
        </div>

    </form>

    <script src="{{ asset('public/user/js/upload_validate.js') }}"></script>

    </body>

    @include('layout.user.footer')
@stop