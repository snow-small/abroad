<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {

    Route::any('/', 'AdminController@login');
    Route::any('login', 'AdminController@login');

    Route::group(['middleware' => 'admin.login'], function() {
        Route::get('logout', 'AdminController@logout');
        Route::get('index', 'AdminController@index');

        // 会员管理
        Route::resource('user', 'UserController');

        // 订单管理
        Route::get('order/apply/{o_id}', 'OrderController@apply');   // 查看申请表
        Route::resource('order', 'OrderController');

        // 管理员管理
        Route::resource('manage', 'ManageController');

        // 新闻管理
        Route::resource('news', 'NewsController');
        Route::post('news/showimage', 'NewsController@showImage');  // 上传图片
        Route::post('news/editimage', 'NewsController@editImage');   // 修改图片

        // 专业题管理
        Route::resource('profession', 'ProfessionController');

        // 省份管理
        Route::resource('province', 'ProvinceController');

        // 院校管理
        Route::resource('school', 'SchoolController');
        Route::post('school/icon', 'SchoolController@icon');   // 校徽上传
        Route::post('school/bg', 'SchoolController@bg');   // 图片上传
        Route::get('school/program/{s_id}', 'SchoolController@program');   // 添加专业
        Route::post('school/program/{s_id}', 'SchoolController@proAdd');   // 添加后的提交

        // 专业管理
        Route::resource('program', 'ProgramController');

        // 问答管理
        Route::get('question', 'QuestionController@index');   // 问答管理
        Route::delete('question/{ques_id}', 'QuestionController@destroy');   // 删除问答

    });

});