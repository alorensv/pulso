<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Operacion;
use App\Models\Propiedade;
use App\Models\Tipopropiedad;
use App\Models\Comuna;
use App\Models\Equipamiento;
use App\Models\Foto;


class AdminController extends Controller
{
    

    public function index(){
        $operacion = Operacion::all();
        $tipo = Tipopropiedad::all();
        $comuna = Comuna::all();
        return view('sistema.home', array('operacion'=>$operacion, 'tipo'=>$tipo, 'comuna'=>$comuna));
    }


}
