@extends('adminlte::page')

@section('title', 'Departamentos')

@section('content_header')
    <h1>Departamentos</h1>
@stop

@section('content')
    <a href="{{ route('departments.create') }}" class="btn btn-primary">Nuevo Departamento</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
                <tr>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->location }}</td>
                    <td>
                        <a href="{{ route('departments.show', $department) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('departments.edit', $department) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('departments.destroy', $department) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
