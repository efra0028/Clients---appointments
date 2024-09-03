@extends('adminlte::page')

@section('title', 'Crear Curso')

@section('content_header')
    <h1>Nuevo Curso</h1>
@stop

@section('content')
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control" required>
                </div>
            </div>

        </div>

    
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
