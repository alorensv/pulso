<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamiento extends Model
{
    use HasFactory;
    protected $table = "equipamiento";

    public static function GetEquipamientos($id){
        $data = Equipamiento::select('equipamiento.*', 'tg_equipamiento.equipamiento')
                ->join('tg_equipamiento', 'equipamiento.cod_tipequipamiento', '=', 'tg_equipamiento.cod_tipequipamiento')
                ->where("equipamiento.cod_propiedad",$id)->get();
        return $data;
    }


}
