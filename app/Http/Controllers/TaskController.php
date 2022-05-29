<?php

namespace App\Http\Controllers;

use App\Models\Compute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


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

        $FH = fopen('/var/www/site95.webte.fei.stuba.sk/zadanie-final/storage/app/export.csv', 'w');
        foreach ($computes as $row) {
            fputcsv($FH, $row);
        }
        fclose($FH);
        $data["email"] = Auth::user()->email;
        $data["title"] = "Exported database";
        $data["body"] = "Exported database to csv file";

        $files = [
            storage_path('app/export.csv'),
            //public_path('files/1599882252.png'),
        ];

        Mail::send('email.exportcsv', $data, function ($message) use ($data, $files) {
            $message->to($data["email"], $data["email"])
                ->subject($data["title"]);

            foreach ($files as $file) {
                $message->attach($file);
            }
        });

        return redirect('/dashboard')->with('message', 'Email sent succesfuly');
    }
}
