<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class theteam extends Controller
{
    public function fetch()
    {
        $users = User:all();

    }
}
