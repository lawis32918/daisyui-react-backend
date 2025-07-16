<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getUser()
    {
        $user = User::all();

        return response()->json($user);
    }

    public function postUser(Request $request)
    {
        $user = User::create([
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'sex' => $request->sex,
            'civil_status' => $request->civil_status,
            'present_address' => $request->present_address,
            'email' => $request->email,
        ]);

        return response()->json($user);
    }

    public function deleteUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json($user);
    }

    public function editUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return response()->json($user);
    }

    public function exampleUsers()
    {
        echo 'Hello! Welcome to Laravel 12 - Example Users';
    }
}
