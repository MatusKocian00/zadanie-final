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
        $request->validate([
            'body' => ['required'],
        ]);
        $octave = new ComputeService;
        $data = $octave->runOctave($request->get('body'), $request->user);
        return response()->json($data);
    }
}
