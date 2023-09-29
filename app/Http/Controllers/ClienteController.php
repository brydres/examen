<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return Cliente::all();
    }
    public function indexByID($id)
    {
        $buscarCliente = Cliente::find($id);
        $buscarCliente->ventas;

        return $buscarCliente;
    }
    public function create(Request $request)
    {
        $nuevoCliente = new Cliente();
        $nuevoCliente->nombre = $request->nombre;
        $nuevoCliente->nombre = "activo";
        $nuevoCliente->save();

        return "Los datos del cliente han sido creados";
    }
    public function update(Request $request, $id)
    {
        $modCliente =  Cliente::find($id);
        $modCliente->nombre = $request->nombre;
        $modCliente->estado = $request->estado;

        $modCliente->save();

        return "Los datos del cliente han sido actualizado";
    }
    public function delete($id)
    {
        $deleteCliente =  Cliente::find($id);
        $deleteCliente->estado = "inactivo";
        $deleteCliente->save();

        return "El estado del cliente ha cambiado";
    }
}