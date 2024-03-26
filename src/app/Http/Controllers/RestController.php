<?php

namespace App\Http\Controllers;

use App\Models\Attend;
use App\Models\Rest;
use Carbon\Carbon;

class RestController extends Controller
{
    public function startRest()
    {
        $dt = new Carbon();
        $time = $dt->toTimeString();

        $attend = Attend::getAttend();

        $attend_id = $attend->id;

        Rest::create([
            'attend_id' => $attend_id,
            'start_time' => $time,
        ]);

        return redirect('/')->with('result', '
        休憩開始しました');
    }

    public function endRest()
    {
        $dt = new Carbon();
        $time = $dt->toTimeString();

        $attend = Attend::getAttend();

        $rest = $attend->rests->whereNull("end_time")->first();

        Rest::where('id', $rest->id)->update(['end_time' => $time]);

        return redirect('/')->with('result', '
        休憩終了しました');
    }
}
