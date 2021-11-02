@extends('sistema.plantilla')

@section('content')


<div class="container" style="background-color: #fff">
    
    <div class="row">
        <h4 class="shadow p-3 mb-5 bg-white rounded">Agregar Propiedad</h4>
    </div>
    <form method="post" action="{{route('store')}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-4">
            
            <div class="form-group">
                <label>Nombre *</label>
                <input type="text" id="nombre"  name="nombre" class="form-control" required="required" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label>Descripción *</label>
                <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="4" required="required"></textarea>
            </div>
            <div class="form-group">
                <label>Palabra Clave *</label>
                <input type="text" id="palabra_clave"  name="palabra_clave" class="form-control" required="required">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" id="precio"  name="precio" class="form-control" placeholder="Ej. $600.000">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>UF</label>
                        <input type="text" id="uf"  name="uf" class="form-control" placeholder="Ej. 1.000UF">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Video (pegar Script de Youtube)</label>
                <textarea name="ruta_video" id="ruta_video" class="form-control" cols="30" rows="4"></textarea>
            </div>            
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mt2 Construidos</label>
                        <input type="number" id="mt2_construido"  name="mt2_construido" class="form-control" placeholder="Ej. 400">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mt2 Total *</label>
                        <input type="number" id="mt2_total"  name="mt2_total" class="form-control" required="required" placeholder="Ej. 1200">
                    </div>
                </div>
            </div>    

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Estacionamiento</label>
                        <select name="estacionamiento" id="estacionamiento" class="form-control">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Baños</label>
                        <select name="banio" id="banio" class="form-control">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Habitaciones</label>
                        <select name="habitacion" id="habitacion" class="form-control">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tipo Operación</label>
                        <select name="cod_operacion" id="cod_operacion" class="form-control">
                            @foreach ($operacion as $op)
                                <option value="{{$op->cod_operacion}}">{{$op->operacion}}</option>
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
                                <option value="{{$tipo->cod_tipropiedad}}">{{$tipo->tipopropiedad}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Comuna</label>
                        <select name="cod_comuna" id="cod_comuna" class="form-control">
                            @foreach ($comuna as $comuna)
                                <option value="{{$comuna->cod_comuna}}">{{$comuna->comuna}}</option>
                            @endforeach
                        </select>
                    </div>  
                </div>
            </div>    
            <div class="form-group">
                <label>Ubicación *</label>
                <textarea name="ubicacion" id="ubicacion" class="form-control" cols="30" rows="3" required="required">Pegar Script de Google Maps</textarea>
            </div>
        </div><!--fin col 4-->
        <div class="col-md-4">
            <h1>Subir imágenes</h1>
            <div class="form-group">
                <input type="file" class="form-control-file" name="imagen[]" id="imagen[]" accept="image/*" multiple>
                @error('imagen')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            
            <div class="form-group">
                @foreach ($equipamientos as $equip)
                    <input type="checkbox" name="equipa[]" id="equipa[]" value="{{$equip->cod_tipequipamiento}}" >{{$equip->equipamiento}}<br>
                @endforeach
            </div>

            <div class="form-group">
                <label><strong>En portada</strong></label>
                <input type="checkbox" id="ind_portada"  name="ind_portada" value="1">
            </div>

            <button type="submit" class="btn btn-primary">Agregar Propiedad</button>
        </div><!-- fin col 4-->
    </div>
    </form>
</div>
@endsection
