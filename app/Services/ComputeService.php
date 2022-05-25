<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class ComputeService
{

    function computation($body)
    {
        $command = $body;
        $command = ltrim($command, "'");
        $command = rtrim($command, "'");

        Storage::disk('local')->put('input.m', $command);
        //$fop = fopen('../storage/app/octave/input.m', 'w');
        //chmod('../storage/app/octave/input.m', 777);
        //fwrite($fop, $command);
        //fclose($fop);
        exec("octave /var/www/site95.webte.fei.stuba.sk/zadanie-final/storage/app/input.m", $text);
        if ($text[0] == null) {
            return "You have entered wrong input !";
        } else {
            return $text[0];
        }
    }
}
