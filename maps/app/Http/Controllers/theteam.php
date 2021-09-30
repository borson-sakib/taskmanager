<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class theteam extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('welcome', ['user' => $users]);
    }
}
