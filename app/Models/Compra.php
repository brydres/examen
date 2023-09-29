<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Compra extends Model
{
    use HasFactory;
    public function proveedor(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }
    public function empleado(): BelongsTo
    {
        return $this->belongsTo(Empleado::class);
    }
    public function articulo(): BelongsTo
    {
        return $this->belongsTo(Articulo::class);
    }
}