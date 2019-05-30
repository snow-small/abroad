<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;
use Illuminate\Support\Facades\Redis;

class NewsController extends Controller
{
    // get admin/news/ 全部列表
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(8);
        for ($i=0; $i<count($news); $i++) {
            $news[$i]['admin'] = News::find($news[$i]['id'])->User;
        }
        return view('admin.news.list', compact('news'));
    }

    // get admin/news/create 添加
    public function create()
    {
        return view('admin.news.create');
    }

    public function showImage(Request $request)
    {
        if ($request->hasFile('Filedata')) {
            $file = $request->file('Filedata');
            if ($file->isValid()) {
                $newName = time() . mt_rand(100000, 999999) . $file->getClientOriginalName();
                $res = $file->move('upload', $newName);
                if ($res) {
                    return 'upload' . '/' . $newName;
                }
            }

        }
    }

    // post admin/news/ 添加后的提交
    public function store(Request $request)
    {
        // 验证
        $this->validate($request, [
            'title' => 'required|string',
            'img' => 'required|string',
            'description' => 'required|string',
            'content' => 'required|string'
        ]);
        // 逻辑
        $request = $request->except('_token');
        $request['admin_id'] = session('admin')['id'];
        $res = News::create($request);
        if ($res) {
            Redis::set('news:view:'.$res->id, 0);
            return redirect('admin/news');
        }
    }

    // get admin/news/{user}/edit 编辑
    public function edit($news_id)
    {
        $new = News::find($news_id);
        return view('admin.news.edit', compact('new'));
    }

    // put admin/news/{user} 编辑后的提交
    public function update(Request $request, $news_id)
    {
        // 验证
        $this->validate($request, [
            'title' => 'required|string',
            'img' => 'required|string',
            'description' => 'required|string',
            'content' => 'required|string'
        ]);
        $request = $request->except('_token', '_method');
        $request['admin_id'] = session('admin')['id'];
        $res = News::find($news_id)->update($request);
        if ($res) {
            return redirect('admin/news');
        }

    }

    // delete admin/news/{user} 删除
    public function destroy($new_id)
    {
        $res = News::where('id', $new_id)->update(['status' => 1]);
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

    public function editImage (Request $request)
    {
        if ($request->hasFile('Filedata')) {
            $file = $request->file('Filedata');
            if ($file->isValid()) {
                $newName = time() . mt_rand(100000, 999999) . $file->getClientOriginalName();
                $res = $file->move('upload', $newName);
                if ($res) {
                    return 'upload' . '/' . $newName;
                }
            }

        }
    }
}
