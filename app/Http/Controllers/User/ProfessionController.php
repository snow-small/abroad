<?php

namespace App\Http\Controllers\User;

use App\Model\Profession;
use App\Model\ProfessionAnswer;
use App\Model\ProfessionResult;
use App\Model\ProfessionTotal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessionController extends Controller
{

    public function index ()
    {
        $result = ProfessionResult::where('user_id', session('user')['id'])->first();
        if ($result) {
            $total = [
                'visual' => $result['visual'],
                'tactile' => $result['tactile'],
                'auditory' => $result['auditory'],
                'p_group' => $result['p_group'],
                'kinesthetic' => $result['kinesthetic'],
                'individual' => $result['individual']
            ];
            arsort($total);
            $professionTotal = [];
            $keys = [];
            foreach ($total as $k=>$v) {
                $professionTotal[$k] = ProfessionTotal::where('cate', $k)->first();
                $professionTotal[$k]['contain'] = ProfessionTotal::find($professionTotal[$k]['id'])->ProfessionCate;
                $keys[] = $k;
            }


            $v = '';
            for($i=0; $i<count($professionTotal['visual']['contain']); $i++) {
                $v .= '，' . $professionTotal['visual']['contain'][$i]['name'];
            }
            $v = trim($v, '，');
            $professionTotal['visual']['contain'] = $v;

            $ta = '';
            for($i=0; $i<count($professionTotal['tactile']['contain']); $i++) {
                $ta .= '，' . $professionTotal['tactile']['contain'][$i]['name'];
            }
            $ta = trim($ta, '，');
            $professionTotal['tactile']['contain'] = $ta;

            $au = '';
            for($i=0; $i<count($professionTotal['auditory']['contain']); $i++) {
                $au .= '，' . $professionTotal['auditory']['contain'][$i]['name'];
            }
            $au = trim($au, '，');
            $professionTotal['auditory']['contain'] = $au;

            $g = '';
            for($i=0; $i<count($professionTotal['p_group']['contain']); $i++) {
                $g .= '，' . $professionTotal['p_group']['contain'][$i]['name'];
            }
            $g = trim($g, '，');
            $professionTotal['p_group']['contain'] = $g;

            $ki = '';
            for($i=0; $i<count($professionTotal['kinesthetic']['contain']); $i++) {
                $ki .= '，' . $professionTotal['kinesthetic']['contain'][$i]['name'];
            }
            $ki = trim($ki, '，');
            $professionTotal['kinesthetic']['contain'] = $ki;

            $in = '';
            for($i=0; $i<count($professionTotal['individual']['contain']); $i++) {
                $in .= '，' . $professionTotal['individual']['contain'][$i]['name'];
            }
            $in = trim($in, '，');
            $professionTotal['individual']['contain'] = $in;

            return view('user.profession.getValue',
                compact('keys', 'total', 'professionTotal'));


        }
        return view('user.profession.index');
    }

    public function text ()
    {
        $professions = Profession::all();
        $answers = ProfessionAnswer::all();
        return view('user.profession.text', compact('professions', 'answers'));
    }

    // 测评结果
    public function getValue (Request $request)
    {
        $visual = $request['name5'] + $request['name9'] + $request['name6']
            + $request['name11'];
        $visual = 2*$visual;

        $tactile = $request['name10'] + $request['name14'] + $request['name15']
            + $request['name23'];
        $tactile = 2*$tactile;

        $auditory = $request['name1'] + $request['name7'] + $request['name12']
            + $request['name19'];
        $auditory = 2*$auditory;

        $group = $request['name3'] + $request['name4'] + $request['name17']
            + $request['name21'];
        $group = 2*$group;

        $kinesthetic = $request['name2'] + $request['name8'] + $request['name18']
            + $request['name24'];
        $kinesthetic = 2*$kinesthetic;

        $individual = $request['name13'] + $request['name16'] + $request['name22']
        + $request['name24'];
        $individual = 2*$individual;

        $total = [
            'visual' => $visual,
            'tactile' => $tactile,
            'auditory' => $auditory,
            'p_group' => $group,
            'kinesthetic' => $kinesthetic,
            'individual' => $individual
        ];
        arsort($total);

        $request = $total;
        $request['user_id'] = session('user')['id'];
        $res = ProfessionResult::create($request);
        if ($res) {
            $professionTotal = [];
            $keys = [];
            foreach ($total as $k=>$v) {
                $professionTotal[$k] = ProfessionTotal::where('cate', $k)->first();
                $professionTotal[$k]['contain'] = ProfessionTotal::find($professionTotal[$k]['id'])->ProfessionCate;
                $keys[] = $k;
            }


            $v = '';
            for($i=0; $i<count($professionTotal['visual']['contain']); $i++) {
                $v .= '，' . $professionTotal['visual']['contain'][$i]['name'];
            }
            $v = trim($v, '，');
            $professionTotal['visual']['contain'] = $v;

            $ta = '';
            for($i=0; $i<count($professionTotal['tactile']['contain']); $i++) {
                $ta .= '，' . $professionTotal['tactile']['contain'][$i]['name'];
            }
            $ta = trim($ta, '，');
            $professionTotal['tactile']['contain'] = $ta;

            $au = '';
            for($i=0; $i<count($professionTotal['auditory']['contain']); $i++) {
                $au .= '，' . $professionTotal['auditory']['contain'][$i]['name'];
            }
            $au = trim($au, '，');
            $professionTotal['auditory']['contain'] = $au;

            $g = '';
            for($i=0; $i<count($professionTotal['p_group']['contain']); $i++) {
                $g .= '，' . $professionTotal['p_group']['contain'][$i]['name'];
            }
            $g = trim($g, '，');
            $professionTotal['p_group']['contain'] = $g;

            $ki = '';
            for($i=0; $i<count($professionTotal['kinesthetic']['contain']); $i++) {
                $ki .= '，' . $professionTotal['kinesthetic']['contain'][$i]['name'];
            }
            $ki = trim($ki, '，');
            $professionTotal['kinesthetic']['contain'] = $ki;

            $in = '';
            for($i=0; $i<count($professionTotal['individual']['contain']); $i++) {
                $in .= '，' . $professionTotal['individual']['contain'][$i]['name'];
            }
            $in = trim($in, '，');
            $professionTotal['individual']['contain'] = $in;

            return view('user.profession.getValue',
                compact('keys', 'total', 'professionTotal'));

        }


    }


}
