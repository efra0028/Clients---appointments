@extends('adminlte::page')
@section('title', 'Modificar Registro de Venta')
@section('content_header')
    <h1>Modificar Registro de Venta</h1>
@stop

@section('content')
    <form action="{{ route('registros_combustibles.update', $registroCombustible) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre_cliente">Nombre del Cliente:</label>
            <input type="text" id="nombre_cliente" name="nombre_cliente" class="form-control" value="{{ $registroCombustible->nombre_cliente }}" required>
        </div>
        <div class="form-group">
            <label for="numero_matricula">Número de Matrícula:</label>
            <input type="text" id="numero_matricula" name="numero_matricula" class="form-control" value="{{ $registroCombustible->numero_matricula }}" required>
        </div>
        <div class="form-group">
            <label for="tipo_combustible">Tipo de Combustible:</label>
            <select id="tipo_combustible" name="tipo_combustible" class="form-control" required>
                <option value="Gasolina" {{ $registroCombustible->tipo_combustible == 'Gasolina' ? 'selected' : '' }}>Gasolina</option>
                <option value="Diésel" {{ $registroCombustible->tipo_combustible == 'Diésel' ? 'selected' : '' }}>Diésel</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad_litro">Cantidad en Litros:</label>
            <input type="number" id="cantidad_litro" name="cantidad_litro" class="form-control" step="0.01" value="{{ $registroCombustible->cantidad_litro}}" required>
        </div>
        <div class="form-group">
            <label for="precio_litro">Precio por Litro:</label>
            <input type="number" id="precio_litro" name="precio_litro" class="form-control" step="0.01" value="{{ $registroCombustible->precio_litro }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_compra">Fecha de la Compra:</label>
            <input type="date" id="fecha_compra" name="fecha_compra" class="form-control" value="{{ $registroCombustible->fecha_compra }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
@stop
