@extends('adminlte::page')

@section('title', 'Editar Empleado')

@section('content_header')
    <h1><center><strong> Empleado</strong></center></h1>
@stop

@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <form action="{{ route('employees.update', $employee) }}" method="POST" class="w-75">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name">Nombre</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name', $employee->first_name) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Apellido</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name', $employee->last_name) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="ci">CI</label>
                        <input type="number" name="ci" id="ci" class="form-control" value="{{ old('ci', $employee->ci) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $employee->email) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $employee->phone) }}">
                    </div>

                    <div class="form-group">
                        <label for="birth_date">Fecha de Nacimiento</label>
                        <input type="date" name="birth_date" id="birth_date" class="form-control" value="{{ old('birth_date', $employee->birth_date) }}">
                    </div>

                    <div class="form-group">
                        <label for="address">Dirección</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $employee->address) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="city">Ciudad</label>
                        <input type="text" name="city" id="city" class="form-control" value="{{ old('city', $employee->city) }}">
                    </div>

                    <div class="form-group">
                        <label for="country">País</label>
                        <input type="text" name="country" id="country" class="form-control" value="{{ old('country', $employee->country) }}">
                    </div>

                    <div class="form-group">
                        <label for="position_id">Cargo</label>
                        <select id="position_id" name="position_id" class="form-control">
                            @foreach($positions as $position)
                                <option value="{{ $position->id }}" {{ $position->id == $employee->position_id ? 'selected' : '' }}>
                                    {{ $position->job }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="department_id">Departamento</label>
                        <select id="department_id" name="department_id" class="form-control">
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}" {{ $department->id == $employee->department_id ? 'selected' : '' }}>
                                    {{ $department->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="hire_date">Fecha de Contratación</label>
                        <input type="date" name="hire_date" id="hire_date" class="form-control" value="{{ old('hire_date', $employee->hire_date) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="salary">Salario</label>
                        <input type="number" name="salary" id="salary" class="form-control" step="0.01" value="{{ old('salary', $employee->salary) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="gender">Género</label>
                        <select id="gender" name="gender" class="form-control">
                            <option value="male" {{ $employee->gender == 'male' ? 'selected' : '' }}>Masculino</option>
                            <option value="female" {{ $employee->gender == 'female' ? 'selected' : '' }}>Femenino</option>
                            <option value="other" {{ $employee->gender == 'other' ? 'selected' : '' }}>Otro</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@stop
