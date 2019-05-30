<?php

namespace App\Http\Controllers\User;

use App\Model\Province;
use App\Model\School;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function index ()
    {
        $order = User::find(session('user')['id'])->Order()->first();
        if ($order) {
            return redirect('apply/status/' . $order->id);
        }
        $province = Province::find(1);
        $schools = $province->School()->paginate(6);
        $provinces = Province::all();
        $user_id = session('user')['id'];
        return view('user.school.index', compact('provinces', 'province', 'schools', 'user_id'));
    }

    // 通过ajax改变院校
    public function change (Request $request, $p_id)
    {
        $province = Province::find($p_id);
        $schools = $province->School()->paginate(6);
        $provinces = Province::all();
        $user_id = session('user')['id'];
        return view('user.school.index', compact('provinces', 'province', 'schools', 'user_id'));
    }

    public function show ($s_id)
    {
        $school = School::find($s_id);
        $num = $school->Program()->count();   // 专业数
        $programs = $school->Program;

        for ($i=0; $i<count($programs); $i++) {
            $programs[$i]['program'] = $programs[$i]->Program->name;
        }

        return view('user.school.show', compact('school', 'num', 'programs'));
    }
}
