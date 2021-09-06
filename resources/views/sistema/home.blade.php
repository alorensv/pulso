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


<div class="container">
    <table id="listado" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Palabra Clave</th>
                <th>Nombre</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($model as $prop)
            <tr>
                <th>{{$prop->palabra_clave}}</th>
                <th>{{$prop->nombre}}</th>
                <th>{{$prop->precio}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
