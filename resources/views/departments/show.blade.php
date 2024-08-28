@extends('adminlte::page')

@section('title', 'Mostrar Departamento')

@section('content_header')
    <h1>Detalles del Departamento</h1>
@stop

@section('content')
    <div class="d-flex justify-content-start">
        <div class="card w-50">
            <div class="card-header">
                <h3 class="card-title">{{ $department->name }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Nombre:</strong> {{ $department->name }}</p>
                <p><strong>Ubicación:</strong> {{ $department->location }}</p>
            </div>
            <div class="card-footer text-start">
                <a href="{{ route('departments.index') }}" class="btn btn-primary">Atrás</a>
                <a href="{{ route('departments.edit', $department) }}" class="btn btn-warning">Modificar</a>
                <form action="{{ route('departments.destroy', $department) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
@stop
