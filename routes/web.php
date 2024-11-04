<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;
use app\Http\StudentsControllers;
use app\Http\TeachersControllers;
use App\Models\Computer;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/abigail', function () {
    return view('miprimeravista');
});
Route::get('/alumnos', function () {
    return view('Losalumnos');
});
Route::get('/maestros', function () {
    return view('Losmaestros');
});
Route::get('/administrativos', function () {
    return view('Losadministrativos');
});


Route:: get('/alumnoscontrolador', [StudentsController::class, 'index']);
Route:: get('/maestroscontrolador', [TeachersController::class, 'index']);



Route::get('/prueba', function () {
    //INSERTAR
    /*
    $computer = new Computer;
    $computer->model='Es una computadora demostrativa';
    $computer->mark='EcoHero';
    $computer->size=14;
    $computer->colors='rojo';
    $computer->code=2021;
    $computer->category='portatil';
    $computer->published_at='2024-10-27 13:11:00';
    $computer->is_active=true;
    $computer->save();
    return $computer;
    //INSERTAR
    /*
    $computer = new Computer();
    $computer->model='Envy';
    $computer->mark='Hewlett Packard';
    $computer->size=15;
    $computer->colors='rojo';
    $computer->code=2021;
    $computer->category='portatil';
    $computer->save();
    return $computer;
});

Route::get('/prueba', function () {
    $computer = new Computer();
    $computer->model='MacBook';
    $computer->mark='Apple';
    $computer->size=18;
    $computer->colors='blanco';
    $computer->code=2022;
    $computer->category='portatil';
    $computer->save();
    return $computer;
});
*/

    //SELECCIONAR POR ID
    /*
    $computer = Computer::find(1);
    return $computer;
    

    /*
    $computer = Computer::where('model', 'MacBook')->first();
    return $computer;
    */
    
    /*
    $computer = Computer::where('model', 'MacBook')->first();
    $computer-> model = 'MacBook18'; 
    $computer->save();
    return $computer;
    */
    

    //SELECCION DE TODOS LOS REGISTROS
    /*
    $computer = Computer::all();
    return $computer;
    */
    
    //SELECCION DE UNA PARTE DE LOS REGISTROS
    /*
    $computer = Computer::where('id','>=',1)->orderBy('id','desc')->get();
    return $computer;
    */

    //SELECCION DE CAMPOS A DESPLEGAR
    /*
    $computer = Computer::where('id','>=',1)
            ->select('model','size')
            ->orderBy('id', 'desc') 
            ->get();
    return $computer;
    */


    
    //BORRAR REGISTRO
    /*
    $computer = Computer::find(1);
    $computer->delete();
    */
    /*
    $computer = Computer::find(1);
    return $computer->published_at;
    */
    
    //EJEMPLO 1 - despliega la fecha en el formato que le indiquemos
    $computer = Computer::find(1);
    //EJEMPLO 1 - despliega la fecha en el formato que le indiquemos
    return $computer->published_at->format('d-m-Y');

    /*
    $computer = Computer::find(1);
    //EJEMPLO 2 - despliega cuanto tiempo pasó despues de publicado
    return $computer->published_at->diffForHumans();
    */

});