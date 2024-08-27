@extends('adminlte::page')

@section('title', 'Mostrar Cita')

@section('content_header')
    <h1>Detalles de la Cita</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cita para {{ $appointment->client->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Fecha:</strong> {{ $appointment->appointment_date }}</p>
            <p><strong>Dirección:</strong> {{ $appointment->address }}</p>
            <p><strong>Descripción:</strong> {{ $appointment->description }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('appointments.index') }}" class="btn btn-primary">Atrás</a>
            <a href="{{ route('appointments.edit', $appointment) }}" class="btn btn-warning">Modificar</a>
            <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop
