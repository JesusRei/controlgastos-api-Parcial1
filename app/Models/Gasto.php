<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gasto extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'monto',
        'fecha',
        'notas',
        'recurrente',
        'metodo_pago',
        'frecuencia',
        'estado',
        'moneda',
        'proveedor',
       'categoria_id'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}