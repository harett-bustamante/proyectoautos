<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class direccion extends Model
{
    use HasFactory;

    protected $table = 'direccion';

    protected $id = 'id';

    public $timestamps = true;

    protected $fillable = [
        'num_exterior',
        'num_interior',
        'calle',
        'colonia',
        'municipio',
        'estado',
        'pais',
        'codigo_postal',
        'id_usuario1'
    ];
}
