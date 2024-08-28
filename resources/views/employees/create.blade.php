@extends('adminlte::page')

@section('title', 'Crear Empleado')

@section('content_header')
    <h1 ><center><strong>Nuevo Empleado</strong></center></h1>
@stop

@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <form action="{{ route('employees.store') }}" method="POST" class="w-75">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name">Nombre</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Apellido</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ci">CI</label>
                        <input type="number" id="ci" name="ci" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="text" id="phone" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="birth_date">Fecha de Nacimiento</label>
                        <input type="date" id="birth_date" name="birth_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">Dirección</label>
                        <input type="text" id="address" name="address" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="city">Ciudad</label>
                        <input type="text" id="city" name="city" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="country">País</label>
                        <input type="text" id="country" name="country" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="position_id">Cargo</label>
                        <select id="position_id" name="position_id" class="form-control">
                            @foreach($positions as $position)
                                <option value="{{ $position->id }}">{{ $position->job }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="department_id">Departamento</label>
                        <select id="department_id" name="department_id" class="form-control">
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="hire_date">Fecha de Contratación</label>
                        <input type="date" id="hire_date" name="hire_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="salary">Salario</label>
                        <input type="number" id="salary" name="salary" class="form-control" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Género</label>
                        <select id="gender" name="gender" class="form-control">
                            <option value="male">Masculino</option>
                            <option value="female">Femenino</option>
                            <option value="other">Otro</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-4">Guardar</button>
            </div>
        </form>
    </div>
@stop
