@extends('adminlte::page')

@section('title', 'Editar Departamento')

@section('content_header')
    <h1>Editar Departamento</h1>
@stop

@section('content')
    <form action="{{ route('departments.update', $department) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $department->name) }}" required>
        </div>

        <div class="form-group">
            <label for="location">Ubicación</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $department->location) }}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('departments.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@stop
