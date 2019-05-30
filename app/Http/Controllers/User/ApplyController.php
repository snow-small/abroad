<?php

namespace App\Http\Controllers\User;

use App\Model\Apply;
use App\Model\Nation;
use App\Model\Order;
use App\Model\Program;
use App\Model\School;
use App\Model\SchoolProgram;
use App\Model\Status;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
    // 介绍，学校id和专业id
    public function introduce ($s_id, $p_id)
    {
        $program = Program::find($p_id);
        return view('user.apply.introduce', compact('s_id', 'program'));
    }

    // 第一步，申请表
    public function table ($s_id, $p_id)
    {
        $nations = Nation::all();
        $program = Program::find($p_id);
        return view('user.apply.table', compact('s_id', 'program', 'nations'));
    }

    // 申请表后的提交
    public function store(Request $request, $s_id, $p_id)
    {
        $request['user_id'] = session('user')['id'];
        $request['s_id'] = $s_id;
        $request['p_id'] = $p_id;
        $request = $request->except('_token');
        $res = Apply::create($request);
        if ($res) {
            $a_id = $res->id;
            return redirect('apply/upload/' . $a_id);
        }
    }

    // 第二步，上传文件
    public function upload ($a_id)
    {
        $program = Program::find(Apply::find($a_id)->p_id);
        return view('user.apply.upload', compact('program', 'a_id'));
    }

    // 上传文件的操作（目录是uploadApply/申请表id-用户名/学校-专业-文件名）
    public function save (Request $request)
    {
        $a_id = $request['a_id'];
        $school = School::find(Apply::find($a_id)->s_id)->name;
        $program = Program::find(Apply::find($a_id)->p_id)->name;
        $user = User::find(Apply::find($a_id)->user_id)->username;
        $dir = 'uploadApply/' . $a_id . '-' . $user;
        $filename = $school . '-' . $program . '-';

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $ext = $photo->getClientOriginalExtension();
            $photoName = $filename . '护照照片' . '.' .$ext;
            $photoName = iconv('utf-8', 'gbk', $photoName);

            $photo->move($dir, $photoName);

        }

        if ($request->hasFile('photoCopy')) {
            $photoCopy = $request->file('photoCopy');
            $copyExt = $photoCopy->getClientOriginalExtension();
            $photoCopyName = $filename . '护照复印件' . '.' . $copyExt;
            $photoCopyName = iconv('utf-8', 'gbk', $photoCopyName);

            $photoCopy->move($dir, $photoCopyName);
        }

        if ($request->hasFile('health')) {
            $health = $request->file('health');
            $ext = $health->getClientOriginalExtension();
            $healthName = $filename . '健康证明' . '.' .$ext;
            $healthName = iconv('utf-8', 'gbk', $healthName);

            $health->move($dir, $healthName);
        }

        if ($request->hasFile('hsk')) {
            $hsk = $request->file('hsk');
            $ext = $hsk->getClientOriginalExtension();
            $hskName = $filename . 'HSK证书' . '.' .$ext;
            $hskName = iconv('utf-8', 'gbk', $hskName);

            $hsk->move($dir, $hskName);
        }

        if ($request->hasFile('highest')) {
            $highest = $request->file('highest');
            $ext = $highest->getClientOriginalExtension();
            $highestName = $filename . '最高学历证书' . '.' .$ext;
            $highestName = iconv('utf-8', 'gbk', $highestName);

            $highest->move($dir, $highestName);
        }

        if ($request->hasFile('transcript')) {
            $transcript = $request->file('transcript');
            $ext = $transcript->getClientOriginalExtension();
            $transcriptName = $filename . '高等教育学术成绩单' . '.' .$ext;
            $transcriptName = iconv('utf-8', 'gbk', $transcriptName);

            $transcript->move($dir, $transcriptName);
        }

        if ($request->hasFile('latter')) {
            $latter = $request->file('latter');
            $ext = $latter->getClientOriginalExtension();
            $latterName = $filename . '转校证明' . '.' .$ext;
            $latterName = iconv('utf-8', 'gbk', $latterName);

            $latter->move($dir, $latterName);
        }

        if ($request->hasFile('class')) {
            $class = $request->file('class');
            $ext = $class->getClientOriginalExtension();
            $className = $filename . '班级申请' . '.' .$ext;
            $className = iconv('utf-8', 'gbk', $className);

            $class->move($dir, $className);
        }

        if ($request->hasFile('visa')) {
            $visa = $request->file('visa');
            $ext = $visa->getClientOriginalExtension();
            $visaName = $filename . '最新的签证' . '.' .$ext;
            $visaName = iconv('utf-8', 'gbk', $visaName);

            $visa->move($dir, $visaName);
        }

        if ($request->hasFile('confirm')) {
            $confirm = $request->file('confirm');
            $ext = $confirm->getClientOriginalExtension();
            $confirmName = $filename . '确认签名' . '.' .$ext;
            $confirmName = iconv('utf-8', 'gbk', $confirmName);

            $confirm->move($dir, $confirmName);
        }

        return redirect('apply/pay' . '/' . $a_id);

    }

    // 第三步，付款
    public function pay ($a_id)
    {
        $school = School::find(Apply::find($a_id)->s_id);
        $program = Program::find(Apply::find($a_id)->p_id);

        $schoolProgram = SchoolProgram::where([
            's_id' => Apply::find($a_id)->s_id,
            'p_id' => Apply::find($a_id)->p_id
        ])->first();
        return view('user.apply.pay', compact('a_id', 'school', 'program', 'schoolProgram'));
    }


    // 订单
    public function order (Request $request)
    {
        $request = $request->except('_token');
        $apply = Apply::find($request['a_id']);
        $request['s_id'] = $apply->s_id;
        $request['p_id'] = $apply->p_id;
        $request['total'] = SchoolProgram::where([
            's_id' => $apply->s_id,
            'p_id' => $apply->p_id
        ])->first()->apply;
        $request['u_id'] = session('user')['id'];
        $request['updated_at'] = date('Y-m-s H:i:s', time());

        $res = Order::create($request);
        if ($res) {
            return redirect('apply/status/' . $res->id);
        }

    }

    public function status ($o_id)
    {
        $order = Order::find($o_id);
        if (!$order) {
            return redirect('school');
        }
        $school = School::find($order->s_id);
        $program = Program::find($order->p_id);
        $schoolProgram = SchoolProgram::where([
            's_id' => $school->id,
            'p_id' => $program->id
        ])->first();
        $status = Status::find($order->status);
        $statusTotal = Status::all();
        // 获取历史订单
        $olds = Order::withoutGlobalScope('orderAva')->where('is_delete', 1)->get();
        for ($i=0; $i<count($olds); $i++) {
            $olds[$i]['oldStatus'] = Status::find($olds[$i]->status);
            $olds[$i]['oldSchool'] = School::find($olds[$i]->s_id);
            $olds[$i]['oldProgram'] = Program::find($olds[$i]->p_id);
            $olds[$i]['oldSchoolProgram'] = SchoolProgram::where([
                's_id' => $olds[$i]['oldSchool']->id,
                'p_id' => $olds[$i]['oldProgram']->id
            ])->first();
        }

        return view('user.apply.status',
            compact('order', 'school', 'program',
                'schoolProgram', 'status', 'statusTotal',
                'olds'));
    }

    // 取消订单
    public function noOrder ($o_id)
    {
        $res = Order::where('id', $o_id)->update(['is_delete'=>1]);
        if ($res) {
            $data = [
                'status' => 0,
                'msg' => '重新申请成功'
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '重新申请失败'
            ];
        }
        return $data;
    }

    // 历史订单
    public function myOrder ($user_id)
    {
        $orders = Order::withoutGlobalScope('orderAva')->where([
            'u_id' => $user_id,
            'is_delete' => 1
        ])->get();
        for ($i=0; $i<count($orders); $i++) {
            $orders[$i]['Status'] = Status::find($orders[$i]->status);
            $orders[$i]['School'] = School::find($orders[$i]->s_id);
            $orders[$i]['Program'] = Program::find($orders[$i]->p_id);
            $orders[$i]['SchoolProgram'] = SchoolProgram::where([
                's_id' => $orders[$i]['School']->id,
                'p_id' => $orders[$i]['Program']->id
            ])->first();
        }
        return view('user.apply.order', compact('orders'));
    }

}
