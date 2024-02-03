<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'nombre',
        'direccion_manzana',
        'direccion_calle_principal',
        'direccion_numero',
        'direccion_transversal',
        'direccion_referencia',
        'administrador',
        'telefonos_contacto',
        'email_contacto',
        'ubicacion',
    ];
}
