<?php

namespace App\Http\Controllers\Admin;

use App\Model\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function index ()
    {
        $questions = Question::paginate(8);
        for ($i=0; $i<count($questions); $i++) {
            $questions[$i]['user'] = Question::find($questions[$i]['id'])->User;
        }

        return view('admin.question.index', compact('questions'));
    }

    public function destroy ($ques_id)
    {
        $res = Question::where('id', $ques_id)->update(['is_delete' => 1]);
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
