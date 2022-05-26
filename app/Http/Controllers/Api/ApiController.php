<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\AnimationService;
use App\Services\ComputeService;
use Illuminate\Http\Request;
use App\Models\Compute;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function car(Request $request)
    {
        $request->validate([
            'r' => ['required', 'integer','between:-4,4'],
        ]);
        $octave = new AnimationService;
        $data = $octave->animate($request->r);
        return response()->json($data);
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'body' => ['required'],
        ]);
        $octave = new ComputeService;
        $data = $octave->computation($request->body);
        $compute = new Compute;
        $compute->body = $request->body;
        $compute->user_id = Auth::id();
        if ($data == "You have entered wrong input !") {
            $compute->nerrors = 1;
            $compute->serror = $data;
        } else {
            $compute->nerrors = 0;
            $compute->serror = "no error";
        }
        $compute->save();
        return response()->json($data);
    }
}
