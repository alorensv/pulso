<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $table = "fotos";

    protected $fillable = ['ruta,'];

    public function imageable(){
        return $this->morphTo();
    }
}
