<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TipoReceta;
use Session;
use Redirect;

class TipoRecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tipoReceta = TipoReceta::all();
        return view('tipoReceta.index',compact('tipoReceta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipoReceta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $tipoReceta = new TipoReceta;

        $tipoReceta->descripcion = $request->descripcion;
        $tipoReceta->tiempo_preparacion = $request->tiempo_preparacion;
        $tipoReceta->cocina = $request->cocina; 
        
        $tipoReceta->save();

         return redirect('/tipoReceta')->with('message','tipoReceta guardado correctamente ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $tipoReceta = TipoReceta::find($id);
        return view('tipoReceta.edit', ['tipoReceta'=>$tipoReceta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $tipoReceta = TipoReceta::find($id);
        $tipoReceta->fill($request->all());
        $tipoReceta->save();

        Session::flash('message','tipoReceta editado correctamente');
        return Redirect::to('/tipoReceta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        TipoReceta::destroy($id);
        Session::flash('message','tipoReceta eliminado correctamente');
        return Redirect::to('tipoReceta');
    }
}
