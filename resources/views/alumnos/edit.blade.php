@extends('alumnos.layout')

@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ooops!</strong> Hay algunos problemas con tu entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('alumnos.index') }}"> Regresar</a>
            </div>
        </div>
    </div>

    <div class="card text-center bg-light">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('alumnos.index') }}">
                        <img src="https://svgsilh.com/svg/1633250.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                        Registro alumno
                    </a>
                </li>
            </ul>
        </div>
        <div class="card-body text-bg-success">

            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="w-px-300 p-6 p-md-6" action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="row d-flex justify-content-center mb-3">
                                        <div class="col-sm-3 d-flex ">
                                            <div class="card border-secondary mb-3">
                                                <div class="card-body">
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>CURP:</strong>
                                                            <input type="text" name="CURP" class="form-control" placeholder="CURP">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                            <div class="form-group">
                                                <strong>Nombre:</strong>
                                                <input type="text" name="Nombre" class="form-control" placeholder="Nombre">
                                            </div>
                                        </div>

                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                            <div class="form-group">
                                                <strong>Primer Apellido:</strong>
                                                <input type="text" name="Primer_apellido" class="form-control" placeholder="Primer Apellido">
                                            </div>
                                        </div>

                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                            <div class="form-group">
                                                <strong>Segundo Apellido:</strong>
                                                <input type="text" name="Segundo_apellido" class="form-control" placeholder="Segundo Apellido">
                                            </div>
                                        </div>

                                        <div class="col-xs-3 col-sm-3 col-md-3 ">
                                            <div class="form-group">
                                                <strong>Fecha de nacimiento:</strong>
                                                <input type="datetime-local" class="form-control" name="Fecha_nacimiento">
                                            </div>
                                        </div>

                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                            <label><strong>Sexo:</strong></label>
                                            <select class="form-select form-select-sm-3" name="sexo[]" style="width:250px" >
                                                <option selected disabled>Seleccionar</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                            </select>
                                        </div>


                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                            <label><strong>Entidad nacimiento:</strong></label>
                                            <select class="form-select form-select-lg-3" name="entidad_nacimiento[]" style="width:250px"}>
                                                <option selected disabled>Seleccionar</option>
                                                <option value="Aguascalientes">Aguascalientes</option>
                                                <option value="Baja California">Baja California</option>
                                                <option value="Baja California Sur">Baja California Sur</option>
                                                <option value="Campeche">Campeche</option>
                                                <option value="Chiapas">Chiapas</option>
                                                <option value="Chihuahua">Chihuahua</option>
                                                <option value="CDMX">Ciudad de México</option>
                                                <option value="Coahuila">Coahuila</option>
                                                <option value="Colima">Colima</option>
                                                <option value="Durango">Durango</option>
                                                <option value="Estado de México">Estado de México</option>
                                                <option value="Guanajuato">Guanajuato</option>
                                                <option value="Guerrero">Guerrero</option>
                                                <option value="Hidalgo">Hidalgo</option>
                                                <option value="Jalisco">Jalisco</option>
                                                <option value="Michoacán">Michoacán</option>
                                                <option value="Morelos">Morelos</option>
                                                <option value="Nayarit">Nayarit</option>
                                                <option value="Nuevo León">Nuevo León</option>
                                                <option value="Oaxaca">Oaxaca</option>
                                                <option value="Puebla">Puebla</option>
                                                <option value="Querétaro">Querétaro</option>
                                                <option value="Quintana Roo">Quintana Roo</option>
                                                <option value="San Luis Potosí">San Luis Potosí</option>
                                                <option value="Sinaloa">Sinaloa</option>
                                                <option value="Sonora">Sonora</option>
                                                <option value="Tabasco">Tabasco</option>
                                                <option value="Tamaulipas">Tamaulipas</option>
                                                <option value="Tlaxcala">Tlaxcala</option>
                                                <option value="Veracruz">Veracruz</option>
                                                <option value="Yucatán">Yucatán</option>
                                                <option value="Zacatecas">Zacatecas</option>
                                            </select>
                                        </div>

                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                            <label><strong>El tutor es:</strong></label>
                                            <select class="form-select form-select-sm-3" name="tutor[]" name="Otro" style="width:250px" >
                                                <option selected disabled>Seleccionar</option>
                                                <option value="Papa">Papá</option>
                                                <option value="Mama">Mamá</option>
                                                <input type="text" class="form-control" placeholder="Otro" name="Otro">
                                            </select>
                                        </div>

                                    </div>

                                    <div class="card border-success mb-3" >
                                        <div class="card-header">
                                            Domicilio

                                        </div>
                                        <div class="card-body row d-flex justify-content-center ">
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <strong>Calle:</strong>
                                                    <input type="text" name="Calle" class="form-control" placeholder="Calle">
                                                </div>
                                            </div>

                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <strong>Numero exterior:</strong>
                                                    <input type="text" name="Numero_exterior" class="form-control" placeholder="Numero exterior">
                                                </div>
                                            </div>

                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <strong>Numero interior:</strong>
                                                    <input type="text" name="Numero_interior" class="form-control" placeholder="Numero interior">
                                                </div>
                                            </div>

                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <strong>Entre calle:</strong>
                                                    <input type="text" name="Entre_calle" class="form-control" placeholder="Entre calle">
                                                </div>
                                            </div>

                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <strong>y calle:</strong>
                                                    <input type="text" name="y_calle" class="form-control" placeholder="y calle">
                                                </div>
                                            </div>

                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <strong>Colonia:</strong>
                                                    <input type="text" name="Colonia" class="form-control" placeholder="Colonia">
                                                </div>
                                            </div>

                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <strong>Código postal:</strong>
                                                    <input type="text" name="Codigo_postal" class="form-control" placeholder="Codigo postal">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row mb-6 ">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-9 text-center">
                                            <button type="submit" class="btn btn-success btn-block text-white ">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('script')
<script src="flatpickr.js"></script>
<script>
    flatpickr("input[type=datetime-local]");
</script>
@endpush
