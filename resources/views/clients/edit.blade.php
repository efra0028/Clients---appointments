@extends('adminlte::page')

@section('title', 'Editar Cliente')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Editar: {{ $client->name }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('clients.update', $client) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $client->name) }}" required>
                </div>

                <div class="form-group">
                    <label for="ci">CI</label>
                    <input type="number" name="ci" id="ci" class="form-control" value="{{ old('ci', $client->ci) }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $client->email) }}" required>
                </div>

                <div class="form-group">
                    <label for="phone">Teléfono</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $client->phone) }}">
                </div>

                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $client->address) }}">
                </div>

                <div class="form-group">
                    <label for="city">Ciudad</label>
                    <input type="text" name="city" id="city" class="form-control" value="{{ old('city', $client->city) }}">
                </div>

                <div class="form-group">
                    <label for="country">País</label>
                    <input type="text" name="country" id="country" class="form-control" value="{{ old('country', $client->country) }}">
                </div>

                <div class="form-group">
                    <label for="birth_date">Fecha de Nacimiento</label>
                    <input type="date" name="birth_date" id="birth_date" class="form-control" value="{{ old('birth_date', $client->birth_date) }}">
                </div>

                <div class="form-group">
                    <label for="gender">Género</label>
                    <select id="gender" name="gender" class="form-control">
                        <option value="male" {{ old('gender', $client->gender) == 'male' ? 'selected' : '' }}>Masculino</option>
                        <option value="female" {{ old('gender', $client->gender) == 'female' ? 'selected' : '' }}>Femenino</option>
                        <option value="other" {{ old('gender', $client->gender) == 'other' ? 'selected' : '' }}>Otro</option>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('clients.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop
