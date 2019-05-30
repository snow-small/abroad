@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')
    <body style="background:#fafafa;">
    <h2 class="apply__program">你正在申请的课程是：{{ $program->name }}</h2>
    <form action="{{ url('apply/table') . '/' . $s_id . '/' . $program->id }}" method="post" id="apply_submit" class="apply__table">
        {{ csrf_field() }}
        <div class="apply__wrap">
            <h2 class="apply__title">
                个人信息（注：<span style="color:red;font-size:20px;">*</span>为必填项）
            </h2>
            <div class="apply__line"></div>
            <section class="apply__item">
                <h2 class="apply__item__title">基本信息</h2>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="firstName" class="control-label col-md-3">姓：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="firstName"
                               id='firstName' value="{{ old('firstName') }}" placeholder="请填写姓">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="lastName" class="control-label col-md-3">名：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="lastName"
                               id='lastName' value="{{ old('lastName') }}" placeholder="请填写名">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="cName" class="control-label col-md-3">中文名：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="cName"
                               id='cName' value="{{ old('cName') }}" placeholder="请填写中文名">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="control-label col-md-3">性别：</label>

                    <label class="radio-inline">
                        <input type="radio" name="sex" value="male" > 男
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sex" value="formale"> 女
                    </label>

                    <span style="color:red;font-size:20px;">*</span>
                </div>
                <div class="form-group">
                    <label  class="control-label col-md-3">国籍：</label>
                    <div class="col-md-8">
                        <select class="form-control" name="nation" id="nation">
                            @foreach ($nations as $nation)
                                <option value="{{ $nation->name }}">{{ $nation->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <span style="color:red;font-size:20px;">*</span>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="passport" class="control-label col-md-3">护照号：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="passport"
                               id='passport' value="{{ old('passport') }}" placeholder="请填写护照号">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="begin" class="control-label col-md-3">护照日期从：</label>
                    <div class="col-md-8">
                        <input type="date" class="form-control" name="begin"
                               id='begin' value="{{ old('begin') }}">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="end" class="control-label col-md-3">护照有效期：</label>
                    <div class="col-md-8">
                        <input type="date" class="form-control" name="end"
                               id='end' value="{{ old('end') }}">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="birth" class="control-label col-md-3">出生日期：</label>
                    <div class="col-md-8">
                        <input type="date" class="form-control" name="birth"
                               id='birth' value="{{ old('birth') }}">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="birthPlace" class="control-label col-md-3">出生地：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="birthPlace"
                               id='birthPlace' value="{{ old('birthPlace') }}" placeholder="请填写出生地">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="language" class="control-label col-md-3">母语：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="language"
                               id='language' value="{{ old('language') }}" placeholder="请填写母语">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="history" class="control-label col-md-3">病史：</label>
                    <div class="col-md-8">
                        <textarea name="history" id="history" cols="5" rows="3"
                                 placeholder="请填写病史" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="control-label col-md-3">婚姻状况：</label>

                    <label class="radio-inline" style="margin-right:50px;">
                        <input type="radio" name="marry" value="no" > 否
                    </label>
                    <label class="radio-inline" style="margin-right:50px;">
                        <input type="radio" name="marry" value="yes"> 已婚
                    </label>
                    <label class="radio-inline" style="margin-right:50px;">
                        <input type="radio" name="marry" value="other"> 其它
                    </label>

                    <span style="color:red;font-size:20px;">*</span>
                </div>
                <h2 class="apply__item__title">当前联系人</h2>

                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="address" class="control-label col-md-3">通讯地址：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="address"
                               id='address' value="{{ old('address') }}" placeholder="请填写通讯地址">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="zip" class="control-label col-md-3">邮政编码：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="zip"
                               id='zip' value="{{ old('zip') }}" placeholder="请填写邮政编码">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="tel" class="control-label col-md-3">电话：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="tel"
                               id='tel' value="{{ old('tel') }}" placeholder="请填写电话">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="email" class="control-label col-md-3">邮箱：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="email"
                               id='email' value="{{ old('email') }}" placeholder="请填写邮箱">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="home" class="control-label col-md-3">住址：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="home"
                               id='home' value="{{ old('home') }}" placeholder="请填写家庭住址">
                    </div>
                </div>
                <h2 class="apply__item__title">语言资格熟练程度</h2>

                <div class="form-group">
                    <label  class="control-label col-md-3">中文掌握程度：</label>
                    <div class="col-md-8">
                        <select class="form-control" name="cLevel" id="cLevel">
                            <option value="无">无</option>
                            <option value="初学者">初学者</option>
                            <option value="高级">高级</option>
                        </select>
                    </div>
                    <span style="color:red;font-size:20px;">*</span>
                </div>
                <div class="form-group">
                    <label  class="control-label col-md-3">英语掌握程度：</label>
                    <div class="col-md-8">
                        <select class="form-control" name="eLevel" id="eLevel">
                            <option value="无">无</option>
                            <option value="较好">较好</option>
                            <option value="优秀">优秀</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="control-label col-md-3">HSK水平：</label>
                    <div class="col-md-8">
                        <select class="form-control" name="hsk" id="hsk">
                            <option value="无">无</option>
                            <option value="HSK1">HSK1</option>
                            <option value="HSK2">HSK2</option>
                            <option value="HSK3">HSK3</option>
                            <option value="HSK4">HSK4</option>
                            <option value="HSK5">HSK5</option>
                            <option value="HSK6">HSK6</option>
                        </select>
                    </div>
                    <span style="color:red;font-size:20px;">*</span>
                </div>
                <div class="form-group">
                    <label for="mark" class="control-label col-md-3">HSK分数：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="mark"
                               id='mark' value="{{ old('mark') }}" placeholder="请填写HSK分数">
                    </div>
                </div>
                <div class="form-group">
                    <label for="study" class="control-label col-md-3">学习中文：</label>
                    <div class="col-md-8">
                        <textarea name="study" id="study" cols="5" rows="3"
                                  placeholder="在哪里学习中文" class="form-control"></textarea>
                    </div>
                </div>
                <br><br><br>
                <h2 class="apply__item__title">财务担保人</h2>

                <div class="form-group">
                    <label  class="control-label col-md-3">财务来源：</label>

                    <label class="radio-inline" style="margin-right:50px;">
                        <input type="radio" name="source" value="me" > 自我支持
                    </label>
                    <label class="radio-inline" style="margin-right:50px;">
                        <input type="radio" name="source" value="ship"> 奖学金
                    </label>
                    <label class="radio-inline" style="margin-right:50px;">
                        <input type="radio" name="source" value="other"> 其它
                    </label>

                    <span style="color:red;font-size:20px;">*</span>
                </div>
                <div class="form-group">
                    <label for="sponsor" class="control-label col-md-3">赞助商名字：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="sponsor"
                               id='sponsor' value="{{ old('sponsor') }}" placeholder="请填写赞助商名字">
                    </div>
                </div>
                <div class="form-group">
                    <label for="relation" class="control-label col-md-3">与赞助商关系：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="relation"
                               id='relation' value="{{ old('relation') }}" placeholder="请填写与赞助商关系">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sAddress" class="control-label col-md-3">赞助商地址：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="sAddress"
                               id='sAddress' value="{{ old('sAddress') }}" placeholder="请填写赞助商地址">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sPhone" class="control-label col-md-3">赞助商电话：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="sPhone"
                               id='sPhone' value="{{ old('sPhone') }}" placeholder="请填写赞助商电话">
                    </div>
                </div>


            </section>

            <h2 class="apply__title">教育或职业</h2>
            <div class="apply__line"></div>
            <section class="apply__item">
                <h2 class="apply__item__title">教育或职业</h2>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="school" class="control-label col-md-3">当前学校：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="school"
                               id='school' value="{{ old('school') }}" placeholder="请填写当前学校或机构">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="occupation" class="control-label col-md-3">职业：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="occupation"
                               id='occupation' value="{{ old('occupation') }}" placeholder="请填写职业">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="highest" class="control-label col-md-3">最高学术学位：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="highest"
                               id='highest' value="{{ old('highest') }}" placeholder="请填写最高学术学位">
                    </div>
                </div>
            </section>

            <h2 class="apply__title">学习计划</h2>
            <div class="apply__line"></div>
            <section class="apply__item">
                <h2 class="apply__item__title">你打算学习多久</h2>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="sfrom" class="control-label col-md-3">从什么时候开始：</label>
                    <div class="col-md-8">
                        <input type="date" class="form-control" name="sfrom"
                               id='sfrom' value="{{ old('sfrom') }}">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="sto" class="control-label col-md-3">到什么时候结束：</label>
                    <div class="col-md-8">
                        <input type="date" class="form-control" name="sto"
                               id='sto' value="{{ old('sto') }}">
                    </div>
                </div>
            </section>

            <h2 class="apply__title">家庭成员</h2>
            <div class="apply__line"></div>
            <section class="apply__item">
                <h2 class="apply__item__title">配偶</h2>
                <div class="form-group">
                    <label for="sAge" class="control-label col-md-3">配偶年纪：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="sAge"
                               id='sAge' value="{{ old('sAge') }}" placeholder="请填写配偶年纪">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sName" class="control-label col-md-3">配偶名字：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="sName"
                               id='sName' value="{{ old('sName') }}" placeholder="请填写配偶名字">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sOccupation" class="control-label col-md-3">配偶职业：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="sOccupation"
                               id='sOccupation' value="{{ old('sOccupation') }}" placeholder="请填写配偶职业">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sTel" class="control-label col-md-3">配偶电话：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="sTel"
                               id='sTel' value="{{ old('sTel') }}" placeholder="请填写配偶电话">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sEmail" class="control-label col-md-3">配偶邮箱：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="sEmail"
                               id='sEmail' value="{{ old('sEmail') }}" placeholder="请填写配偶邮箱">
                    </div>
                </div>
                <br>
                <h2 class="apply__item__title">母亲</h2>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="mAge" class="control-label col-md-3">母亲年纪：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="mAge"
                               id='mAge' value="{{ old('mAge') }}" placeholder="请填写母亲年纪">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="mName" class="control-label col-md-3">母亲名字：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="mName"
                               id='mName' value="{{ old('mName') }}" placeholder="请填写母亲名字">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="mOccupation" class="control-label col-md-3">母亲职业：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="mOccupation"
                               id='mOccupation' value="{{ old('mOccupation') }}" placeholder="请填写母亲职业">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="mTel" class="control-label col-md-3">母亲电话：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="mTel"
                               id='mTel' value="{{ old('mTel') }}" placeholder="请填写母亲电话">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="mEmail" class="control-label col-md-3">母亲邮箱：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="mEmail"
                               id='mEmail' value="{{ old('mEmail') }}" placeholder="请填写母亲邮箱">
                    </div>
                </div>

                <h2 class="apply__item__title">父亲</h2>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="fAge" class="control-label col-md-3">父亲年纪：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="fAge"
                               id='fAge' value="{{ old('fAge') }}" placeholder="请填写父亲年纪">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="fName" class="control-label col-md-3">父亲名字：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="fName"
                               id='fName' value="{{ old('fName') }}" placeholder="请填写父亲名字">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="fOccupation" class="control-label col-md-3">父亲职业：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="fOccupation"
                               id='fOccupation' value="{{ old('fOccupation') }}" placeholder="请填写父亲职业">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="fTel" class="control-label col-md-3">父亲电话：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="fTel"
                               id='fTel' value="{{ old('fTel') }}" placeholder="请填写父亲电话">
                    </div>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="fEmail" class="control-label col-md-3">父亲邮箱：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="fEmail"
                               id='fEmail' value="{{ old('fEmail') }}" placeholder="请填写父亲邮箱">
                    </div>
                </div>
            </section>

            <h2 class="apply__title">邮寄地址</h2>
            <div class="apply__line"></div>
            <section class="apply__item">
                <h2 class="apply__item__title">邮寄地址</h2>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="city" class="control-label col-md-3">城市：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="city"
                               id='city' value="{{ old('city') }}" placeholder="请填写城市">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="control-label col-md-3">国家：</label>
                    <div class="col-md-8">
                        <select class="form-control" name="country" id="country">
                            @foreach ($nations as $nation)
                                <option value="{{ $nation->name }}">{{ $nation->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <span style="color:red;font-size:20px;">*</span>
                </div>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="detail" class="control-label col-md-3">详细地址：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="detail"
                               id='detail' value="{{ old('detail') }}" placeholder="请填写详细地址">
                    </div>
                </div>

            </section>

            <h2 class="apply__title">当前位置</h2>
            <div class="apply__line"></div>
            <section class="apply__item">
                <h2 class="apply__item__title">当前位置</h2>
                <div class="form-group">
                    <span style="color:red;font-size:20px;">*</span>
                    <label for="place" class="control-label col-md-3">当前位置：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="place"
                               id='place' value="{{ old('place') }}" placeholder="请填写当前位置">
                    </div>

                </div>
                <br>
                <div style="text-align:center;">
                    <button type="submit" class="btn btn-primary btn-lg"
                    style="margin-left:0;">下一步</button>
                </div>
                <br>
            </section>

        </div>
    </form>

    <script src="{{ asset('public/user/js/table_validate.js') }}"></script>

    </body>

    @include('layout.user.footer')
@stop