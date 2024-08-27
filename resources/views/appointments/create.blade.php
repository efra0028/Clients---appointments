@extends('adminlte::page')

@section('title', 'Crear Cita')

@section('content_header')
    <h1>Crear Nueva Cita</h1>
@stop

@section('content')
    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="client_id">Cliente</label>
            <select name="client_id" id="client_id" class="form-control" required>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="appointment_date">Fecha de Cita</label>
            <input type="date" id="appointment_date" name="appointment_date" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" id="address" name="address" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>
       
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
