<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedade extends Model
{
    use HasFactory;

    protected $table = "propiedades";
  


    /*public function images()
    {
        return $this->morphMany('App\Models\Foto', 'imageable');
    }*/

    public static function Chart(){

        $data = Propiedade::select('propiedades.cod_operacion')
            ->selectRaw('count(*) as cantidades')
            ->join("operacion","operacion.cod_operacion","=","propiedades.cod_operacion")
            ->groupBy("propiedades.cod_operacion")
            ->get();
        return $data;
    }

    public static function GetPropiedad($id){
        $data = Propiedade::select('propiedades.*', 'operacion.operacion')
                ->join('operacion', 'propiedades.cod_operacion', '=', 'operacion.cod_operacion')
                ->where("cod_propiedad",$id)->first();
        return $data;
    }

    public static function AllPropiedades(){
        $data = Propiedade::select('propiedades.*', 'operacion.operacion')
                ->join('operacion', 'propiedades.cod_operacion', '=', 'operacion.cod_operacion')
                ->get();
        return $data;
    }

    public static function FiltroPropiedades($op, $tip, $com, $clave){
        $data = Propiedade::select('propiedades.*', 'operacion.operacion', 'tipopropiedad.tipopropiedad')
                ->join('operacion', 'propiedades.cod_operacion', '=', 'operacion.cod_operacion')
                ->join('tipopropiedad', 'propiedades.cod_tipropiedad', '=', 'tipopropiedad.cod_tipropiedad')
                ->join('comuna', 'propiedades.cod_comuna', '=', 'comuna.cod_comuna');
        if($op!=""){
            $data = $data->where('operacion.cod_operacion', $op);
        }
        if($tip!=""){
            $data = $data->where('tipopropiedad.cod_tipropiedad', $tip);
        }
        if($com!=""){
            $data = $data->where('comuna.cod_comuna', $com);
        }
        if($clave!=""){
            $data = $data->where('propiedades.palabra_clave', 'like', '%'.$clave.'%');
        }
        $data = $data->paginate(9);
        return $data;
    }
}
