@extends('adminlte::page')

@section('title', 'Mostrar Cargo')

@section('content_header')
    <h1>Detalles del Cargo</h1>
@stop

@section('content')
    <div class="d-flex justify-content-start">
        <div class="card w-50">
            <div class="card-header">
                <h3 class="card-title">{{ $position->job }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Cargo:</strong> {{ $position->job }}</p>
                <p><strong>Descripción:</strong> {{ $position->description }}</p>
            </div>
            <div class="card-footer text-start">
                <a href="{{ route('positions.index') }}" class="btn btn-primary">Atrás</a>
                <a href="{{ route('positions.edit', $position) }}" class="btn btn-warning">Modificar</a>
                <form action="{{ route('positions.destroy', $position) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
@stop
