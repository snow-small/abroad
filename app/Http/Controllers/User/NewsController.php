<?php

namespace App\Http\Controllers\User;

use App\Model\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class NewsController extends Controller
{
    // 首页，新闻列表
    public function index ()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(10);
        $loves = News::orderBy('view', 'decs')->take(8)->get();
        return view('user.news.index', compact('news', 'loves'));
    }

    // 详情
    public function show ($new_id)
    {
        $new = News::find($new_id);
        $new['user'] = News::find($new_id)->User;
        Redis::incr('news:view:'.$new_id);
        return view('user.news.show', compact('new'));
    }
}
