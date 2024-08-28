@extends('adminlte::page')

@section('title', 'Empleados')

@section('content_header')
    <h1>Empleados</h1>
@stop

@section('content')
    <a href="{{ route('employees.create') }}" class="btn btn-primary">Nuevo Empleado</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>CI</th>
                <th>Correo Electrónico</th>
                <th>Cargo</th>
                <th>Departamento</th>
                <th>Fecha de Contratación</th>
                <th>Salario</th>
                <th>Género</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->ci }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->position->job }}</td>
                    <td>{{ $employee->department->name }}</td>
                    <td>{{ $employee->hire_date}}</td>
                    <td>${{ number_format($employee->salary, 2) }}</td>
                    <td>{{ ucfirst($employee->gender) }}</td>
                    <td>
                        <a href="{{ route('employees.show', $employee) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('employees.edit', $employee) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
