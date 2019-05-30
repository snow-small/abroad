<?php

namespace App\Http\Controllers\Admin;

use App\Model\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProvinceController extends Controller
{
    public function index ()
    {
        $provinces = Province::paginate(8);
        return view('admin.province.index', compact('provinces'));
    }

    public function create ()
    {
        return view('admin.province.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required|unique:province,name'
        ]);
        $request = $request->except('_token');
        $res = Province::create($request);
        if ($res) {
            return redirect('admin/province');
        }
    }

    public function edit ($p_id)
    {
        $province = Province::find($p_id);
        return view('admin.province.edit', compact('province'));
    }

    public function update (Request $request, $p_id)
    {
        $this->validate($request, [
            'name' => 'string|required'
        ]);
        $province = Province::find($p_id);
        if ($province->name != $request['name'] &&
            Province::where('name', $request['name'])->first()) {
            return back()->with('province_error', '省份名已被占用');
        }
        if ($province->name == $request['name']) {
            return redirect('admin/province');
        }
        $request = $request->except('_token', '_method');
        $res = Province::where('id', $p_id)->update($request);
        if ($res) {
            return redirect('admin/province');
        }
    }

    public function destroy ($p_id)
    {
        $res = Province::where('id', $p_id)->update(['is_delete'=>1]);
        if ($res) {
            $data = [
                'status' => '0',
                'msg' => '删除成功'
            ];
        } else {
            $data = [
                'status' => '1',
                'msg' => '删除失败'
            ];
        }
        return $data;
    }



}
