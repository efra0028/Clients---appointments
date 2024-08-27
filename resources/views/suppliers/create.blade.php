@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>Nuevo Proveedor</h1>
@stop

@section('content')
    <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf
        
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
        
            <div class="form-group">
                <label for="email">Correo</label>
                <input type="text" id="email" name="email" class="form-control" required>
            </div>
        
            <div class="form-group">
                <label for="phone">Telefono</label>
                <input type="text" id="phone" name="phone" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label for="address">Direccion</label>
                <input type="text" id="address" name="address" class="form-control" required>
            </div> 
       
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop