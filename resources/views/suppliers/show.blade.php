@extends('adminlte::page')

@section('title', 'Mostrar')

@section('content_header')
    <h1>Ver más</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $supplier->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $supplier->email }}</p>
            <p><strong>Teléfono:</strong> {{ $supplier->phone }}</p>
            <p><strong>Dirección:</strong> {{ $supplier->address }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('suppliers.index') }}" class="btn btn-primary">Atrás</a>
            <a href="{{ route('suppliers.edit', $supplier) }}" class="btn btn-warning">Modificar</a>
            <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop
