<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function perfil()
    {
        //$user= User::findOrFail(auth()->user()->id);
        return view('servicio.admin.perfil');
    }
}
