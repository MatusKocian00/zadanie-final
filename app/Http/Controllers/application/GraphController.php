<?php

namespace App\Http\Controllers\application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;

class GraphController extends Controller
{
    public function graph(Request $request)
    {
        $request->validate([
            'graph' => 'required'
        ]);
        $data = (new ApiController)->car($request);
        if ($request->has('animation') && $request->has('graph')) {
            return view('animation', [
                'data' => $data->getContent(),
                'graph' => true,
                'animation' => true

            ]);
        }

        if ($request->has('graph')) {
            return view('animation', [
                'data' => $data->getContent(),
                'graph' => true,

            ]);
        } else {
            return view('animation', [
                'data' => $data->getContent(),
                'animation' => true

            ]);
        }
    }
}
