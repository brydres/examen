<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        return Venta::all();
    }
    public function indexByID($id)
    {
        $buscarVenta = Venta::find($id);
        $buscarVenta->cliente;
        $buscarVenta->empleado;
        $buscarVenta->articulo;

        return $buscarVenta;
    }
    public function create(Request $request)
    {
        $nuevaVenta = new Venta();
        $nuevaVenta->evento_id = $request->evento_id;
        $nuevaVenta->cliente_id = $request->cliente_id;
        $nuevaVenta->empleado_id = $request->empleado_id;
        $nuevaVenta->articulo_id = $request->articulo_id;
        $nuevaVenta->save();

        return "La venta ha sido creada";
    }
    public function update(Request $request, $id)
    {
        $modVenta =  Venta::find($id);
        $modVenta->evento_id = $request->evento_id;
        $modVenta->cliente_id = $request->cliente_id;
        $modVenta->empleado_id = $request->empleado_id;
        $modVenta->articulo_id = $request->articulo_id;
        $modVenta->save();

        return "La venta ha sido modificada";
    }
}