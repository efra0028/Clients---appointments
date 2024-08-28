@extends('adminlte::page')

@section('title', 'Editar Cargo')

@section('content_header')
    <h1>Editar Cargo</h1>
@stop

@section('content')
    <div class="d-flex justify-content-start">
        <div class="card w-50">
            <div class="card-header">
                <h3 class="card-title">Editar Cargo</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('positions.update', $position) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="job">Cargo</label>
                        <input type="text" name="job" id="job" class="form-control" value="{{ old('job', $position->job) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="description" class="form-control">{{ old('description', $position->description) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('positions.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@stop
