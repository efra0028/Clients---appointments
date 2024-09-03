@extends('adminlte::page')

@section('title', 'Crear Inscripción')

@section('content_header')
    <h1>Nuevo Registro de Inscripción</h1>
@stop

@section('content')
    <form action="{{ route('registrations.store') }}" method="POST">
        @csrf
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="estudiante_id">Estudiante</label>
                    <select id="estudiante_id" name="estudiante_id" class="form-control" required>
                        <option value="">Seleccione un Estudiante</option>
                        @foreach($estudiantes as $estudiante)
                            <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }} {{ $estudiante->apellido_paterno }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="curso_id">Curso</label>
                    <select id="curso_id" name="curso_id" class="form-control" required>
                        <option value="">Seleccione un Curso</option>
                        @foreach($cursos as $curso)
                            <option value="{{ $curso->id }}">{{ $curso->titulo }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="fecha_inscripcion">Fecha de Inscripción</label>
            <input type="date" id="fecha_inscripcion" name="fecha_inscripcion" class="form-control" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
