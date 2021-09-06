@extends('welcome')

@section('slide')
<div id="demo" class="carousel slide" data-ride="carousel" style="margin-top: -23px;">

    <!-- Indicators -->
    <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/ccp.jpg" alt="Concepción1" width="1100" height="500">
    </div>
    <div class="carousel-item">
        <img src="images/sanpedro.jpg" alt="San Pedro de la Paz" width="1100" height="500">
    </div>
    <div class="carousel-item">
        <img src="images/ccp.jpg" alt="Concepción" width="1100" height="500">
    </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    </a>
</div>

<div class="container py-2" >
    <div class="col-12 busca-computador  shadow-sm">
    <form class="pt-2" method="POST" id="busqueda" name="busqueda" >
        @csrf
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <label for="clave">Palabra Clave:</label>
                <input type="text" class="form-control" id="clave" placeholder="Ej: Casa Andalue" name="clave">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="comuna">Ubicación:</label>
                <select class="form-control" id="comuna" name="comuna">
                    <option value="">Seleccionar Comuna</option>
                    <?php
                    foreach($comuna as $com): 
                        echo '<option value="'.$com->cod_comuna.'">'.$com->comuna.'</option>';
                    endforeach
                    ?>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="operacion">Tipo de Operación:</label>
                <select class="form-control" id="operacion" name="operacion">
                    <option value="">Seleccionar Operación</option>
                    <?php
                    foreach($operacion as $op): 
                        echo '<option value="'.$op->cod_operacion.'">'.$op->operacion.'</option>';
                    endforeach
                    ?>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="tiprop">Tipo de Propiedad:</label>
                <select class="form-control" id="tiprop" name="tiprop">
                    <option value="">Seleccionar Tipo de Propiedad</option>
                    @foreach($tipo as $tip)
                        <option value="{{$tip->cod_tipropiedad}}">{{$tip->tipopropiedad}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group py-3">
                <button type="submit" class="form-control btn btn-primary">Buscar</button>
            </div>
        </div>
    </div>
        
    </form>
    </div>
</div>
@endsection

@section('content')
<div class="container bg-white py-3">

    <h1 class="text-center color-title">Pulso Propiedades</h1>
        <p class="col-md-10 justify-content-center mx-auto">
            Nuestra empresa se especializa en la <cite title="Source Title">Compra, Venta, Arriendos de inmuebles, Gestión de proyectos y Administración de propiedades</cite>, en el Sur de Chile. Gestionamos de manera personalizada los requerimientos de nuestros clientes.
        </p>
 
    <div class="row" id="prop">

    </div>
</div>
@endsection