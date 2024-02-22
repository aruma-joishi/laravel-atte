<?php

namespace App\Http\Controllers;

require '../vendor/autoload.php';

use Illuminate\Http\Request;
use App\Models\Attend;
use App\Models\User;
use Carbon\Carbon;


class StampController extends Controller
{
    public function index()
    {
        $users = User::with('name');
        return view('index',compact('users'));
    }

    public function attend(Request $request)
    {
        $users = Attend::get('user_id');
        foreach ($users as $user) {
            if ($user['user_id'] == $request->get('user_id')){
                return redirect('/')->with('message', '$attend');
            }
        }
        $carbon = $request->all();
        $carbon['attend'] = Carbon::now();
        Attend::create($carbon);
        return redirect('/')->with('message', '$attend');
    }

    public function leave(Request $request)
    {
        $users = Attend::get('user_id');
        foreach ($users as $user) {
            if ($user['user_id'] == $request->get('user_id')) {
                $carbon = Carbon::now();
                Attend::where('user_id', $request->user_id)->update(['leave' => $carbon]);
                return redirect('/')->with('message', '$attend');
            }
        }
        return redirect('/')->with('message', '$attend');
    }

    public function breakbegin(Request $request)
    {
        $attends = Attend::all();
        foreach ($attends as $attend) {
            if ($attend['user_id'] == $request->get('user_id')) {
                if($attend['leave']->exists()){
                    return 3;
                }else{
                    return 3;
                $carbon = Carbon::now();
                return 4;
                Attend::where('user_id', $request->user_id)->update(['leave' => $carbon]);
                return 5;
                return redirect('/')->with('message', '$attend');
                }
            }
        }
        return redirect('/')->with('message', '$attend');
    }

    public function breakend(Request $request)
    {
        $carbon = Carbon::now();
        Attend::where('user_id', $request->user_id)->update(['breakend' => $carbon]);
        return redirect('/')->with('message', '$attend');
    }
}
