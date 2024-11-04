<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
        $nombre = "Geisler Melchor";
        $apellido = "Gomez Escamilla";
        return view('alumnos.alumno2') 
        ->with('minombre',$nombre)
        ->with('miapellido',$apellido);
    }
}

