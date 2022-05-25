<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class ComputeService
{

    function computation($body)
    {
        $command = $body;
        $command = ltrim($command, "'");
        $command = rtrim($command, "'");

        Storage::disk('local')->put(Auth::id() . "input.m", $command);
        exec("octave /var/www/site95.webte.fei.stuba.sk/zadanie-final/storage/app/" . Auth::id() . "input.m", $text);
        if (empty($text)) {
            return "You have entered wrong input !";
        } else {
            return substr($text[0], 7);
        }
    }
}
