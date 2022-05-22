<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Auth;

class TokenController extends Controller
{
    public function index()
    {
        return view('token');
    }

    public function generateToken(Request $request)
    {
        //dd($request);
        $token = $request->user()->createToken('app_token')->plainTextToken;

        return back()->with(['token' => $token]);
    }
}
