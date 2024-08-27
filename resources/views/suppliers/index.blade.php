@extends('adminlte::page')

@section('title', 'Supplier')

@section('content_header')
    <h1>Proveedores</h1>
@stop

@section('content')
    <a href="{{ route('suppliers.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo </a>
    <table id="suppliers" class="table table-bordered shadow-lg mt-12">
        <thead class="tabla-suppliers  text-white" style="background-color: #515E78;">
            <tr>
                <td width="15px">Nº</td>
                <th>Nombre</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->id }}</td>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->email }}</td>
                    <td>{{ $supplier->phone }}</td>
                    <td>{{ $supplier->address }}</td>
                    <td>
                    <a href="{{ route('suppliers.edit', $supplier) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('suppliers.show', $supplier) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST" style="display:inline;">
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