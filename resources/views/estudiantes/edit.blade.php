@extends('adminlte::page')

@section('title', 'Editar Estudiante')

@section('content_header')
    <h1>Editar Estudiante</h1>
@stop

@section('content')
    <form action="{{ route('estudiantes.update', $estudiante) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $estudiante->nombre }}" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="apellido_paterno">Apellido Paterno</label>
                    <input type="text" id="apellido_paterno" name="apellido_paterno" class="form-control" value="{{ $estudiante->apellido_paterno }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="apellido_materno">Apellido Materno</label>
                    <input type="text" id="apellido_materno" name="apellido_materno" class="form-control" value="{{ $estudiante->apellido_materno }}" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="ci">CI</label>
                    <input type="text" id="ci" name="ci" class="form-control" value="{{ $estudiante->ci }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" value="{{ $estudiante->fecha_nacimiento }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ $estudiante->email }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" id="telefono" name="telefono" class="form-control" value="{{ $estudiante->telefono }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" id="ciudad" name="ciudad" class="form-control" value="{{ $estudiante->ciudad }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="pais">País</label>
                    <input type="text" id="pais" name="pais" class="form-control" value="{{ $estudiante->pais }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="genero">Género</label>
                    <select id="genero" name="genero" class="form-control">
                        <option value="">Seleccione</option>
                        <option value="masculino" {{ $estudiante->genero == 'masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="femenino" {{ $estudiante->genero == 'femenino' ? 'selected' : '' }}>Femenino</option>
                    </select>
                </div>
            </div>
        </div>
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@stop
