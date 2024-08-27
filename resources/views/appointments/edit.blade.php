@extends('adminlte::page')

@section('title', 'Editar Cita')

@section('content_header')
    <h1>Editar Cita</h1>
@stop

@section('content')
    <form action="{{ route('appointments.update', $appointment) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="client_id">Cliente</label>
            <select name="client_id" id="client_id" class="form-control" required>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}" {{ $appointment->client_id == $client->id ? 'selected' : '' }}>
                        {{ $client->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="appointment_date">Fecha de Cita</label>
            <input type="date" id="appointment_date" name="appointment_date" class="form-control" value="{{ $appointment->appointment_date }}" required>
        </div>

        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" id="address" name="address" class="form-control" value="{{ old('address', $appointment->address) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea id="description" name="description" class="form-control">{{ old('description', $appointment->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('appointments.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@stop
