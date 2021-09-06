@extends('welcome')

@section('content')
<div class="container bg-white py-3">

<section class="contact-page container">
    <div class="text-center color-title"><h2>Servicios</h2>
      <p>Si necesitas vender o arrendar tu propiedad, nosotros te ayudamos!.</p>
    </div>         
</section><!--/#contact-page-->

<div class="accordion" id="accordionExample">
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
          aria-expanded="true" aria-controls="collapseOne">
          VENTA Y ARRIENDO DE PROPIEDADES
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
      data-parent="#accordionExample">
        <div class="card-body">
            <p>Nuestra empresa se especializa en la Compra, Venta, Arriendos de inmuebles, y Administración de propiedades, en el Sur de Chile. 
            Gestionamos de manera personalizada los requerimientos de nuestros clientes.</p>
        </div>
    </div>
  </div>
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
          data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          COMPRA VENTA DE UNA PROPIEDAD
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
            <h4>SERVICIOS AL VENDEDOR</h4>
            <p>Nuestra empresa se encarga de asesorarlo en el valor de venta, realizando una tasación al inmueble en cuestión, luego realizamos la búsqueda de potenciales clientes, utilizando herramientas modernas, portales especializados, redes sociales, base de dato. La principal vitrina es nuestra página web, que contiene una amplia cartera de propiedades, la cual se actualiza semanalmente. Una vez captado un interesado, coordinaremos una visita a su propiedad. Si el negocio prospera, lo acompañamos en el proceso de firma de promesa de compraventa, escrituración y enajenación de la vivienda hasta que se inscriba a nombre de su comprador.</p>
            <h4>SERVICIOS AL COMPRADOR</h4>
            <p>Si Ud. desea comprar una vivienda, ponemos a su disposición una amplia variedad de alternativas, las que puede revisar en nuestra página web y en los distintos portales inmobiliarios. Garantizamos una excelente atención, asesoría y lo acompaños hasta que la propiedad se encuentre inscrita a su nombre.</p>
            <p>Gestionamos el proceso  completo en la Compra-Venta</p>
            <ul>
            <li>Reservas</li>
            <li>Firma de promesa de compraventa.</li>
            <li>Recopilación de antecedentes legales para Estudio de Títulos</li>
            <li>Tramitación Hipotecaria</li>
            <li>Coordinación y seguimiento de la Escrituración</li>
            <li>Cobro de créditos hipotecarios.</li>
            <li>Inscripciones</li>
            <li>Alzamientos</li>
            </ul>
        </div>
    </div>
  </div>
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
          data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          ARRIENDO DE UNA PROPIEDAD
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
        labore sustainable.
      </div>
    </div>
  </div>
</div>

</div>
@endsection