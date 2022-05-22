<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function index()
    {
        return view('token');
    }

    public function generateToken(Request $request)
    {
        $token = $request->user()->createToken('app_token')->plainTextToken;

        return back()->with(['token' => $token]);
    }
}
