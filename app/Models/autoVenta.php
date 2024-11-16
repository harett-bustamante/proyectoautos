<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autoVenta extends Model
{
    use HasFactory;

    protected $table = 'auto_venta';

    protected $id = 'id';

    public $timestamps = true;

    protected $fillable = [
        'placa',
        'precio',
        'modelo',
        'marca',
        'color',
        'estatus',
        'id_usuario1'

    ];
}
