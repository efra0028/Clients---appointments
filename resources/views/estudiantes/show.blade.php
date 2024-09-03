@extends('adminlte::page')

@section('title', 'Detalle del Estudiante')

@section('content_header')
    <h1>Detalle del Estudiante</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $estudiante->nombre }}</p>
            <p><strong>Apellido Paterno:</strong> {{ $estudiante->apellido_paterno }}</p>
            <p><strong>Apellido Materno:</strong> {{ $estudiante->apellido_materno }}</p>
            <p><strong>CI:</strong> {{ $estudiante->ci }}</p>
            <p><strong>Correo Electrónico:</strong> {{ $estudiante->email }}</p>
            <p><strong>Teléfono:</strong> {{ $estudiante->telefono }}</p>
            <p><strong>Ciudad:</strong> {{ $estudiante->ciudad }}</p>
            <p><strong>País:</strong> {{ $estudiante->pais }}</p>
            <p><strong>Fecha de Nacimiento:</strong> {{ $estudiante->fecha_nacimiento }}</p>
            <p><strong>Género:</strong> {{ ucfirst($estudiante->genero) }}</p>
        </div>
    </div>
    <a href="{{ route('estudiantes.index') }}" class="btn btn-primary">Volver a la lista</a>
@stop
