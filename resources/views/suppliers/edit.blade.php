@extends('adminlte::page')

@section('title', 'Editar Proveedor')

@section('content_header')
    <h1>Editar Proveedor</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Editar: {{ $supplier->name }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('suppliers.update', $supplier) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $supplier->name) }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $supplier->email) }}" required>
                </div>

                <div class="form-group">
                    <label for="phone">Teléfono</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $supplier->phone) }}">
                </div>

                <div class="form-group">
                    <label for="address">Dirección</label>
                    <textarea name="address" id="address" class="form-control">{{ old('address', $supplier->address) }}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop
