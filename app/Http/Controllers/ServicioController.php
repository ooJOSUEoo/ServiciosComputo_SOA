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
        $datos['servicios'] = Servicio::paginate(6);
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

        $campos=[
            'NombreS'=>'required|string|max:50',
            'Logo'=>'required|max:10000|mimes:jpeg,png,jpg',
            'DescripcionS'=>'required||string|max:500',
            'UbicacionS'=>'required||string|max:999999',
            'AtiendeS'=>'required||string|max:50',
            'TelS'=>'required||string|max:15', 
            'Img1S'=>'required|max:10000|mimes:jpeg,png,jpg',
            'Img2S'=>'required|max:10000|mimes:jpeg,png,jpg',
            'Img3S'=>'required|max:10000|mimes:jpeg,png,jpg',
            'Img4S'=>'required|max:10000|mimes:jpeg,png,jpg',
            'Img5S'=>'required|max:10000|mimes:jpeg,png,jpg',
        ];
        $mensaje = [
            'NombreS.required'=>'El nombre es requerido',
            'DescripcionS.required'=>'La descripcion es requerida',
            'UbicacionS.required'=>'La ubicacion es requerida',
            'AtiendeS.required'=>'La persona que atiende es requerida',
            'TelS.required'=>'El numero de telefono es requerido',
            'Logo.required'=>'La imagen principal es requerida',
            'Img1S.required'=>'La imagen N.1 de descripcion es requerida',
            'Img2S.required'=>'La imagen N.2 de descripcion es requerida',
            'Img3S.required'=>'La imagen N.3 de descripcion es requerida',
            'Img4S.required'=>'La imagen N.4 de descripcion es requerida',
            'Img5S.required'=>'La imagen N.5 de descripcion es requerida',

            'Logo.max:10000'=>'La imagen principal es muy pesada, deve ser menor a la 10mb',
            'Img1S.max:10000'=>'La imagen N.1 de descripcion es muy pesada, deve ser menor a la 10mb',
            'Img2S.max:10000'=>'La imagen N.2 de descripcion es muy pesada, deve ser menor a la 10mb',
            'Img3S.max:10000'=>'La imagen N.3 de descripcion es muy pesada, deve ser menor a la 10mb',
            'Img4S.max:10000'=>'La imagen N.4 de descripcion es muy pesada, deve ser menor a la 10mb',
            'Img5S.max:10000'=>'La imagen N.5 de descripcion es muy pesada, deve ser menor a la 10mb',

            'Logo.mimes'=>'La imagen principal deve ser jpeg, jpg o png',
            'Img1S.mimes'=>'La imagen N.1 de descripcion deve ser jpeg, jpg o png',
            'Img2S.mimes'=>'La imagen N.2 de descripcion deve ser jpeg, jpg o png',
            'Img3S.mimes'=>'La imagen N.3 de descripcion deve ser jpeg, jpg o png',
            'Img4S.mimes'=>'La imagen N.4 de descripcion deve ser jpeg, jpg o png',
            'Img5S.mimes'=>'La imagen N.5 de descripcion deve ser jpeg, jpg o png',
        ];

        $this->validate($request, $campos, $mensaje);

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
        //return response()->json($datosServicio);
        return redirect('servicio')->with('mensaje', 'Servicio agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $servicio = Servicio::findOrFail($id);
        return view('servicio.verS', compact('servicio'));
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

        $campos=[
            'NombreS'=>'required|string|max:50',
            'DescripcionS'=>'required||string|max:500',
            'UbicacionS'=>'required||string|max:999999',
            'AtiendeS'=>'required||string|max:50',
            'TelS'=>'required||string|max:15', 
        ];
        $mensaje = [
            'NombreS.required'=>'El nombre es requerido',
            'DescripcionS.required'=>'La descripcion es requerida',
            'UbicacionS.required'=>'La ubicacion es requerida',
            'AtiendeS.required'=>'La persona que atiende es requerida',
            'TelS.required'=>'El numero de telefono es requerido',
        ];

        if ($request->hasFile('Logo')){
            $campos=['Logo'=>'required|max:10000|mimes:jpeg,png,jpg',];
            $mensaje=[
                'Logo.required'=>'La imagen principal es requerida',
                'Logo.max:10000'=>'La imagen principal es muy pesada, deve ser menor a la 10mb',
                'Logo.mimes'=>'La imagen principal deve ser jpeg, jpg o png',
            ];
        }
        if ($request->hasFile('Img1S')){
            $campos=['Img1S'=>'required|max:10000|mimes:jpeg,png,jpg',];
            $mensaje=[
                'Img1S.required'=>'La imagen N.1 de descripcion es requerida',
                'Img1S.max:10000'=>'La imagen N.1 de descripcion es muy pesada, deve ser menor a la 10mb',
                'Img1S.mimes'=>'La imagen N.1 de descripcion deve ser jpeg, jpg o png',
            ];
        }
        if ($request->hasFile('Img2S')){
            $campos=['Img2S'=>'required|max:10000|mimes:jpeg,png,jpg',];
            $mensaje=[
                'Img2S.required'=>'La imagen N.2 de descripcion es requerida',
                'Img2S.max:10000'=>'La imagen N.2 de descripcion es muy pesada, deve ser menor a la 10mb',
                'Img2S.mimes'=>'La imagen N.2 de descripcion deve ser jpeg, jpg o png',
            ];
        }
        if ($request->hasFile('Img3S')){
            $campos=['Img3S'=>'required|max:10000|mimes:jpeg,png,jpg',];
            $mensaje=[
                'Img3S.required'=>'La imagen N.3 de descripcion es requerida',
                'Img3S.max:10000'=>'La imagen N.3 de descripcion es muy pesada, deve ser menor a la 10mb',
                'Img3S.mimes'=>'La imagen N.3 de descripcion deve ser jpeg, jpg o png',
            ];
        }
        if ($request->hasFile('Img4S')){
            $campos=['Img4S'=>'required|max:10000|mimes:jpeg,png,jpg',];
            $mensaje=[
                'Img4S.required'=>'La imagen N.4 de descripcion es requerida',
                'Img4S.max:10000'=>'La imagen N.4 de descripcion es muy pesada, deve ser menor a la 10mb',
                'Img4S.mimes'=>'La imagen N.4 de descripcion deve ser jpeg, jpg o png',
            ];
        }
        if ($request->hasFile('Img5S')){
            $campos=['Img5S'=>'required|max:10000|mimes:jpeg,png,jpg',];
            $mensaje=[
                'Img5S.required'=>'La imagen N.5 de descripcion es requerida',
                'Img5S.max:10000'=>'La imagen N.5 de descripcion es muy pesada, deve ser menor a la 10mb',
                'Img5S.mimes'=>'La imagen N.5 de descripcion deve ser jpeg, jpg o png',
            ];
        }
        
        $this->validate($request, $campos, $mensaje);

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
        //return view('servicio.admin.editar', compact('servicio'));
        return redirect('servicio')->with('mensaje', 'Servicio editado exitosamente');

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
        $servicio = Servicio::findOrFail($id);

        if(Storage::delete('public/'.$servicio->Logo)){
            if (Storage::delete('public/'.$servicio->Img1S)) {
                 if (Storage::delete('public/'.$servicio->Img2S)) {
                     if (Storage::delete('public/'.$servicio->Img3S)) {
                         if (Storage::delete('public/'.$servicio->Img4S)) {
                             if (Storage::delete('public/'.$servicio->Img5S)) {
                                Servicio::destroy($id);
                             }
                         }
                     }
                 }
            }
        }

        return redirect('servicio')->with('mensaje', 'Servicio eliminado con éxito');
    }

}
