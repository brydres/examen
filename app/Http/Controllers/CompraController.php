<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index()
    {
        return Compra::all();
    }
    public function indexByID($id)
    {
        $buscarCompra = Compra::find($id);
        $buscarCompra->proveedor;
        $buscarCompra->empleado;
        $buscarCompra->articulo;


        return $buscarCompra;
    }
    public function create(Request $request)
    {
        $nuevaCompra = new Compra();
        $nuevaCompra->evento_id = $request->evento_id;
        $nuevaCompra->proveedor_id = $request->proveedor_id;
        $nuevaCompra->empleado_id = $request->empleado_id;
        $nuevaCompra->articulo_id = $request->articulo_id;
        $nuevaCompra->save();

        return "La compra ha sido creada";
    }
    public function update(Request $request, $id)
    {
        $modCompra =  Compra::find($id);
        $modCompra->evento_id = $request->evento_id;
        $modCompra->proveedor_id = $request->proveedor_id;
        $modCompra->empleado_id = $request->empleado_id;
        $modCompra->articulo_id = $request->articulo_id;
        $modCompra->save();

        return "La compra ha sido modificada";
    }
}