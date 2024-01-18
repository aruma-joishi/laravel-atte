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

    public function attend()
    {
        $users = User::with('name');
        $attend = Carbon::now();
        return $attend;
        return view('index', compact('users'));

        Attend::create($attend);
    }

    public function leave()
    {
        $users = User::with('name');
        $leave = Carbon::now();
        return $leave;
        return view('index', compact('users'));
    }

    public function breakbegin()
    {
        $users = User::with('name');
        $breakbegin = Carbon::now();
        return $breakbegin;
        return view('index', compact('users'));
    }

    public function breakend()
    {
        $users = User::with('name');
        $breakend = Carbon::now();
        return $breakend;
        return view('index', compact('users'));
    }
}
