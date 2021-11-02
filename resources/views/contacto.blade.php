@extends('welcome')

@section('content')
<div class="container bg-white py-3">

<section class="contact-page container">
    <div class="text-center color-title"><h2>Contáctanos</h2>
      <p>Realiza tus cotizaciones, consultas y/o solicitudes a través de nuestro formulario de contacto.</p>
    </div> 

    <div id="loading" style="display: none;position: absolute;z-index: 9;">
      <img id="loading-image" src="img/loading2.gif" alt="Loading..." />
    </div>
              
    <div class="row contact-wrap"> 
      <div class="status alert alert-success" style="display: none"></div>
    <div class="form-content">
                    
    <div class="msj-envio"  style="display:none" id="div_mensaje"></div>
    <div class="msj-error"  style="display:none" id="div_mensaje_error"></div>
        
</section><!--/#contact-page-->


  

  <div class="container" style="padding-top: 20px;padding-bottom: 20px;" id="contacto">
    @if (session('info'))
    <div class="status alert alert-success">{{session('info')}}</div>
  @endif
  
  <form action="{{route('enviarEmail')}}" method="POST" >
  <div class="row">            
    
      @csrf 
      <div class="col-md-8">
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
          <label>Teléfono</label>
          <input type="number" id="fono" name="fono" class="form-control" placeholder="Teléfono">
        </div>
        <div class="form-group">
          <label>Consulta *</label>
          <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Consultas"></textarea>
        </div>     
        @error('message')
            <p class="">{{$message}}</p>
        @enderror                   
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required" onClick="enviarmail()">Enviar</button>
        </div>
      </div>
      <div class="col-md-4" style="text-align: right;">
        <h4 class="featurette">Información de <span class="text-muted">Contacto</span><i class="bi bi-chevron-right"></i></h4>
          

          <div class="card">
            <div class="card-header">
                <p class="lead">Correos</p>
            </div>
            <div class="card-body" style="font-size: 14px;">
              <p>Marcela Orellana</p>
              <i class="bi bi-envelope-open-fill"></i> m.orellana@pulsopropiedades.cl
            </div>
            <div class="card-body" style="font-size: 14px;">
              <p>Paulina Vasquez</p>
              <i class="bi bi-envelope-open-fill"></i> p.vasquez@pulsopropiedades.cl
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <p class="lead">Fono</p>
            </div>
            <div class="card-body" style="font-size: 14px;">
              <p><i style="margin-right: 10px;" class="bi bi-whatsapp"></i>+56 9 76088239</p>
            </div>
          </div>
      </div>  
    
  </div>    
  </form>  
  </div>
</div>
@endsection