@extends('welcome')

@section('content')
<div class="container bg-white py-3">

<section class="contact-page container">
    <div class="text-center color-title"><h2>Entréganos tu propiedad</h2>
      <p>Si necesitas vender o arrendar tu propiedad, nosotros te ayudamos! Completa el formulario y te contactaremos.</p>
    </div>         
</section><!--/#contact-page-->


 <div class="container" style="padding-top: 20px;padding-bottom: 20px;" id="contacto">

  @if (session('info'))
    <div class="status alert alert-success">{{session('info')}}</div>
  @endif
  
  <form action="{{route('entreganosEmail')}}" method="POST" >
  <div class="row">            
    
      @csrf 
      <div class="col-md-6">
        <mark>Datos personales</mark>
        <div class="form-group">
          <label>Nombre completo*</label>
          <input type="text" id="name"  name="name" class="form-control" required="required" placeholder="Nombre">
        </div>

        <div class="form-group">
          <label>Teléfono / Anexo</label>
          <input type="number" id="fono" name="fono" class="form-control" placeholder="Teléfono">
        </div>
        
        <div class="form-group">
          <label>Email *</label>
          <input type="email" id="email" name="email" class="form-control" required="required" placeholder="Correo">
        </div>                          
        
      </div>


      <div class="col-md-6">
        <mark>Datos de la propiedad</mark>

        <div class="form-group">
          <label>Tipo de casa</label>
          <select id="tipo"  name="tipo" class="form-control">
            <option>CASA</option>
            <option>DEPARTAMENTO</option>
            <option>TERRENO</option>
          </select>
        </div>

        <div class="form-group">
          <label>Ciudad</label>
          <input type="text" id="ciudad"  name="ciudad" class="form-control" required="required" placeholder="Ciudad">
        </div>

        <div class="form-group">
          <label>Dirección</label>
          <input type="text" id="direccion"  name="direccion" class="form-control" required="required" placeholder="Dirección">
        </div>

        <div class="form-group">
          <label>Coordenadas Google Maps (opcional)</label>
          <input type="text" id="coordenadas"  name="coordenadas" class="form-control"  placeholder="Ej: -36.833144597742255, -73.05547144413188">
        </div>

        <div class="form-group">
          <label>Comentarios adicionales</label>
          <textarea name="message" id="message" class="form-control" rows="8" required="required" placeholder="Consultas"></textarea>
        </div>                        
        
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar</button>
        </div>

      </div><!--/#fin col-md-6-->
    
  </div>
  </form>  

</div></div>
@endsection