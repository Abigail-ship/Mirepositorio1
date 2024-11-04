<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index(){
        $nombre = "Manuel Alejandro";
        $apellido = "Coronado Arjona";
        return view('administrativos.maestro') 
        ->with('minombre',$nombre)
        ->with('miapellido',$apellido);
    }
}
