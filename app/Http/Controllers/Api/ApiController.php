<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\AnimationService;
use App\Services\ComputeService;
use Symfony\Component\HttpFoundation\Request;

class ApiController extends Controller
{
    public function car(Request $request)
    {
        $octave = new AnimationService;
        $data = $octave->animate($request->r);
        return response()->json($data);
    }

    public function calculate(Request $request)
    {
        $octave = new ComputeService;
        $data = $octave->computation($request->body);
        return response()->json($data);
    }
}
