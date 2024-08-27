@extends('adminlte::page')

@section('title', 'Mostrar Cliente')

@section('content_header')
    <h1>Detalles del Cliente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $client->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>CI:</strong> {{ $client->ci }}</p>
            <p><strong>Correo Electrónico:</strong> {{ $client->email }}</p>
            <p><strong>Teléfono:</strong> {{ $client->phone }}</p>
            <p><strong>Dirección:</strong> {{ $client->address }}</p>
            <p><strong>Ciudad:</strong> {{ $client->city }}</p>
            <p><strong>País:</strong> {{ $client->country }}</p>
            <p><strong>Fecha de Nacimiento:</strong> {{ $client->birth_date }}</p>
            <p><strong>Género:</strong> {{ ucfirst($client->gender) }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('clients.index') }}" class="btn btn-primary">Atrás</a>
            <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning">Modificar</a>
            <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop
