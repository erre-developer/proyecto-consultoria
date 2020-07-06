<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //si el archivo request es un file
        // if ($request->hasFile('imagen')) {
        //     $file = $request->file('imagen');
        //     $name = time().$file->getClientOriginalName();
        //     $file->move(public_path().'/images/',$name);
            
        // }

        

        if ($request->hasFile('')) {
            $file = $request->file('pdf');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/pdf/',$name);
            
        }

        // return $name;

        //  $file = $request->file('imagen');
        // $name = time().$file->getClientOriginalName();

        //  $image_path = public_path(). '\images\1593839833logowhatsapp.jpg';
        // unlink($image_path);

        return 'Se ha subido el archivo: '.$name;

        // return 'Imgen eliminada'.$image_path. '   Imagen subida '. $name;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
