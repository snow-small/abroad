<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;

class UserController extends Controller
{
    // get admin/user/ 全部列表
    public function index()
    {
        $users = User::orderBy('reg_time', 'desc') -> paginate(5);
        return view('admin.user.list', compact('users'));
    }

    // get admin/user/create 添加
    public function create()
    {
        return view('admin.user.create');
    }

    // post admin/user/ 添加后的提交
    public function store(Request $request)
    {
        // 验证
        $this -> validate($request, [
            'username' => 'required|unique:user,username',
            'password' => 'required|min:6|confirmed',
            'sex' => 'required',
            'phone' => 'required'
        ]);
        // 逻辑
        $request = $request -> except('_token', 'password_confirmation');
        $request['reg_time'] = time();
        $request['password'] = md5($request['password']);

        if(User::where(['username' => $request['username']]) -> first()) {
            return back() -> with('username_error', '用户名已被占用');
        }
        $res = User::create($request);

        // 渲染
        if($res) {
            return redirect('admin/user');
        }
    }

    // get admin/user/{user}/edit 编辑
    public function edit($user_id)
    {
        $user = User::find($user_id);
        return view('admin.user.edit', compact('user'));
    }

    // put admin/user/{user} 编辑后的提交
    public function update(Request $request, $user_id)
    {
        // 验证
        $this -> validate($request, [
            'username' => 'required',
            'password' => 'required|min:6|confirmed',
            'sex' => 'required',
            'phone' => 'required'
        ]);
        // 逻辑
        $request = $request -> except('_token', 'password_confirmation', '_method');
        $request['password'] = md5($request['password']);

        $user = User::where('id', $user_id) ->first();

        if($user->username != $request['username'] && User::where(['username' => $request['username']]) -> first()) {
            return back() -> with('username_error', '用户名已被占用');
        }
        $res = User::where('id', $user_id)->update($request);
        // 渲染
        if($res) {
            return redirect('admin/user');
        } else {
            return redirect('admin/user');
        }
    }

    // delete admin/user/{user} 删除
    public function destroy($user_id)
    {

        $res = User::where('id', $user_id)->update(['is_delete' => 1]);

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
