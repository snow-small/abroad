<?php

namespace App\Http\Controllers\Admin;

use App\Model\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgramController extends Controller
{
    public function index ()
    {
        $programs = Program::paginate(8);
        return view('admin.program.index', compact('programs'));
    }

    public function create ()
    {
        return view('admin.program.create');
    }

    public function store (Request $request)
    {
        $request = $request->except('_token');
        $res = Program::create($request);
        if ($res) {
            return redirect('admin/program');
        }
    }

    public function edit ($p_id)
    {
        $program = Program::find($p_id);
        return view('admin.program.edit', compact('program'));
    }

    public function update (Request $request, $p_id)
    {
        $request = $request->except('_token', '_method');
        $program = Program::find($p_id);
        if ($program->name == $request['name']) {
            return redirect('admin/program');
        }
        $res = Program::where('id', $p_id)->update($request);
        if ($res) {
            return redirect('admin/program');
        }
    }
}
