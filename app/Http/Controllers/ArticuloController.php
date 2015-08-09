<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Articulo;
use Session;
use Redirect;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $articulo = Articulo::all();
        return view('articulo.index',compact('articulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
         return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //se puede hacer con $request->all tamb
        $articulo = new Articulo;

        $articulo->descripcion = $request->descripcion;
        $articulo->stock = $request->stock;
        $articulo->unidad_medida = $request->unidad_medida; 
        
        $articulo->save();

         return redirect('/articulo')->with('message','articulo guardado correctamente ');
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
        $articulo = Articulo::find($id);
        return view('articulo.edit', ['articulo'=>$articulo]);
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
        $articulo = Articulo::find($id);
        $articulo->fill($request->all());
        $articulo->save();

        Session::flash('message','articulo editado correctamente');
        return Redirect::to('/articulo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
