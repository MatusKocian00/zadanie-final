<?php

namespace App\Http\Controllers\application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;

class GraphController extends Controller
{
    public function graph(Request $request)
    {

        $data = (new ApiController)->car($request);
        return view('animation', [
            'data' => $data->getContent()
        ]);
    }
}
