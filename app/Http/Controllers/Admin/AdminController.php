<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin;

class AdminController extends Controller
{
    /**
     * 首页
     * 后台登录首页
     *
     * @return 后台首页
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * 登录
     * 后台登录，及对用户进行验证
     *
     * @params object $request 用户的信息
     * @return 后台首页
     */
    public function login(Request $request)
    {
        if($request -> isMethod('post')) {
            // 验证
            $this -> validate($request, [
                'username' => 'required',
                'password' => 'required|min:6'
            ]);
            // 逻辑
            $res = Admin::where([
                'username' => $request['username'],
                'password' => md5($request['password'])
            ]) -> first();
            // 渲染
            if($res) {
                $admin = Admin::where(['id' => $res['id']]) -> first();
                $admin -> login_time = time();
                $admin -> save();

                session(['admin' => $admin]);
                return redirect('admin/index');
            }
        }

        return view('admin.login');
    }

    /**
     * 登出
     * 后台用户退出登录
     *
     * @return 后台首页
     */
    public function logout()
    {
        session(['admin' => null]);
        return redirect('admin/index');
    }
}
