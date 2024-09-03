@extends('adminlte::page')

@section('title', 'Inscripciones')

@section('content_header')
    <h1>Inscripciones</h1>
@stop

@section('content')
    <a href="{{ route('registrations.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nueva Inscripción</a>
    <table id="registrations" class="table table-bordered shadow-lg mt-12">
        <thead class="text-white" style="background-color: #515E78;">
            <tr>
                <td>Nº</td>
                <th class="text-center">Estudiante</th>
                <th class="text-center">Curso</th>
                <th class="text-center">Fecha de Inscripción</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registrations as $registration)
                <tr>
                    <td class="text-center">{{ $registration->id }}</td>
                    <td class="text-center">{{ $registration->estudiante->nombre }} {{ $registration->estudiante->apellido_paterno }}</td>
                    <td class="text-center">{{ $registration->curso->titulo }}</td>
                    <td class="text-center">{{ $registration->fecha_inscripcion }}</td>
                    <td class="text-center">
                        <a href="{{ route('registrations.edit', $registration) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('registrations.show', $registration) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('registrations.destroy', $registration) }}" method="POST" style="display:inline;">
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
            $('#registrations').DataTable({
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
