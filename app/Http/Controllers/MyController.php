<?php

namespace App\Http\Controllers;

use App\Models\User;

class MyController extends Controller
{
    public function getUser()
    {
        $user = User::all();

        return response()->json($user);
    }
}
