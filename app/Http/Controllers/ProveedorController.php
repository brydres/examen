<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        return Proveedor::all();
    }
    public function indexByID($id)
    {
        $buscarProveedor = Proveedor::find($id);
        return $buscarProveedor;
    }
    public function create(Request $request)
    {
        $nuevoProveedor = new Proveedor();
        $nuevoProveedor->nombre = $request->nombre;
        $nuevoProveedor->nombre = "activo";
        $nuevoProveedor->save();
        return "Los datos del empleado han sido creados";
    }
    public function update(Request $request, $id)
    {
        $modProveedor =  Proveedor::find($id);
        $modProveedor->nombre = $request->nombre;
        $modProveedor->estado = $request->estado;
        $modProveedor->save();
        return "Los datos del empleado han sido actualizado";
    }
    public function delete($id)
    {
        $deleteProveedor =  Proveedor::find($id);
        $deleteProveedor->estado = "inactivo";
        $deleteProveedor->save();
        return "El estado del empleado ha cambiado";
    }
}