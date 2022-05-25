<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\AnimationService;
use App\Services\ComputeService;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function car(Request $request)
    {
        $request->validate([
            'r' => ['required', 'numeric'],
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
        return response()->json($data);
    }
}
