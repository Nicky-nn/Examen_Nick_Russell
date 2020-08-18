<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HipotenusaController extends Controller
{
    public function hipotenusa() {
        return view('hipotenusa');
    }

    public function solucion(Request $request) {
        $a = (float)$request->input('a');
        $b = (float)$request->input('b');
        $c = (float)$request->input('c');

        $rootImag = false;
        $r1 = 0;
        $a = sqrt(pow($b, 2)+pow($c, 2));
        $r1 = round($a, 3, PHP_ROUND_HALF_UP);
        

        return view('solucion', [            
            'a' => $r1,
            'b' => $b,
            'c' => $c,
        ]);
    }
}
