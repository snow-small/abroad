<?php

namespace App\Http\Controllers\User;

use App\Model\Question;
use App\Model\QuestionAnswer;
use App\Model\QuestionAnswerDiscuss;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class QuestionController extends Controller
{
    // 首页
    public function index ()
    {
        $questions = Question::orderBy('created_at', 'desc')->get();
        // 获取提问的作者
        for ($i=0; $i<count($questions); $i++) {
            $questions[$i]['user'] = Question::find($questions[$i]['id'])->User;
        }
        // 获取提问答案
        for ($i=0; $i<count($questions); $i++) {
            $questions[$i]['questionAnswer'] = Question::find($questions[$i]['id'])->QuestionAnswer()->orderBy('up', 'desc')->get();
        }
        // 获取回答者的信息
        for ($i=0; $i<count($questions); $i++) {
            for ($j=0; $j<count($questions[$i]['questionAnswer']); $j++) {
                $questions[$i]['questionAnswer'][$j]['user'] = QuestionAnswer::find($questions[$i]['questionAnswer'][$j]['id'])->User;
            }
        }

        // 获取hot
        $hots = Question::orderBy('view', 'desc')->take(5)->get();
        // 获取提问的作者
        for ($i=0; $i<count($hots); $i++) {
            $hots[$i]['user'] = Question::find($hots[$i]['id'])->User;
        }
        // 获取提问答案
        for ($i=0; $i<count($hots); $i++) {
            $hots[$i]['questionAnswer'] = Question::find($hots[$i]['id'])->QuestionAnswer()->orderBy('up', 'desc')->get();
        }
        // 获取回答者的信息
        for ($i=0; $i<count($hots); $i++) {
            for ($j=0; $j<count($hots[$i]['questionAnswer']); $j++) {
                $hots[$i]['questionAnswer'][$j]['user'] = QuestionAnswer::find($hots[$i]['questionAnswer'][$j]['id'])->User;
            }
        }

        // dd($questions[0]->questionAnswer[0]->content);
        return view('user.question.index', compact('questions', 'hots'));
    }

    // 提问提交
    public function store (Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string'
        ]);
        $request = $request->except('_token');
        $request['user_id'] = session('user')['id'];
        $res = Question::create($request);
        if ($res) {
            Redis::set('question:view:'.$res->id, 0);
            return redirect('question');
        }
    }

    // 显示某一个问题
    public function show ($ques_id)
    {
        Redis::incr('question:view:'.$ques_id);
        $question = Question::find($ques_id);   // 获取问题
        $question['user'] = $question->User;    // 问题作者
        $question['questionAnswer'] = $question->QuestionAnswer;    // 问题答案
        for ($i=0; $i<count($question['questionAnswer']); $i++) {
            // 问题答案的作者
            $question['questionAnswer'][$i]['user'] = $question['questionAnswer'][$i]->User;
            // 问题答案的评论
            $question['questionAnswer'][$i]['questionAnswerDiscuss'] = $question['questionAnswer'][$i]->QuestionAnswerDiscuss;
            // 问题答案的评论的作者
            for ($j=0; $j<count($question['questionAnswer'][$i]['questionAnswerDiscuss']); $j++) {
                $question['questionAnswer'][$i]['questionAnswerDiscuss'][$j]['user'] = $question['questionAnswer'][$i]['questionAnswerDiscuss'][$j]->User;
            }
        }

        $loves = Question::orderBy(\DB::raw('RAND()'))->take(10)->get();
        return view('user.question.show', compact('question', 'loves'));
    }

    // 答案的提交
    public function answer (Request $request, $ques_id)
    {
        $this->validate($request, [
            'content' => 'string|required'
        ]);
        $request = $request->except('_token');
        $request['q_id'] = $ques_id;
        $request['user_id'] = session('user')['id'];
        $res = QuestionAnswer::create($request);
        if ($res) {
            Redis::set('questionAnswer:up:'.$res->id, 0);   // 点赞数
            Redis::set('questionAnswer:down:'.$res->id, 0);   // 踩数
            Redis::set('questionAnswer:discuss:'.$res->id, 0);   // 评论数
            return back();
        }
    }

    // 答案评论的提交
    public function discuss (Request $request, $ans_id)
    {
        $this->validate($request, [
            'content' => 'required|string'
        ]);
        $request = $request->except('_token');
        $request['q_a_id'] = $ans_id;
        $request['user_id'] = session('user')['id'];
        $res = QuestionAnswerDiscuss::create($request);
        if ($res) {
            Redis::set('questionAnswerDiscuss:up', 0);   // 答案评论点赞数
            Redis::set('questionAnswerDiscuss:down', 0);   // 答案评论菜数
            Redis::incr('questionAnswer:discuss:'.$ans_id);   // 给答案自增一个评论数
            return back();
        }
    }

    // 赞
    public function up (Request $request, $ques_id)
    {
        Redis::incr('questionAnswer:up:'.$ques_id);
        $up = Redis::get('questionAnswer:up:'.$ques_id);
        return $up;
    }

    // 取消赞
    public function unUp (Request $request, $ques_id) {
        Redis::decr('questionAnswer:up:'.$ques_id);
        $up = Redis::get('questionAnswer:up:'.$ques_id);
        return $up;
    }

    // 踩
    public function down (Request $request, $ques_id)
    {
        Redis::incr('questionAnswer:down:'.$ques_id);
        $down = Redis::get('questionAnswer:down:'.$ques_id);
        return $down;
    }

    // 取消踩
    public function unDown (Request $request, $ques_id)
    {
        Redis::decr('questionAnswer:down:'.$ques_id);
        $down = Redis::get('questionAnswer:down:'.$ques_id);
        return $down;
    }

    // 评论点赞
    public function discussUp (Request $request, $ans_dis_id)
    {
        Redis::incr('questionAnswerDiscuss:up:'.$ans_dis_id);
        $discuss = Redis::get('questionAnswerDiscuss:up:'.$ans_dis_id);
        return $discuss;
    }

    // 评论取消赞
    public function discussunUp (Request $request, $ans_dis_id)
    {
        Redis::decr('questionAnswerDiscuss:up:'.$ans_dis_id);
        $discuss = Redis::get('questionAnswerDiscuss:up:'.$ans_dis_id);
        return $discuss;
    }

    public function destroy (Request $request, $ques_id)
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

    public function destroyAnswer (Request $request, $ques_ans_id)
    {
        $res = QuestionAnswer::where('id', $ques_ans_id)->update(['is_delete' => 1]);
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
