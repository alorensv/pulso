<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Operacion;
use App\Models\Propiedade;
use App\Models\Tipopropiedad;
use App\Models\Comuna;
use App\Models\Equipamiento;
use App\Models\Foto;
use App\Models\TgEquipamiento;

class AdminController extends Controller
{

    public function chart(){
        $model = Propiedade::Chart();
        return "<pre>".json_encode($model)."</pre>";
        //return view('sistema.chart', array('model'=> $model ));
    }

    public function create(){
        $operacion = Operacion::all();
        $tipo = Tipopropiedad::all();
        $comuna = Comuna::all();
        $equipamientos = TgEquipamiento::all();
        return view('sistema.agregar', array('operacion'=>$operacion, 'tipo'=>$tipo, 'comuna'=>$comuna, 'equipamientos'=>$equipamientos));
    }

    public function store(Request $request){

        $request->validate([
            'imagen.*' => 'required|image'
        ]);

        $model = new Propiedade;
        $model->nombre=$request->nombre;
        $model->descripcion=$request->descripcion;
        $model->palabra_clave=$request->palabra_clave;
        $model->precio=$request->precio;
        $model->uf=$request->uf;
        $model->ruta_video=$request->ruta_video;
        $model->mt2_construido=$request->mt2_construido;
        $model->mt2_total=$request->mt2_total;
        $model->estacionamiento=$request->estacionamiento;
        $model->banio=$request->banio;
        $model->habitacion=$request->habitacion;
        $model->cod_operacion=$request->cod_operacion;
        $model->cod_tipropiedad=$request->cod_tipropiedad;
        $model->cod_comuna=$request->cod_comuna;
        $model->ubicacion=$request->ubicacion;

        if($model->save()){
            $urlimagenes = [];
            if($request->hasFile('imagen')){
                $fotos = $request->file('imagen');
                foreach($fotos as $foto){

                    $name = time().'_'.$foto->getClientOriginalName();
                    $url = public_path().'/img/propiedades/'.$model->id;
                    $foto->move($url, $name);
                    //$urlimagenes[]['ruta'] = '/img/propiedades/'.$model->cod_propiedad.'/'.$name;

                    $photo = new Foto;
                    $photo->ruta =  'img/propiedades/'.$model->id.'/'.$name;
                    $photo->cod_propiedad = $model->id;
                    $photo->save();
                }
            }

            foreach($request->equipa as $equipamiento){
                $equip = new Equipamiento;
                $equip->cod_tipequipamiento = $equipamiento;
                $equip->cod_propiedad = $model->id;
                $equip->save();
            }
        }
        //$model->images()->createMany($urlimagenes);
        //return $model->images;

        //guardar imagenes asociadas a la propiedad
        
        //$imagenes = $request->file('fotos')->store('public/propiedades/'.$request->nombre);
        //$url = Storage::url($imagenes);

        //return $request->all();

        return redirect()->route('home');
    }


}
