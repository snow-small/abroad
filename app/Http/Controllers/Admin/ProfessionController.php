<?php

namespace App\Http\Controllers\Admin;

use App\Model\Profession;
use App\Model\ProfessionAnswer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessionController extends Controller
{
    public function index ()
    {
        $professions = Profession::all();
        return view('admin/profession/index', compact('professions'));
    }

    public function create ()
    {
        return view('admin/profession/create');
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'name' => 'required|string|unique:profession,name'
        ]);
        $request = $request->except('_token');
        $res = Profession::create([
            'title' => $request['title'],
            'name' => $request['name']
        ]);
        if ($res) {
            return redirect('admin/profession');
        }

    }

    public function edit($p_id)
    {
        $profession = Profession::find($p_id);
        return view('admin.profession.edit', compact('profession'));
    }

    public function update(Request $request, $p_id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'name' => 'required|string'
        ]);
        $profession = Profession::find($p_id);
        if ($profession->name != $request['name']
            &&
            Profession::where(['name'=>$request['name']]) -> first()) {
            return back()->with('name_error', 'name已被占用');
        }
        $request = $request->except('_token', '_method');

        $res = $profession->update($request);

        if ($res) {
            return redirect('admin/profession');
        }
    }

    public function destroy ($p_id)
    {
        $res = Profession::where(['id' => $p_id])->update(['is_delete' => 1]);
        if ($res) {
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
