@extends('adminlte::page')

@section('title', 'Ver Inventario')

@section('content_header')
    <h1>Detalles del Inventario</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $inventory->item_name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Cantidad:</strong> {{ $inventory->quantity }}</p>
            <p><strong>Precio:</strong> {{ $inventory->price }}</p>
            <p><strong>Fecha:</strong> {{ \Carbon\Carbon::parse($inventory->date)->format('d/m/Y') }}</p>
            <p><strong>Proveedor:</strong> {{ $inventory->supplier ? $inventory->supplier->name : 'No disponible' }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('inventories.index') }}" class="btn btn-primary">Atrás</a>
            <a href="{{ route('inventories.edit', $inventory) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('inventories.destroy', $inventory) }}" method="POST" style="display: inline;" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este inventario?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop
