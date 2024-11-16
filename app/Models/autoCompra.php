<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autoCompra extends Model
{
    use HasFactory;

    protected $table = 'auto_compra';

    protected $id = 'id';

    public $timestamps = true;

    protected $fillable = [
        'precio',
        'modelo',
        'marca',
        'color',
        'estatus',
        'id_usuario1'

    ];
}
