<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\User;

class BuscarController extends Controller
{
    public function servicios(Request $request){
        $term = $request->get('term');


        $querys = Servicio::where('NombreS','LIKE','%'.$term.'%')->where('StatusS','=','1')->take(5)->orderBy('NombreS','DESC')->get();

        $data = [];
        
        foreach ($querys as $query) {
            $data[] = ['id' => $query->id, 'value' => $query->NombreS];
        }

        return $data;
    }

    public function software(){
        $datos['servicios'] = Servicio::where('TipoS','=','1')->where('StatusS','=','1')->paginate(6);
        return view('servicio.software',$datos);
    }

    public function hardware(){
        $datos['servicios'] = Servicio::where('TipoS','=','2')->where('StatusS','=','1')->paginate(6);
        return view('servicio.hardware',$datos);
    }

    public function MisServicios(){
        $datos['servicios'] = Servicio::where('idUsuario','=',auth()->user()->id)->paginate(6);
        return view('servicio.misServicios',$datos);
    }
}
