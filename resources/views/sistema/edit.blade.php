@extends('sistema.plantilla')

@section('content')


<div class="container" style="background-color: #fff">
    
    <div class="row">
        <h4 class="shadow p-3 mb-5 bg-white rounded">Editar Propiedad</h4>
    </div>
    <form method="post" action="{{ url('update/'.$model->cod_propiedad ) }}" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>Nombre *</label>
                <input type="text" id="nombre"  name="nombre" class="form-control" required="required" placeholder="Nombre" value="{{$model->nombre}}">
            </div>
            <div class="form-group">
                <label>Descripción *</label>
                <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="4" required="required">{{$model->descripcion}}</textarea>
            </div>
            <div class="form-group">
                <label>Palabra Clave *</label>
                <input type="text" id="palabra_clave"  name="palabra_clave" class="form-control" required="required"  value="{{$model->palabra_clave}}">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" id="precio"  name="precio" class="form-control" placeholder="Ej. $600.000"  value="{{$model->precio}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>UF</label>
                        <input type="text" id="uf"  name="uf" class="form-control" placeholder="Ej. 1.000UF"  value="{{$model->uf}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Video (pegar Script de Youtube)</label>
                <textarea name="ruta_video" id="ruta_video" class="form-control" cols="30" rows="4">{{$model->ruta_video}}</textarea>
            </div>            
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mt2 Construidos</label>
                        <input type="number" id="mt2_construido"  name="mt2_construido" class="form-control" placeholder="Ej. 400"  value="{{$model->mt2_construido}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mt2 Total *</label>
                        <input type="number" id="mt2_total"  name="mt2_total" class="form-control" required="required" placeholder="Ej. 1200"  value="{{$model->mt2_total}}">
                    </div>
                </div>
            </div>    

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Estacionamiento</label>
                        <select name="estacionamiento" id="estacionamiento" class="form-control">
                            <?= $i=0; ?>
                            @while ($i < 11)
                            <option value="{{$i}}" @if($i == $model->estacionamiento) selected  @endif >{{$i}}</option>
                            <?= $i++; ?>
                            @endwhile
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Baños</label>
                        <select name="banio" id="banio" class="form-control">
                            <?= $i=0; ?>
                            @while ($i < 11)
                            <option value="{{$i}}" @if($i == $model->banio) selected  @endif >{{$i}}</option>
                            <?= $i++; ?>
                            @endwhile
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Habitaciones</label>
                        <select name="habitacion" id="habitacion" class="form-control">
                            <?= $i=0; ?>
                            @while ($i < 11)
                            <option value="{{$i}}" @if($i == $model->habitacion) selected  @endif >{{$i}}</option>
                            <?= $i++; ?>
                            @endwhile
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tipo Operación</label>
                        <select name="cod_operacion" id="cod_operacion" class="form-control">
                            @foreach ($operacion as $op)
                                <option value="{{$op->cod_operacion}}" @if($op->cod_operacion == $model->cod_operacion) selected  @endif>{{$op->operacion}}</option>
                            @endforeach
                        </select>
                    </div>                
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tipo Propiedad</label>
                        <select name="cod_tipropiedad" id="cod_tipropiedad" class="form-control">
                            @foreach ($tipo as $tipo)
                                <option value="{{$tipo->cod_tipropiedad}}"  @if($tipo->cod_operacion == $model->cod_tipropiedad) selected  @endif>{{$tipo->tipopropiedad}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Comuna</label>
                        <select name="cod_comuna" id="cod_comuna" class="form-control">
                            @foreach ($comuna as $comuna)
                                <option value="{{$comuna->cod_comuna}}"  @if($comuna->cod_comuna == $model->cod_comuna) selected  @endif>{{$comuna->comuna}}</option>
                            @endforeach
                        </select>
                    </div>  
                </div>
            </div>    
            <div class="form-group">
                <label>Ubicación *</label>
                <textarea name="ubicacion" id="ubicacion" class="form-control" cols="30" rows="3" required="required">{{$model->ubicacion}}</textarea>
            </div>
        </div><!--fin col 4-->

        <div class="col-md-4">
            @foreach ($equipSelect as $item)
                <?php $array[] = $item->cod_tipequipamiento; ?>
            @endforeach

            <div class="form-group">
                @foreach ($equipamientos as $equip)
                    <input type="checkbox" name="equipa[]" id="equipa[]" value="{{$equip->cod_tipequipamiento}}" @if(in_array($equip->cod_tipequipamiento, $array)) checked  @endif >{{$equip->equipamiento}}<br>
                @endforeach
            </div>     
            
            <h1>Subir nuevas imágenes</h1>
            <div class="form-group">
                <input type="file" class="form-control-file" name="imagen[]" id="imagen[]" accept="image/*" multiple>
                @error('imagen')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        </div><!-- fin col 4-->
    </div>
    <div class="row">
        <div class="col-md-12 pt-4">  
            <span class="btn-danger">Importante! </span><span>Seleccionar las fotos que desea eliminar definitivamente.</span>         
            <div class="row">
                @foreach ($fotos as $foto)
                    <div class="col-md-3 pt-4">
                        <div class="cerrar">
                            <input type="checkbox" id="deletePhoto[]" name="deletePhoto[]" value="{{$foto->cod_fotos}}">
                        </div>
                            <img src="../{{$foto->ruta}}" class="card-img-top" alt="...">
                    </div>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary" style="margin: 5px;">Editar Propiedad</button>
        </div>
    </div>
    </form>
</div>
@endsection
