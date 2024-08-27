@extends('adminlte::page')

@section('title', 'Inventarios')

@section('content_header')
    <h1>Inventarios</h1>
@stop

@section('content')
    <a href="{{ route('inventories.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo Inventario</a>
    <table id="inventories" class="table table-bordered shadow-lg mt-12">
        <thead class="tabla-inventories text-white" style="background-color: #515E78;">
            <tr>
                <th>Nombre del Artículo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Fecha</th>
                <th>Proveedor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventories as $inventory)
                <tr>
                    <td>{{ $inventory->item_name }}</td>
                    <td>{{ $inventory->quantity }}</td>
                    <td>{{ $inventory->price }}</td>
                    <td>{{ \Carbon\Carbon::parse($inventory->date)->format('d/m/Y') }}</td>
                    <td>{{ $inventory->supplier ? $inventory->supplier->name : 'No disponible' }}</td>
                    <td>
                        <a href="{{ route('inventories.edit', $inventory) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('inventories.show', $inventory) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('inventories.destroy', $inventory) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este inventario?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
