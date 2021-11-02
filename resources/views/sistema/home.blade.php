@extends('sistema.plantilla')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">

@section('content')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js" defer></script>

<script>
    $(document).ready(function() {
    $('#listado').DataTable({
        'language': {
				'lengthMenu': 'Registros por página _MENU_ ',
				'zeroRecords': 'No se han encontrado resultados',
				'info': 'Mostrando página _PAGE_ de _PAGES_',
				'infoEmpty': 'No hay registros disponibles',
				'infoFiltered': '(filtrado en un total de _MAX_ registros)',
				'search': 'Buscar',
				'paginate': {
					'next': 'Siguiente',
					'previous': 'Anterior'
				}
			}
    });
} );
</script>

@if (session('status'))
<div class="status alert alert-success">{{session('status')}}</div>
@endif


<div class="container">
    <table id="listado" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Palabra Clave</th>
                <th>Operación</th>
                <th>Tipo Propiedad</th>
                <th>Comuna</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Mt2 Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($model as $prop)
            <tr>
                <th>{{$prop->palabra_clave}}</th>
                <th>{{$prop->operacion}}</th>
                <th>{{$prop->tipopropiedad}}</th>
                <th>{{$prop->comuna}}</th>
                <th>{{$prop->nombre}}</th>
                <th>{{$prop->precio}}</th>
                <th>{{$prop->mt2_total}}mt2</th>
                <th>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-lg" onclick="verPropiedad()"><i class="fa fa-eye"></i></button> 
                        <div><a href="edit/{{ $prop->cod_propiedad }}" class="btn btn-default btn-lg"><i class="fa fa-pencil"></i></a>
                        </div> 
                        <div>
                            <form action="delete/{{ $prop->cod_propiedad }}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-default btn-lg" onclick="return confirm('Seguro deseas elimina la propiedad?')"><i class="fa fa-trash-o"></i></button> 
                            </form>
                        </div>                        
                    </div>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
