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

    public function car()
    {
        return response()->json([]);
    }
}
