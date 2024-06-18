@extends('layouts.app')
    @section('content') 
    <h1> CREAR NUEVO DOCTOR </h1>
    <form action="{{ route('doctores.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            @error('nombre')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido">
            @error('apellido')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="especialidad">Especialidad:</label>
            <input type="text" name="especialidad" id="especialidad">
            @error('especialidad')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Guardar</button>
    </form>
    @endsection
</html>
