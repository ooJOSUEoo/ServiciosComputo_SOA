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
            $data[] = [
                $query->NombreS
            ];
        }

        return $data;
    }
}
