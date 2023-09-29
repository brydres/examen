<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        return Empleado::all();
    }
    public function indexByID($id)
    {
        $buscarEmpleado = Empleado::find($id);
        $buscarEmpleado->ventas;
        $buscarEmpleado->compras;

        return $buscarEmpleado;
    }
    public function create(Request $request)
    {
        $nuevoEmpleado = new Empleado();
        $nuevoEmpleado->nombre = $request->nombre;
        $nuevoEmpleado->nombre = "activo";
        $nuevoEmpleado->save();

        return "Los datos del cliente han sido creados";
    }
    public function update(Request $request, $id)
    {
        $modEmpleado =  Empleado::find($id);
        $modEmpleado->nombre = $request->nombre;
        $modEmpleado->estado = $request->estado;

        $modEmpleado->save();

        return "Los datos del cliente han sido actualizado";
    }
    public function delete($id)
    {
        $deleteEmpleado =  Empleado::find($id);
        $deleteEmpleado->estado = "inactivo";
        $deleteEmpleado->save();

        return "El estado del cliente ha cambiado";
    }
}