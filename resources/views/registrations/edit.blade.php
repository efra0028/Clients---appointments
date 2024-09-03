@extends('adminlte::page')

@section('title', 'Editar Inscripción')

@section('content_header')
    <h1>Editar Registro de Inscripción</h1>
@stop

@section('content')
    <form action="{{ route('registrations.update', $registration) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="estudiante_id">Estudiante</label>
                    <select id="estudiante_id" name="estudiante_id" class="form-control" required>
                        @foreach($estudiantes as $estudiante)
                            <option value="{{ $estudiante->id }}" {{ $registration->estudiante_id == $estudiante->id ? 'selected' : '' }}>
                                {{ $estudiante->nombre }} {{ $estudiante->apellido_paterno }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="curso_id">Curso</label>
                    <select id="curso_id" name="curso_id" class="form-control" required>
                        @foreach($cursos as $curso)
                            <option value="{{ $curso->id }}" {{ $registration->curso_id == $curso->id ? 'selected' : '' }}>
                                {{ $curso->titulo }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="fecha_inscripcion">Fecha de Inscripción</label>
            <input type="date" id="fecha_inscripcion" name="fecha_inscripcion" class="form-control" value="{{ $registration->fecha_inscripcion }}" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@stop
