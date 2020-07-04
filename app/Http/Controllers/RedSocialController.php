<?php

namespace App\Http\Controllers;

use App\RedSocial;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\controll;

class RedSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$redes = RedSocial::table('redes_sociales')->all();

        $redSocial = RedSocial::all();
        $nosotros = DB::select('select * from nosotros');
        // return view('home',compact('results'));

        //ROUTE MODEL BINDING
        return view('home',[
            'objeto' => $redSocial

        ],[
            'nosotros' => $nosotros
        ]);

        // return $nosotros;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**web
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RedSocial  $redSocial
     * @return \Illuminate\Http\Response
     */
    public function show(RedSocial $redSocial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RedSocial  $redSocial
     * @return \Illuminate\Http\Response
     */
    public function edit(RedSocial $redSocial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RedSocial  $redSocial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RedSocial $redSocial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RedSocial  $redSocial
     * @return \Illuminate\Http\Response
     */
    public function destroy(RedSocial $redSocial)
    {
        //
    }
}
