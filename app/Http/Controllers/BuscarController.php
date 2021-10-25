<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class BuscarController extends Controller
{
    public function servicios(Request $request){
        $term = $request->get('term');


        $querys = Servicio::where('NombreS','LIKE','%'.$term.'%')->take(5)->get();

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
}
