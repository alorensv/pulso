<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Operacion;
use App\Models\Propiedade;
use App\Models\Tipopropiedad;
use App\Models\Comuna;
use App\Models\Equipamiento;
use App\Models\Foto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $model = Propiedade::AllPropiedades();

        return view('sistema.home', array('model'=>$model));
    }
}
