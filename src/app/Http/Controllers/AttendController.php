<?php

namespace App\Http\Controllers;

use App\Models\Attend;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AttendController extends Controller
{
    public function getIndex()
    {
        $attend = Attend::getAttend();

        if (empty($attend)) {
            return view('index');
        }

        $rest = $attend->rests->whereNull("end_time")->first();

        if ($attend->end_time) {
            return view('index')->with([
                "is_attend_start" => true,
                "is_attend_end" => true,
            ]);
        }

        if ($attend->start_time) {
            if (isset($rest)) {
                return view('index')->with([
                    "is_rest" => true,
                    "is_attend_start" => true,
                ]);
            } else {
                return view('index')->with([
                    "is_rest" => false,
                    "is_attend_start" => true,
                ]);
            }
        }
    }

    public function startAttend()
    {
        $id = Auth::id();

        $dt = new Carbon();
        $date = $dt->toDateString();
        $time = $dt->toTimeString();

        Attend::create([
            'user_id' => $id,
            'date' => $date,
            'start_time' => $time,
        ]);

        return redirect('/')->with('result', '
        勤務開始しました');
    }

    public function endAttend()
    {
        $id = Auth::id();

        $dt = new Carbon();
        $date = $dt->toDateString();
        $time = $dt->toTimeString();

        Attend::where('user_id', $id)->where('date', $date)->update(['end_time' => $time]);

        return redirect('/')->with('result', '
        勤務終了しました');
    }

    public function getAttend(Request $request)
    {
        $num = (int)$request->num;
        $dt = new Carbon();
        if ($num == 0) {
            $date = $dt;
        } elseif ($num > 0) {
            $date = $dt->addDays($num);
        } else {
            $date = $dt->subDays(-$num);
        }
        $fixed_date = $date->toDateString();

        $attends = Attend::where('date', $fixed_date)->paginate(5);

        $adjustAttends = Attend::adjustAttend($attends);

        return view('attend', compact("adjustAttends", "num", "fixed_date"));
    }

    public function userList(Request $request)
    {
        $users = User::all();
        return view('userlist', compact("users"));
    }

    public function userAttend(Request $request)
    {
        $attends = Attend::where('user_id', $request->num)->paginate(5);
        $user = User::find($request->num);
        $adjustAttends = Attend::adjustAttend($attends);
        return view('userattend', compact("adjustAttends","user"));
    }
}
