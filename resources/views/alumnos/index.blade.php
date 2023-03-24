@extends('alumnos.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left ">
                <h2>Registro Alumno</h2>

            </div>
            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('alumnos.create') }}"> Crear nuevo alumno</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered ">
        <tr class="table-dark">
            <th>No</th>
            <th>CURP</th>
            <th>Nombre</th>
            <th>Primer apellido</th>
            <th>Segundo apellido</th>
            <th>Fecha nacimiento</th>
            <th>Sexo</th>
            <th>Entidad nacimiento</th>
            <th>Tutor</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($alumnos as $alumno)
        <tr>
            <tr >
            <td class="table-secondary">{{ ++$i }}</td>
            <td class="table-secondary">{{ $alumno->CURP }}</td>
            <td class="table-secondary">{{ $alumno->Nombre }}</td>
            <td class="table-secondary">{{ $alumno->Primer_apellido }}</td>
            <td class="table-secondary">{{ $alumno->Segundo_apellido }}</td>
            <td class="table-secondary">{{ $alumno->Fecha_nacimiento }}</td>
            <td class="table-secondary">{{ $alumno->sexo }}</td>
            <td class="table-secondary">{{ $alumno->entidad_nacimiento }}</td>
            <td class="table-secondary">{{ $alumno->tutor }}</td>
            <td class="table-secondary">
                <form action="{{ route('alumnos.destroy',$alumno->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('alumnos.show',$alumno->id) }}">Mostrar</a>

                    <a class="btn btn-primary" href="{{ route('alumnos.edit',$alumno->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $alumnos->links() !!}

@endsection
