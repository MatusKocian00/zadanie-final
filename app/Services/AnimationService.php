<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AnimationService
{
    public function animate($r)
    {
        $id = Auth::id();
        $txt_file = file_get_contents("../storage/app/" . $id . "vector.txt");
        $rows = explode(" ", $txt_file);
        foreach ($rows as &$number) {
            $number = str_replace(" ", "", $number);
            $number = floatval($number);
        }
        $x1 = $rows[0];
        $x2 = $rows[1];
        $x3 = $rows[2];
        $x4 = $rows[3];
        $x5 = $rows[4];

        $input = "
            pkg load control
            m1 = 2500; m2 = 320;
            k1 = 80000; k2 = 500000;
            b1 = 350; b2 = 15020;
            A = [0 1 0 0;-(b1*b2)/(m1*m2) 0 ((b1/m1)*((b1/m1)+(b1/m2)+(b2/m2)))-(k1/m1) -(b1/m1);b2/m2 0 -((b1/m1)+(b1/m2)+(b2/m2)) 1;k2/m2 0 -((k1/m1)+(k1/m2)+(k2/m2)) 0];
            B = [0 0;1/m1 (b1*b2)/(m1*m2);0 -(b2/m2);(1/m1)+(1/m2) -(k2/m2)];
            C = [0 0 1 0];
            D = [0 0];
            Aa = [[A,[0 0 0 0]'];[C, 0]];
            Ba = [B;[0 0]];
            Ca = [C,0];
            Da = D;
            K = [0 2.3e6 5e8 0 8e6];
            sys = ss(Aa-Ba(:,1)*K,Ba,Ca,Da);

            t = 0:0.01:5;
            r = " . $r . ";
            [y,t,x] = lsim(sys*[0;1],r*ones(size(t)),t,[" . $x1 . ";" . $x2 . ";" . $x3 . ";" . $x4 . ";" . $x5 . "]);
            filename = \"/var/www/site95.webte.fei.stuba.sk/zadanie-final/storage/app/" . $id . "data.txt\";
            fid = fopen (filename, \"w+\");
            fputs (fid, disp([t,x(:,1),x(:,3)]));
            fclose (fid);

            filename = \"/var/www/site95.webte.fei.stuba.sk/zadanie-final/storage/app/" . $id . "vector.txt\";
            fid = fopen (filename, \"w+\");
            for i=1:5
                fprintf(fid, '%d', x(size(x,1), i));
                fprintf(fid, ' ');
            end
            fclose (fid);
            ";
        Storage::disk('local')->put($id . "input.m", $input);
        exec("octave /var/www/site95.webte.fei.stuba.sk/zadanie-final/storage/app/" . $id . "input.m");

        $txt_file = file_get_contents("../storage/app/" . $id . "data.txt");
        $rows = explode("\n", $txt_file);
        foreach ($rows as &$row) {
            $row = explode("  ", $row);
            unset($row[0]);
            foreach ($row as &$number) {
                $number = str_replace(" ", "", $number);
                $number = floatval($number);
            }
        }
        return $rows;
    }
}
