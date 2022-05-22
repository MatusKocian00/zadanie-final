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
        $data = $octave->runOctave(-0.1, $request->user);
        // $compute->body = $request->body;
        // $compute->serror = "nothing";
        // $compute->nerrors = 0;
        // $compute->save();
        return response()->json($data);
    }
}
