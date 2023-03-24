<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{

    protected $table = 'alumnos';

    protected $fillable = ['CURP', 'Nombre', 'Primer_apellido', 'Segundo_apellido',  'Fecha_nacimiento',
    'sexo', 'entidad_nacimiento', 'tutor', 'Otro', 'Calle', 'Numero_exterior', 'Numero_interior', 'Entre_calle', 'y_calle',
    'Colonia', 'Codigo_postal'];



    public $timestamps = false;

}
