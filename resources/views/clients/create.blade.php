@extends('adminlte::page')

@section('title', 'Crear Cliente')

@section('content_header')
    <h1>Nuevo Cliente</h1>
@stop

@section('content')
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="ci">CI</label>
            <input type="number" id="ci" name="ci" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="text" id="phone" name="phone" class="form-control">
        </div>
    
        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" id="address" name="address" class="form-control">
        </div>

        <div class="form-group">
            <label for="city">Ciudad</label>
            <input type="text" id="city" name="city" class="form-control">
        </div>

        <div class="form-group">
            <label for="country">País</label>
            <input type="text" id="country" name="country" class="form-control">
        </div>

        <div class="form-group">
            <label for="birth_date">Fecha de Nacimiento</label>
            <input type="date" id="birth_date" name="birth_date" class="form-control">
        </div>

        <div class="form-group">
            <label for="gender">Género</label>
            <select id="gender" name="gender" class="form-control">
                <option value="male">Masculino</option>
                <option value="female">Femenino</option>
                <option value="other">Otro</option>
            </select>
        </div>
       
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
