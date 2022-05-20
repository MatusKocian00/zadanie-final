<?php

namespace App\Services;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use App\Models\Compute;

class ComputeService
{
    public function runOctave($data, $user){
            $fp = fopen($user."input.m", 'w');
            fwrite($fp, $data);
            fclose($fp);
            $process = new Process(['octave',$user."input.m"]);
            $process->run();
    
            $txt_file = file_get_contents("vector.txt");
            $rows = explode("\n", $txt_file);
        
            foreach ($rows as &$row) {
                $row = explode("  ", $row);
                unset($row[0]);
                foreach ($row as &$number) {
                    $number = str_replace(" ", "", $number);
                    $number = floatval($number);
                }
            }
            return json_encode($rows);
    }
}
