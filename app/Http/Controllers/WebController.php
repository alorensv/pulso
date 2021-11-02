<?php

namespace App\Http\Controllers;

use App\Models\Operacion;
use App\Models\Propiedade;
use App\Models\Tipopropiedad;
use App\Models\Comuna;
use App\Models\Equipamiento;
use App\Models\Foto;
use App\Models\Correo;
use Illuminate\Http\Request;

use App\Mail\ContactoMailable;
use App\Mail\EntreganosMailable;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function index(){
        $model = Propiedade::Portadas();
        $count = Propiedade::where('ind_portada','=','1')->count();
        $operacion = Operacion::all();
        $tipo = Tipopropiedad::all();
        $comuna = Comuna::all();
        return view('inicio', array('model'=>$model,'count'=>$count,'operacion'=>$operacion, 'tipo'=>$tipo, 'comuna'=>$comuna));
    }

    public function servicios(){
        return view('servicios');
    }

    public function entreganos(){
        return view('entreganos');
    }

    public function nosotros(){
        return view('nosotros');
    }
    
    public function contacto(){
        return view('contacto');
    }

    public function entreganosEmail(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'ciudad' => 'required',
            'direccion' => 'required',
            'message' => 'required'
        ]);
    
        $correo = new EntreganosMailable($request->all());
        Mail::to('alorensv@gmail.com')->send($correo);

        return redirect()->route('entreganos')->with('info', "Mensaje enviado con éxito");
    }

    public function store(Request $request){
        /*$correo = new Correo();

        $correo->name = $request->name;
        $correo->email = $request->email;
        $correo->fono = $request->fono;
        $correo->message = $request->message;

        $correo->save();*/

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $correo = Correo::create($request->all());
        $correo = new ContactoMailable($request->all());
        Mail::to('alorensv@gmail.com')->send($correo);

        return redirect()->route('contacto')->with('info', "Mensaje enviado con éxito");
    }

    public function propiedades(){
        $model = Propiedade::all();
        return $model;
    }

    public function verPropiedad($id){
        $model = Propiedade::GetPropiedad($id);
        $equip = Equipamiento::GetEquipamientos($id); 
        $fotos = Foto::where("cod_propiedad",$id)->get(); 
        return view('verPropiedad', array('model'=>$model, 'equip'=>$equip, 'fotos'=>$fotos));
    }

    public function listarPropiedades(Request $request){

        if(isset($request) ){
            /*$request->validate([
                'comuna' => 'required'
            ]);*/

            $model = Propiedade::FiltroPropiedades($request->operacion, $request->tiprop, $request->comuna, $request->clave);
        }else{          
            //$model = app(Propiedade::class)->AllPropiedades(); no estatico
            $model = Propiedade::AllPropiedades();
        }

        foreach($model as $model){
            $foto = Foto::where("cod_propiedad",$model->cod_propiedad)->first();
            
            echo '<div class="col-md-4 py-3">
                <div class="card shadow">
                <span class="tipo_de_prop"><p>'.$model->palabra_clave.'</p></span>';
                echo '<a href="/pulso/public/verPropiedad/'.$model->cod_propiedad.'">
                <img src="'.$foto->ruta.'" class="card-img-top" alt="..."></a>';

                echo '<ul class="list-group list-group-flush" style="margin-top: -2px;">
                    <li class="list-group-item" style="background-color: #1e3255 !important;padding: 2px 10px;color: white;font-weight: 600;">'.$model->operacion.'</li>
                    <li class="list-group-item bg-light" style="color:red;text-align:right">VALOR: '.$model->uf.' - '.$model->precio.'</li>
                    <li class="list-group-item" style="text-align: justify">'.substr($model->descripcion, 0, 125).'...</li>
                </ul>';

                echo '<div class="card-body" style="font-size: 14px;">
                    <div class="row">';
                
                    if(isset($model->mt2_construido)){
                        echo ' <div class="col-md-6"><i class="bi bi-aspect-ratio"></i>'.number_format($model->mt2_construido).'/'.number_format($model->mt2_total).' MT2</div>';
                    }else{
                        echo ' <div class="col-md-6"><i class="bi bi-aspect-ratio"></i>'.number_format($model->mt2_total).' MT2</div>';
                    }
                    if($model->habitacion > 0){
                        echo '<div class="col-md-6"><i class="fa fa-bed" aria-hidden="true"></i>'.$model->habitacion.' Habitaciones</div>';
                    }
                    if($model->banio > 0){
                        echo '<div class="col-md-6"><i class="fa fa-bath" aria-hidden="true"></i>'.$model->banio.' Baños</div>';
                    }
                    if($model->estacionamiento > 0){
                        echo '<div class="col-md-6"><i class="fa fa-car" aria-hidden="true"></i>'.$model->estacionamiento.' Estacionamiento</div>';
                    }
                    
                    
                   echo '</div>
                </div>
                </div>
            </div>';
        }//fin foreach
    }
 
}
