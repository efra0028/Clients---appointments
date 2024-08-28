@extends('adminlte::page')

@section('title', 'Mostrar Empleado')

@section('content_header')
    <h1>Detalles del Empleado</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $employee->first_name }} {{ $employee->last_name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $employee->first_name }}</p>
            <p><strong>Apellido:</strong> {{ $employee->last_name }}</p>
            <p><strong>CI:</strong> {{ $employee->ci }}</p>
            <p><strong>Correo Electrónico:</strong> {{ $employee->email }}</p>
            <p><strong>Teléfono:</strong> {{ $employee->phone }}</p>
            <p><strong>Fecha de Nacimiento:</strong> {{ $employee->birth_date ? $employee->birth_date: 'No disponible' }}</p>
            <p><strong>Dirección:</strong> {{ $employee->address }}</p>
            <p><strong>Ciudad:</strong> {{ $employee->city }}</p>
            <p><strong>País:</strong> {{ $employee->country }}</p>
            <p><strong>Cargo:</strong> {{ $employee->position->job }}</p>
            <p><strong>Departamento:</strong> {{ $employee->department->name }}</p>
            <p><strong>Fecha de Contratación:</strong> {{ $employee->hire_date->format('Y-m-d') }}</p>
            <p><strong>Salario:</strong> ${{ number_format($employee->salary, 2) }}</p>
            <p><strong>Género:</strong> {{ ucfirst($employee->gender) }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('employees.index') }}" class="btn btn-primary">Atrás</a>
            <a href="{{ route('employees.edit', $employee) }}" class="btn btn-warning">Modificar</a>
            <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop
