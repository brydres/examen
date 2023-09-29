<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empleado extends Model
{
    use HasFactory;
    public function ventas(): HasMany
    {
        return $this->hasMany(Venta::class);
    }
    public function compras(): HasMany
    {
        return $this->hasMany(Compra::class);
    }
}