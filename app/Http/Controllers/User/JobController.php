<?php

namespace App\Http\Controllers\User;

use App\Model\Profession;
use App\Model\ProfessionAnswer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function index ()
    {
        $jobs = Profession::all();
        $answers = ProfessionAnswer::all();
        return view('user.job.index', compact('jobs', 'answers'));
    }

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

        $stay = 0.05*120 + 0.05*120 + 0.05*120 + 0.05*120
            + 0.8*($visual + $tactile + $auditory + $group + $kinesthetic + $individual)/3;
        if ($stay > 70) {
            return view('user.job.stay');
        } else {
            return view('user.job.noStay');
        }
    }
}











