<style>
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .btn-back {
            display: block;
            width: 96%;
            padding: 10px;
            margin-top: 20px;
            background-color: #6c757d;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }

        .btn-back:hover {
            background-color: #5a6268;
        }
    </style>
</head>
@extends('layouts.app')
    @section('content') 
    <div class="container">
        <h1 class="title">EDITAR DOCTOR</h1>
        <form action="{{ route('doctores.update', $doctor->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $doctor->nombre }}">
            @error('nombre')
                <div class="error">{{ $message }}</div>
            @enderror
            </div>
            <div>
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" value="{{ $doctor->apellido }}">
            @error('apellido')
                <div class="error">{{ $message }}</div>
            @enderror
            </div>
            <div>
                <label for="especialidad">Especialidad:</label>
                <input type="text" name="especialidad" id="especialidad" value="{{ $doctor->especialidad }}">
            @error('especialidad')
                <div class="error">{{ $message }}</div>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
        <a href="{{ route('doctores.index') }}" class="btn-back">Regresar al Listado</a>
    </div>
</body>
</html>
