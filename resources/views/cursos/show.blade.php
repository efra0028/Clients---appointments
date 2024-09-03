@extends('adminlte::page')

@section('title', 'Detalle del Curso')

@section('content_header')
    <h1>Detalle del Curso</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p><strong>Titulo:</strong> {{ $curso->titulo }}</p>
            <p><strong>Descripcion:</strong> {{ $curso->descripcion }}</p>
        
        </div>
    </div>
    <a href="{{ route('cursos.index') }}" class="btn btn-primary">Volver a la lista</a>
@stop
