@extends('welcome')

@section('content')
<div class="container bg-white py-3">

<section class="contact-page container">
    <div class="text-center color-title"><h2>Contáctanos</h2>
      <p>Realiza tus cotizaciones, consultas y/o solicitudes a través de nuestro formulario de contacto.</p>
    </div> 

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="row">Marcela Orellana</div>
                </div>
                <div class="card-body" style="font-size: 14px;">
                <i class="bi bi-envelope-open-fill"></i> m.orellana@pulsopropiedades.cl
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="row">Paulina Vasquez</div>
                </div>
                <div class="card-body" style="font-size: 14px;">
                <i class="bi bi-envelope-open-fill"></i> p.vasquez@pulsopropiedades.cl
                </div>
            </div>
        </div>
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
    <div class="row featurette">

      <div class="col-md-6">
        <div class="form-group">
          <label>Nombre *</label>
          <input type="text" id="name"  name="name" class="form-control" required="required" placeholder="Nombre">
        </div>
        
        <div class="form-group">
          <label>Email *</label>
          <input type="email" id="email" name="email" class="form-control" required="required" placeholder="Correo">
        </div>
                          
        <div class="form-group">
          <label>Teléfono / Anexo</label>
          <input type="number" id="fono" name="fono" class="form-control" placeholder="Teléfono">
        </div>
      </div>


      <div class="col-md-5">

        <div class="form-group">
          <label>Comentarios *</label>
          <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Consultas"></textarea>
        </div>                        
        
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required" onClick="enviarmail()">Enviar</button>
        </div>

      </div><!--/#fin div contacto-page-->


    </div>
  </div>
</div>
@endsection