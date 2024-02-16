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

        $attend = $request->all();
        $attend['attend'] = Carbon::now();
        Attend::create($attend);
        return redirect('/')->with('message', '$attend');
    }


    public function leave(Request $request)
    {
        $attend = $request->all();
        $attend['leave'] = Carbon::now();
        
        Attend::find($request->user_id)->update($attend);
        return redirect('/')->with('message', '$attend');
        }

    public function breakbegin(Request $request)
    {
        $attend = $request->all();
        $attend['breakbegin'] = Carbon::now();
        Attend::find($request->user_id)->update($attend);
        return redirect('/')->with('message', '$attend');
    }

    public function breakend(Request $request)
    {
        $attend = $request->all();
        $attend['breakend'] = Carbon::now();
        Attend::update($attend);
        return redirect('/')->with('message', '$attend');;
    }
}
