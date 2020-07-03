<?php

namespace App\Http\Controllers;

use App\Certificacion;
use App\RedSocial;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class CertificacionController extends Controller
{
    public  function __construct()
    {
        $this->middleware('auth')->only('create','store','edit','update','destroy');
    }


    public function index()
    {
        $results = RedSocial::all();
        $cert = Certificacion::all();
        
        return view('certificaciones.index',[
            'objeto' => $results
        ],[
            'cert' => $cert
        ]);
    }


    public function create()
    {
       
    }

    
    public function store() 
    {
        
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Certificacion  $redSocial
     * @return \Illuminate\Http\Response
     */
    public function show(Certificacion $certificacion)
    {
        return view('certificaciones.show',[
            'certificacion' => $certificacion
        ]);
       
    }

    
    public function edit()
    {
        
    }

    
    public function update()
    {
        
    }

    
    public function destroy ()
    {
       
    }
    
}
