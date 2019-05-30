<?php

namespace App\Http\Controllers\Admin;

use App\Model\Apply;
use App\Model\Program;
use App\Model\School;
use App\Model\User;
use App\Model\Order;
use App\Model\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index ()
    {
        $orders = Order::paginate(8);
        for ($i=0; $i<count($orders); $i++) {
            $orders[$i]['user'] = $orders[$i]->User;
            $orders[$i]['school'] = $orders[$i]->School;
            $orders[$i]['program'] = $orders[$i]->Program;
            $orders[$i]['status'] = $orders[$i]->Status;
        }
        return view('admin.order.index', compact('orders'));
    }

    public function edit ($o_id)
    {
        $status = Status::all();
        $order = Order::find($o_id);
        return view('admin.order.edit', compact('status', 'order'));
    }

    public function update (Request $request, $o_id)
    {
        $request = $request->except('_token', '_method');
        $res = Order::where('id', $o_id)->update($request);
        if ($res) {
            return redirect('admin/order');
        }
    }

    public function show ($o_id)
    {
        $order = Order::find($o_id);
        $username = $order->User->username;
        $path = 'uploadApply/' . $order->a_id . '-' . $username;
        $dir = $this->readDirector($path);
        for ($i=0; $i<count($dir); $i++) {
            $dir[$i] = iconv('gbk', 'utf-8', $dir[$i]);
        }

        return view('admin.order.show', compact('order', 'dir', 'path'));
    }

    // 查看申请表
    public function apply ($o_id)
    {
        $order = Order::find($o_id);
        $apply = Apply::find($order->a_id);
        $user = User::find($apply->user_id);
        $school = School::find($apply->s_id);
        $program = Program::find($apply->p_id);
        $order = $apply;
        return view('admin.order.apply', compact('order', 'school', 'user', 'program'));
    }

    public function readDirector ($path)
    {
        $res = [];
        $dir = openDir($path);
        while (($item = readDir($dir)) !== false) {
            if ($item != '.' && $item != '..') {
                if (is_file($path . '/' . $item)) {
                    $res[] = $item;
                }
            }
        }
        closeDir($dir);
        return $res;
    }
}
