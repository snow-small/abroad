<?php

namespace App\Http\Controllers\Admin;

use App\Model\Program;
use App\Model\Province;
use App\Model\School;
use App\Model\SchoolProgram;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function index ()
    {
        $schools = School::paginate(8);
        for ($i=0; $i<count($schools); $i++) {
            $schools[$i]['province'] = $schools[$i]->Province;
            $schools[$i]['schoolProgram'] = $schools[$i]->Program;
            $schools[$i]['program'] = '';
            for ($j=0; $j<count($schools[$i]['schoolProgram']); $j++) {
                $schools[$i]['program'] .= ',' . $schools[$i]['schoolProgram'][$j]->Program->name;
            }
            $schools[$i]['program'] = substr($schools[$i]['program'], 1);
        }

        return view('admin.school.index', compact('schools'));
    }

    public function create ()
    {
        $provinces = Province::all();
        return view('admin.school.create', compact('provinces'));
    }

    public function icon (Request $request)
    {
        if ($request->hasFile('Filedata')) {
            $file = $request->file('Filedata');
            if ($file->isValid()) {
                $newName = time() . mt_rand(100000, 999999) . $file->getClientOriginalName();
                $res = $file->move('upload/university/icon', $newName);
                if ($res) {
                    return 'upload/university/icon' . '/' . $newName;
                }
            }

        }
    }

    public function bg (Request $request)
    {
        if ($request->hasFile('Filedata')) {
            $file = $request->file('Filedata');
            if ($file->isValid()) {
                $newName = time() . mt_rand(100000, 999999) . $file->getClientOriginalName();
                $res = $file->move('upload/university/bg', $newName);
                if ($res) {
                    return 'upload/university/bg' . '/' . $newName;
                }
            }

        }
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'p_id' => 'required|integer',
            'icon' => 'required|string',
            'bgImg' => 'required|string',
            'students' => 'required|string',
            'websit' => 'required|string'
        ]);
        $request = $request->except('_token');
        $res = School::create($request);
        if ($res) {
            return redirect('admin/school');
        }
    }

    public function edit ($s_id)
    {
        $provinces = Province::all();
        $school = School::find($s_id);
        return view('admin.school.edit', compact('school', 'provinces'));
    }

    public function update (Request $request, $p_id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'p_id' => 'required|integer',
            'icon' => 'required|string',
            'bgImg' => 'required|string',
            'students' => 'required|string',
            'websit' => 'required|string'
        ]);
        $request = $request->except('_token', '_method');
        $res = School::where('id', $p_id)->update($request);
        if ($res) {
            return redirect('admin/school');
        }
    }

    public function destroy ($s_id)
    {
        $res = School::where('id', $s_id)->update(['is_delete' => 1]);
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

    // 添加专业
    public function program ($s_id)
    {
        $school = School::find($s_id);
        $programs = Program::all();
        return view('admin.school.program', compact('school', 'programs'));
    }

    // 添加后的提交
    public function proAdd (Request $request, $s_id)
    {
        $request = $request->except('_token');
        $request['s_id'] = $s_id;
        $res = SchoolProgram::create($request);
        if ($res) {
            return redirect('admin/school');
        }
    }
}
