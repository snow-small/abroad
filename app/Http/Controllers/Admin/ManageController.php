<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin;

class ManageController extends Controller
{
    // get admin/manage/ 全部列表
    public function index()
    {
        $admins = Admin::orderBy('login_time', 'desc')->paginate(5);
        return view('admin.manage.list', compact('admins'));
    }

    // get admin/manage/create 添加
    public function create()
    {
        return view('admin.manage.create');
    }

    // post admin/manage/ 添加后的提交
    public function store(Request $request)
    {
        // 验证
        $this -> validate($request, [
            'username' => 'required|unique:admin,username',
            'password' => 'required|min:6|confirmed',
        ]);
        // 逻辑
        $request = $request -> except('_token', 'password_confirmation');
        $request['reg_time'] = time();
        $request['password'] = md5($request['password']);

        if(Admin::where(['username' => $request['username']]) -> first()) {
            return back() -> with('username_error', '用户名已被占用');
        }
        $res = Admin::create($request);

        // 渲染
        if($res) {
            return redirect('admin/manage');
        }
    }

    // get admin/manage/{user}/edit 编辑
    public function edit($admin_id)
    {
        $admin = Admin::find($admin_id);
        return view('admin.manage.edit', compact('admin'));
    }

    // put admin/manage/{user} 编辑后的提交
    public function update(Request $request, $admin_id)
    {
        // 验证
        $this -> validate($request, [
            'username' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);
        // 逻辑
        $request = $request -> except('_token', 'password_confirmation', '_method');
        $request['password'] = md5($request['password']);

        $admin = Admin::where('id', $admin_id) ->first();

        if($admin->username != $request['username'] && Admin::where(['username' => $request['username']]) -> first()) {
            return back() -> with('username_error', '用户名已被占用');
        }
        $res = Admin::where('id', $admin_id)->update($request);
        // 渲染
        if($res) {
            return redirect('admin/manage');
        } else {
            return redirect('admin/manage');
        }
    }

    // delete admin/manage/{user} 删除
    public function destroy($admin_id)
    {
        $res = Admin::where('id', $admin_id)->delete();

        if($res) {
            $data = [
                'status' => 0,
                'msg' => '删除成功'
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '删除失败'
            ];
        }

        return $data;
    }
}
