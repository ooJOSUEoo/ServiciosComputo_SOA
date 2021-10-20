<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['servicios'] = Servicio::paginate(5);
        return view('servicio.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('servicio.admin.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosServicio = request()->all();

        $datosServicio = request()->except('_token');

        if (($request->hasFile('Logo'))&&
        ($request->hasFile('img1S'))&&
        ($request->hasFile('img2S'))&&
        ($request->hasFile('img3S'))&&
        ($request->hasFile('img4S'))&&
        ($request->hasFile('img5S'))) {
            $datosServicio['Logo'] = $request->file('Logo')->store('uploads', 'public');
            $datosServicio['img1S'] = $request->file('img1S')->store('uploads', 'public');
            $datosServicio['img2S'] = $request->file('img2S')->store('uploads', 'public');
            $datosServicio['img3S'] = $request->file('img3S')->store('uploads', 'public');
            $datosServicio['img4S'] = $request->file('img4S')->store('uploads', 'public');
            $datosServicio['img5S'] = $request->file('img5S')->store('uploads', 'public');
        }

        Servicio::insert($datosServicio);
        return response()->json($datosServicio);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        //
        return view('servicio.admin.editar');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Servicio::destroy($id);
        
        return redirect('servicio');
    }

}
