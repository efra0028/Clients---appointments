@extends('adminlte::page')

@section('title', 'Crear Departamento')

@section('content_header')
    <h1>Nuevo Departamento</h1>
@stop

@section('content')
    <form action="{{ route('departments.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="location">Ubicación</label>
            <input type="text" id="location" name="location" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
