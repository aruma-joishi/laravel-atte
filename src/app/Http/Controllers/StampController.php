<?php

namespace App\Http\Controllers;

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
        $attends = Attend::all();
        foreach($attends as $attend){
            if($attend['user_id'] == $request->get('user_id')){
                $carbon = $request->all();
                $carbon['attend'] = Carbon::now();
                Attend::update($carbon['attend']);
                return redirect('/');
            }
        }

        $carbon = $request->all();
        $carbon['attend'] = Carbon::now();
        Attend::create($carbon);
        return redirect('/');
    }

    public function leave(Request $request)
    {
        $attends = Attend::all();
        foreach($attends as $attend){
            if ($attend['user_id'] == $request->get('user_id')) {
                $carbon = Carbon::now();
                Attend::where('user_id', $request->user_id)->update(['leave' => $carbon]);
                return redirect('/');
            }
        }
            return redirect('/');
    }

    public function breakbegin(Request $request)
    {
        $attends = Attend::all();
        foreach ($attends as $attend) {
            if ($attend['user_id'] == $request->get('user_id')) {
                $carbon = Carbon::now();
                Attend::where('user_id', $request->user_id)->update(['breakbegin' => $carbon]);
                return redirect('/');
            }
        }
        return redirect('/');
    }

    public function breakend(Request $request)
    {
        $attends = Attend::all();
        foreach ($attends as $attend) {
            if ($attend['user_id'] == $request->get('user_id')) {
                $carbon = Carbon::now();
                Attend::where('user_id', $request->user_id)->update(['breakend' => $carbon]);
                return redirect('/');
            }
        }
        return redirect('/');
    }
}