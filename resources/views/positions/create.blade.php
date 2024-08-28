@extends('adminlte::page')

@section('title', 'Crear Cargo')

@section('content_header')
    <h1>Nuevo Cargo</h1>
@stop

@section('content')
    <form action="{{ route('positions.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="job">Cargo</label>
            <input type="text" id="job" name="job" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
