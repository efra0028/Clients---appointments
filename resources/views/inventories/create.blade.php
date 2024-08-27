@extends('adminlte::page')

@section('title', 'Crear Inventario')

@section('content_header')
    <h1>Crear Nuevo Inventario</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Nuevo Inventario</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('inventories.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="item_name">Nombre del Artículo</label>
                    <input type="text" name="item_name" id="item_name" class="form-control" value="{{ old('item_name') }}" required>
                </div>

                <div class="form-group">
                    <label for="quantity">Cantidad</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" value="{{ old('quantity') }}" required>
                </div>

                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ old('price') }}" required>
                </div>

                <div class="form-group">
                    <label for="date">Fecha</label>
                    <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}" required>
                </div>

                <div class="form-group">
                    <label for="supplier_id">Proveedor</label>
                    <select name="supplier_id" id="supplier_id" class="form-control">
                        <option value="">Seleccione un proveedor (opcional)</option>
                        @foreach($suppliers as $supplier)
                            <option value="{{ $supplier->id }}" {{ old('supplier_id') == $supplier->id ? 'selected' : '' }}>
                                {{ $supplier->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ route('inventories.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop
