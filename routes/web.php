<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'User\UserController@index');
Route::get('/index', 'User\UserController@index');   // 首页
Route::any('/register', 'User\UserController@register');   // 注册
Route::any('/login', 'User\UserController@login');    // 登录
Route::get('/code', 'User\UserController@code');    // 验证码


Route::group(['middleware'=>'user.login'], function () {
    Route::get('/logout', 'User\UserController@logout');    // 退出
    Route::get('/user/person', 'User\UserController@person');    // 个人中心
    Route::post('/user/person', 'User\UserController@update');   // 个人修改
    Route::get('user', 'User\UserController@user');
    Route::post('/user/img', 'User\UserController@img');   // 修改头像

    Route::get('/news', 'User\NewsController@index');   // 新闻列表
    Route::get('/news/show/{new_id}', 'User\NewsController@show');   // 新闻详情

    Route::get('/profession', 'User\ProfessionController@index');   // 测试页面
    Route::get('/profession/text', 'User\ProfessionController@text');   // 测试题
    Route::post('/profession/getValue', 'User\ProfessionController@getValue');   // 测试题

    Route::get('/school', 'User\SchoolController@index');   // 院校申请首页
    Route::post('/school/change/{p_id}', 'User\SchoolController@change');   // 通过ajax改变学校
    Route::get('/school/show/{s_id}', 'User\SchoolController@show');   // 查看学校

    Route::get('/apply/introduce/{s_id}/{p_id}', 'User\ApplyController@introduce');   // 申请介绍,学校id和专业id
    Route::get('/apply/table/{s_id}/{p_id}', 'User\ApplyController@table');   // 申请表,学校id和专业id
    Route::post('/apply/table/{s_id}/{p_id}', 'User\ApplyController@store');   // 申请表后的提交,学校id和专业id
    Route::get('/apply/upload/{a_id}', 'User\ApplyController@upload');   // 上传文件,提交表单的id
    Route::post('/apply/upload', 'User\ApplyController@save');   // 上传文件的操作
    Route::get('/apply/pay/{a_id}', 'User\ApplyController@pay');   // 付款确认
    Route::get('/apply/alipay/{a_id}', 'User\ApplyController@alipay');   // 付款页
    Route::post('/apply/order', 'User\ApplyController@order');   // 付款后，订单
    Route::get('/apply/status/{o_id}', 'User\ApplyController@status');   // 状态页,订单号
    Route::delete('/apply/noOrder/{o_id}', 'User\ApplyController@noOrder');   // 取消订单
    Route::get('/apply/myOrder/{u_id}', 'User\ApplyController@myOrder');   // 历史订单，用户id


    Route::get('/job', 'User\JobController@index');   // 就业评估首页
    Route::post('/job/getValue', 'User\JobController@getValue');   // 就业结果值

    Route::get('/question', 'User\QuestionController@index');   // 问答首页
    Route::post('/question', 'User\QuestionController@store');   // 提问
    Route::delete('/question/{ques_id}', 'User\QuestionController@destroy');   // 删除问题
    Route::delete('/question/answer/{ques_id}', 'User\QuestionController@destroyAnswer');   // 删除问题答案
    Route::get('/question/show/{ques_id}', 'User\QuestionController@show');   // 问题详情
    Route::post('/question/answer/{ques_id}', 'User\QuestionController@answer');    // 问题回答
    Route::post('/question/discuss/{ans_id}', 'User\QuestionController@discuss');   // 问题答案的评论
    Route::post('/question/up/{ques_id}', 'User\QuestionController@up');   // 点赞
    Route::post('/question/unUp/{ques_id}', 'User\QuestionController@unUp');   // 取消赞
    Route::post('/question/down/{ques_id}', 'User\QuestionController@down');   // 踩
    Route::post('/question/unDown/{ques_id}', 'User\QuestionController@unDown');   // 取消踩
    Route::post('/question/discussUp/{ans_dis_id}', 'User\QuestionController@discussUp');   // 评论点赞
    Route::post('/question/discussunUp/{ans_dis_id}', 'User\QuestionController@discussunUp');   // 评论取消赞

});


require_once('admin.php');