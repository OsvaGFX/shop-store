    @extends('layouts.app')
    @section('content') 
    <h1 class="title">Datos del Doctor</h1>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('doctores.index') }}">Regresar</a>
    </div>
    <br>
    <div> 
        <table class="custom-table">
            <tr>
                <td>Nombre:</td>
                <td>{{ $doctor->nombre }}</td>
            </tr>
            <tr>
                <td>Apellido:</td>
                <td>{{ $doctor->apellido }}</td>
            </tr>
            <tr>
                <td>Especialidad:</td>
                <td>{{ $doctor->especialidad }}</td>
            </tr>
        </table>
    </div>  
    @endsection
</html>
