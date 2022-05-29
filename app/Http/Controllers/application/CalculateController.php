<?php

namespace App\Http\Controllers\application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;

class CalculateController extends Controller
{
    public function count(Request $request)
    {
        $data = (new ApiController)->calculate($request);
        
        return view('count', [
            'data' => $data->getContent()
        ]);
    }
}
