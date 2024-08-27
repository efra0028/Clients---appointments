@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')
    <a href="{{ route('clients.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo Cliente</a>
    <table id="clients" class="table table-bordered shadow-lg mt-12">
        <thead class="table-clients text-white" style="background-color: #515E78;">
            <tr>
                <td width="15px">Nº</td>
                <th>Nombre</th>
                <th>CI</th>
                <th>Correo Electrónico</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>País</th>
                <th>Fecha de Nacimiento</th>
                <th>Género</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->ci }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->address }}</td>
                    <td>{{ $client->city }}</td>
                    <td>{{ $client->country }}</td>
                    <td>{{ $client->birth_date }}</td>
                    <td>{{ ucfirst($client->gender) }}</td>
                    <td>
                        <a href="{{ route('clients.edit', $client) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('clients.show', $client) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline;">
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
