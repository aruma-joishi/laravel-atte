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
        $attend = Carbon::now();
        Attend::upadate($attend);
        $users = User::with('name');
        return view('index', compact('users'));
    }

    public function leave(Request $request)
    {
        $attend = $request->only(['leave']);
        $users = User::with('name');
        $leave = Carbon::now();
        return view('index', compact('users'));
    }

    public function breakbegin(Request $request)
    {
        $attend = $request->only(['breakbegin']);
        $users = User::with('name');
        $breakbegin = Carbon::now();
        return view('index', compact('users'));
    }

    public function breakend(Request $request)
    {
        $attend = $request->only(['breakend']);
        $users = User::with('name');
        $breakend = Carbon::now();
        return view('index', compact('users'));
    }
}
