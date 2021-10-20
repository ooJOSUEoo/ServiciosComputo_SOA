<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

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

        if ($request->hasFile('Logo')){
            $datosServicio['Logo'] = $request->file('Logo')->store('uploads', 'public');
        }
        if ($request->hasFile('img1S')){
                $datosServicio['img1S'] = $request->file('img1S')->store('uploads', 'public');
        }
        if ($request->hasFile('img2S')){
                $datosServicio['img2S'] = $request->file('img2S')->store('uploads', 'public');
        }
        if ($request->hasFile('img3S')){
                $datosServicio['img3S'] = $request->file('img3S')->store('uploads', 'public');
        }
        if ($request->hasFile('img4S')) {
                $datosServicio['img4S'] = $request->file('img4S')->store('uploads', 'public');
        }
        if ($request->hasFile('img5S')) {
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
    public function edit($id)
    {
        //
        $servicio = Servicio::findOrFail($id);
        return view('servicio.admin.editar', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosServicio = request()->except(['_token','_method']);

        if ($request->hasFile('Logo')){
            $servicio = Servicio::findOrFail($id);
            Storage::delete('public/'.$servicio->Logo);
            $datosServicio['Logo'] = $request->file('Logo')->store('uploads', 'public');
        }
        if ($request->hasFile('img1S')){
            $servicio = Servicio::findOrFail($id);
            Storage::delete('public/'.$servicio->Img1S);
            $datosServicio['img1S'] = $request->file('img1S')->store('uploads', 'public');
        }
        if ($request->hasFile('img2S')){
            $servicio = Servicio::findOrFail($id);
            Storage::delete('public/'.$servicio->Img2S);
            $datosServicio['img2S'] = $request->file('img2S')->store('uploads', 'public');
        }
        if ($request->hasFile('img3S')){
            $servicio = Servicio::findOrFail($id);
            Storage::delete('public/'.$servicio->Img3S);
            $datosServicio['img3S'] = $request->file('img3S')->store('uploads', 'public');
        }
        if ($request->hasFile('img4S')) {
            $servicio = Servicio::findOrFail($id);
            Storage::delete('public/'.$servicio->Img4S);
            $datosServicio['img4S'] = $request->file('img4S')->store('uploads', 'public');
        }
        if ($request->hasFile('img5S')) {
            $servicio = Servicio::findOrFail($id);
            Storage::delete('public/'.$servicio->Img5S);
            $datosServicio['img5S'] = $request->file('img5S')->store('uploads', 'public');
        }

        Servicio::where('id','=',$id)->update($datosServicio);
        $servicio = Servicio::findOrFail($id);
        return view('servicio.admin.editar', compact('servicio'));


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
