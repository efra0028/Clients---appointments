@extends('adminlte::page')

@section('title', 'Crear Cargo')

@section('content_header')
    <h1>Nuevo Cargo</h1>
@stop

@section('content')
    <div class="d-flex justify-content-start">
        <div class="card w-50">
            <div class="card-header">
                <h3 class="card-title">Crear Cargo</h3>
            </div>
            <div class="card-body">
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
            </div>
        </div>
    </div>
@stop
