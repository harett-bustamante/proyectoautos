<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class usuario extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;
    
    protected $table = 'usuario';

    protected $id = 'id';

    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'correo',
        'contrasena'
    ];

}
