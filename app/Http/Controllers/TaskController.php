<?php

namespace App\Http\Controllers;

use App\Models\Compute;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function exportCsv(Request $request)
    {
        $fileName = 'tasks.csv';
        $computes = Compute::all();
        dd($computes);

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        dd($computes);
        $columns = array('id', 'created_at', 'updated_at', 'body', 'nerrors', 'serror', 'user_id');
        $callback = function () use ($computes, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($computes as $compute) {
                $row['id']  = $compute->id;
                $row['created_at']    = $compute->assign->name;
                $row['updated_at']    = $compute->description;
                $row['body']  = $compute->body;
                $row['nerrors']  = $compute->nerrors;
                $row['serror']  = $compute->serror;
                $row['user_id'] = $compute->user_id;

                fputcsv($file, array($row['id'], $row['created_at'], $row['updated_at'], $row['body'], $row['nerrors'], $row['serror'], $row['user_id']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
