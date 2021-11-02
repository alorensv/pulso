@extends('welcome')

@section('content')
<div class="container" style="background-color: #ffffffc7;">
    <div class="row">    
        <div class="col-md-2">
            <div style="font-size: 18px;color: white;font-weight: 600;padding: 8px;background-color: red;">
                {{$model->operacion}}
            </div>           
        </div> 
        <div class="col-md-5" style="padding: 8px;font-size: 18px;color: red;font-weight: 600;">
            {{$model->palabra_clave}}
        </div> 
        <div class="col-md-5" style="padding: 8px;font-size: 18px;color: red;font-weight: 600;">
            {{$model->uf}} / {{$model->precio}}
        </div>
    </div>
    <div class="row">    
        <div class="col-md-8">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                <?php
                    $i=0;
                    foreach($fotos as $foto):
                        if($i==0){
                            echo '
                            <div class="carousel-item active">
                                <img src="../'.$foto->ruta.'" alt="" title=""></a>
                            </div>';
                        }
                        else{
                            echo '
                            <div class="carousel-item">
                                <img src="../'.$foto->ruta.'" alt="" title=""></a>
                            </div>';
                        }
                        $i++;
                    endforeach
                ?>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>
            </div><!-- fin carousel -->

            <?php
            if(isset($model->ruta_video) && $model->ruta_video <> ""){
                ?>
                    <div style="margin-top: 10px;">
                        <?php echo $model->ruta_video; ?>
                    </div>
                <?php
            }  
            ?>

            <div class="card">
                <div class="card-header" style="font-size: 14px;text-align:justify">
                    <div class="row">
                        <div class="col-md-6"><i class="bi bi-aspect-ratio"></i>{{$model->mt2_construido}}/{{$model->mt2_total}} MT2</div>
                        <?php if ($model->habitacion > 0) {
                            ?><div class="col-md-6"><i class="fa fa-bed" aria-hidden="true"></i>{{$model->habitacion}} Habitaciones</div><?php
                        }?>
                        <?php if ($model->banio > 0) {
                            ?><div class="col-md-6"><i class="fa fa-bath" aria-hidden="true"></i>{{$model->banio}} Baños</div><?php
                        }?>
                        <?php if ($model->estacionamiento > 0) {
                            ?><div class="col-md-6"><i class="fa fa-car" aria-hidden="true"></i>{{$model->estacionamiento}} Estacionamiento</div><?php
                        }?> 
                    </div>
                </div>    
                <div class="card-body" style="font-size: 14px;text-align:justify"><strong>{{$model->nombre}}</strong><br>{{$model->descripcion}}</div>
                <div class="card-header" style="font-size: 14px;">
                    <h4>Equipamiento</h4>
                    <?php
                        foreach($equip as $eq):
                            echo '<i class="bi bi-check2-square"></i> '.$eq->equipamiento.' ';
                        endforeach
                    ?>
                </div>            
            </div>
            
            <div class="">
                <?php echo $model->ubicacion; ?>
            </div>
        </div>  
        <form action="{{route('enviarEmail')}}" method="POST" >
            @csrf 
        <div class="col-md-4">
            <div class="form-group">
                <label>Palabra Clave Propiedad</label>
                <input type="text" id="clave" name="clave" class="form-control" value="{{$model->palabra_clave}}" disabled>
            </div>

            <div class="form-group">
                <label>Nombre *</label>
                <input type="text" id="name"  name="name" class="form-control" required="required" placeholder="Nombre">
            </div>
            @error('name')
                <p class="">{{$name}}</p>
            @enderror                  
            <div class="form-group">
                <label>Email *</label>
                <input type="email" id="email" name="email" class="form-control" required="required" placeholder="Correo">
            </div>
            @error('email')
                <p class="">{{$email}}</p>
            @enderror                       
            <div class="form-group">
                <label>Teléfono / Anexo</label>
                <input type="number" id="fono" name="fono" class="form-control" placeholder="Teléfono">
            </div>
          
            <div class="form-group">
                <label>Comentarios *</label>
                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Consultas"></textarea>
            </div>  
            @error('message')
                <p class="">{{$message}}</p>
            @enderror                       
                  
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required" onClick="enviarmail()">Enviar</button>
            </div>            
        </div> 
        </form>   
        
    </div>
    <div class="row">        

    </div>
</div>

@endsection