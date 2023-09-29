<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index()
    {
        return Articulo::all();
    }
    public function indexByID($id)
    {
        $buscarArticulo = Articulo::find($id);
        $buscarArticulo->ventas;
        $buscarArticulo->compras;
        return $buscarArticulo;
    }
    public function create(Request $request)
    {
        $nuevoArticulo = new Articulo();
        $nuevoArticulo->nombre = $request->nombre;
        $nuevoArticulo->nombre = "activo";
        $nuevoArticulo->save();
        return "Los datos del artículo han sido creados";
    }
    public function update(Request $request, $id)
    {
        $modArticulo =  Articulo::find($id);
        $modArticulo->nombre = $request->nombre;
        $modArticulo->estado = $request->estado;
        $modArticulo->save();
        return "Los datos del artículo han sido actualizado";
    }
    public function delete($id)
    {
        $deleteArticulo =  Articulo::find($id);
        $deleteArticulo->estado = "inactivo";
        $deleteArticulo->save();
        return "El estado del artículo ha cambiado";
    }
}