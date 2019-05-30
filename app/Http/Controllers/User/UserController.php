<?php

namespace App\Http\Controllers\User;

use App\Model\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;

require_once 'resources\org\code\Code.class.php';

class UserController extends Controller
{
    /**
     * 前台首页
     * 前台登陆后的展示页面
     *
     * @return 首页
     */
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->take(3)->get();
       // dd($news);
        return view('user.index', compact('news'));
    }

    /**
     * 注册页面及处理
     * 用于显示用户注册的页面和处理数据
     *
     * @params object $request用户数据
     * @return 注册页面或登录页面
    */
    public function register(Request $request)
    {
        if($request -> isMethod('post')) {
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
                return redirect('login');
            }
        }
        return view('user.register');
    }

    /**
     * 登录页面及处理
     * 用于显示登录页面及数据处理
     *
     * @params object $request 用户提交的数据
     * @return 前台首页
     */
    public function login(Request $request)
    {
        if($request -> isMethod('post')) {
            // 验证
            $this -> validate($request, [
                'username' => 'required',
                'password' => 'required|min:6',
                'code' => 'required'
            ]);
            // 逻辑
            $request = $request -> except('_token');

            $code = new \Code();
            $code = $code -> get();

            if(strtolower($request['code']) != strtolower($code)) {
                return back() -> with('code_error', '验证码错误');
            }

            $res = User::where([
                'username' => $request['username'],
                'password' => md5($request['password'])]) -> first();

            // 渲染
            if($res) {
                session(['user' => $res]);
                return redirect('index');
            } else {
                return back() -> with('user_error', '用户不存在,请先注册');
            }
        }

        return view('user.login');
    }

    /**
     * 退出登录
     *
     * @return 跳到首页
     */
    public function logout()
    {
        session(['user' => null]);
        return redirect('index');
    }

    /**
     * 得到验证码
     *
     */
    public function code()
    {
        $code = new \Code();
        $code -> make();
    }

    public function person ()
    {
        $user = session('user');
        return view('user.person', compact('user'));
    }

    public function update (Request $request)
    {
        $request = $request->except('_token');
        $request['reg_time'] = time();
        $request['password'] = md5($request['password']);
        // dd($request['password'],session('user')['password'] );
        if ($request['password'] != session('user')['password']) {
            return back()->with('person_error', '密码填写错误');
        }
        if($request['username'] != session('user')['username'] && User::where(['username' => $request['username']]) -> first()) {
            return back() -> with('username_error', '用户名已被占用');
        }

        $res = User::find(session('user')['id'])->update($request);
        if ($res) {
            session(['user' => User::find(session('user')['id'])]);
            return redirect('index');
        }

    }

    public function img (Request $request)
    {
        if ($request->hasFile('Filedata')) {
            $file = $request->file('Filedata');
            if ($file->isValid()) {
                $newName = time() . mt_rand(100000, 999999) . $file->getClientOriginalName();
                $res = $file->move('upload/userImg', $newName);
                if ($res) {
                    return 'upload/userImg' . '/' . $newName;
                }
            }

        }
    }

    public function user ()
    {}



}
