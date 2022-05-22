<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Services\ComputeService;

class ApiController extends Controller
{
    public function car(Request $request)
    
    {
        $octave = new ComputeService;
        $data = $octave->runOctave($request->get('r'), $request->user);
        return response()->json($data);
    }
}
