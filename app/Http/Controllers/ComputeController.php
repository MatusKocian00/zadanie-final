<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compute;
use App\Services\ComputeService;

class ComputeController extends Controller
{
    public function index()
    {
        return view('application');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'body' => ['required'],
    //     ]);
    //     $compute = new Compute;
    //     $octave = new ComputeService;
    //     $data = $octave->runOctave($request->body, $request->user);
    //     $compute->body = $request->body;
    //     $compute->serror = "nothing";
    //     $compute->nerrors = 0;
    //     $compute->save();
    //     return view('animation', [
    //         'data' => $data
    //     ]);
    // }

    public function car()
    {
        return response()->json([]);
    }
}
