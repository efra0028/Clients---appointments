@extends('adminlte::page')

@section('title', 'Detalle de la Inscripción')

@section('content_header')
    <h1>Detalle de la Inscripción</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p><strong>Estudiante:</strong> {{ $registration->estudiante->nombre }} {{ $registration->estudiante->apellido_paterno }}</p>
            <p><strong>Curso:</strong> {{ $registration->curso->titulo }}</p>
            <p><strong>Fecha de Inscripción:</strong> {{ $registration->fecha_inscripcion }}</p>
        </div>
    </div>
    <a href="{{ route('registrations.index') }}" class="btn btn-primary">Volver a la lista</a>
@stop
