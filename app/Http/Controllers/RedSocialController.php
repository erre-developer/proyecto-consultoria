<?php

namespace App\Http\Controllers;

use App\RedSocial;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class RedSocialController extends Controller
{
    //
    public function show()
    {
        //$redes = RedSocial::table('redes_sociales')->all();

        $results = DB::select('select * from redes_sociales where estado=1', array(1));
        $nosotros = DB::select('select * from nosotros');
        // return view('home',compact('results'));

        //ROUTE MODEL BINDING
        return view('home',[
            'objeto' => $results

        ],[
            'nosotros' => $nosotros
        ]);

        // return $nosotros;
    }
}
