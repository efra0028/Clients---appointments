@extends('adminlte::page')

@section('title', 'Cargos')

@section('content_header')
    <h1>Cargos</h1>
@stop

@section('content')
    <a href="{{ route('positions.create') }}" class="btn btn-primary">Nuevo Cargo</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Cargo</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($positions as $position)
                <tr>
                    <td>{{ $position->job }}</td>
                    <td>{{ $position->description }}</td>
                    <td>
                        <a href="{{ route('positions.show', $position) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('positions.edit', $position) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('positions.destroy', $position) }}" method="POST" style="display: inline;">
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
