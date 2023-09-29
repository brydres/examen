<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("evento_id");
            $table->unsignedBigInteger("proveedor_id");
            $table->unsignedBigInteger("empleado_id");
            $table->unsignedBigInteger("articulo_id");
            $table->timestamps();
            $table->foreign('evento_id')->references('id')->on('eventos');
            $table->foreign('proveedor_id')->references('id')->on('proveedores');
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('articulo_id')->references('id')->on('articulos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};