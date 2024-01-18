<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attend;

class DateController extends Controller
{
    public function index()
    {
        $users = User::with('name');
        $attends = Attend::all();
        return view('date', compact('users','attends'));
    }
}
