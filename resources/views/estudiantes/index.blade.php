@extends('adminlte::page')

@section('title', 'Estudiantes')

@section('content_header')
    <h1>Estudiantes</h1>
@stop

@section('content')
    <a href="{{ route('estudiantes.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo Estudiante</a>
    <table id="estudiantes" class="table table-bordered shadow-lg mt-12">
        <thead class="text-white" style="background-color: #515E78;">
            <tr>
                <td>Nº</td>
                <th class="text-center">Nombre</th>
                <th class="text-center">Apellido Paterno</th>
                <th class="text-center">Apellido Materno</th>
                <th class="text-center">CI</th>
                <th class="text-center">Correo Electrónico</th>
                <th class="text-center">Teléfono</th>
                <th class="text-center">Ciudad</th>
                <th class="text-center">País</th>
                <th class="text-center">Fecha de Nacimiento</th>
                <th class="text-center">Género</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td class="text-center">{{ $estudiante->id }}</td>
                    <td class="text-center">{{ $estudiante->nombre }}</td>
                    <td class="text-center">{{ $estudiante->apellido_paterno }}</td>
                    <td class="text-center">{{ $estudiante->apellido_materno }}</td>
                    <td class="text-center">{{ $estudiante->ci }}</td>
                    <td class="text-center">{{ $estudiante->email }}</td>
                    <td class="text-center">{{ $estudiante->telefono }}</td>
                    <td class="text-center">{{ $estudiante->ciudad }}</td>
                    <td class="text-center">{{ $estudiante->pais }}</td>
                    <td class="text-center">{{ $estudiante->fecha_nacimiento }}</td>
                    <td class="text-center">{{ ucfirst($estudiante->genero) }}</td>
                    <td class="text-center">
                        <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('estudiantes.show', $estudiante) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function(){
            $('#estudiantes').DataTable({
                "ordering": false,
                "language": {
                    "search": "Buscar",
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Siguiente",
                        "first": "Primero",
                        "last": "Último"
                    }
                }
            });
        }); 
    </script>
@endsection
