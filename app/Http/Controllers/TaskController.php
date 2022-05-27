<?php

namespace App\Http\Controllers;

use App\Models\Compute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    public function exportCsv(Request $request)
    {
        $fileName = 'computes.csv';
        $computes = Compute::all()->toArray();
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "public",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );
        array_unshift($computes, array_keys($computes[0]));

        $callback = function () use ($computes) {
            $FH = fopen('php://output', 'w');
            foreach ($computes as $row) {
                fputcsv($FH, $row);
            }
            fclose($FH);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function sendMail(Request $request)
    {

        $fileName = 'computes.csv';
        $computes = Compute::all()->toArray();
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "public",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );
        array_unshift($computes, array_keys($computes[0]));

        foreach ($computes as $row) {
            Storage::disk('csv')->put('exportedCsv.csv', $row);
        };

        return dd('done');
    }
}
