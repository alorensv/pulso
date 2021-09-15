@extends('welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">{{$model->nombre}}</div>
                </div>
            </div> 
        </div>     
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
        <div class="col-md-6">
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

            <div class="card">
                <div class="card-header" style="font-size: 14px;text-align:justify">
                    <div class="col-md-6"><i class="bi bi-aspect-ratio"></i>{{$model->mt2_construido}}/{{$model->mt2_total}} MT2</div>
                    <?php if ($model->habitacion > 0) {
                        ?><div class="col-md-6"><i class="fa fa-bed" aria-hidden="true"></i>{{$model->habitacion}} Habitaciones</div><?php
                    }?>
                    <?php if ($model->banio > 0) {
                        ?><div class="col-md-6"><i class="fa fa-bath" aria-hidden="true"></i>{{$model->banio}} Baños</div><?php
                    }?>
                    <?php if ($model->estacionamiento > 0) {
                        ?><div class="col-md-6"><i class="fa fa-bed" aria-hidden="true"></i>{{$model->estacionamiento}} Estacionamiento</div><?php
                    }?> 
                </div>
                <div class="card-body" style="font-size: 14px;">
                    <h4>Equipamiento</h4>
                    <?php
                        foreach($equip as $eq):
                            echo '<i class="bi bi-check2-square"></i> '.$eq->equipamiento.' ';
                        endforeach
                    ?>
                </div>
            </div>
        </div>  
        <div class="col-md-6">
        <?php
        if(isset($model->ruta_video) && $model->ruta_video <> ""){
            ?>
                <div>
                    <?php echo $model->ruta_video; ?>
                </div>
            <?php
        }  
        ?>
            <div class="row">
                <div class="card">
                    <div class="card-header" style="font-size: 14px;text-align:justify">{{$model->descripcion}}</div>
                </div>
                <div class="">
                    <?php echo $model->ubicacion; ?>
                </div>
            </div>
        </div>  
        
    </div>
    <div class="row">        

    </div>
</div>

@endsection