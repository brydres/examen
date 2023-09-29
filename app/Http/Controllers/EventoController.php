<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        return Evento::all();
    }
    public function indexByID($id)
    {
        $buscarEvento = Evento::find($id);

        return $buscarEvento;
    }
    public function create(Request $request)
    {
        $nuevoEvento = new Evento();
        $nuevoEvento->tipo = $request->tipo;
        $nuevoEvento->save();

        return "El evento ha sido creado";
    }
    public function update(Request $request, $id)
    {
        $modEvento = Evento::find($id);
        $modEvento->tipo = $request->tipo;
        $modEvento->save();

        return "El evento ha sido modificado";
    }
    public function delete($id)
    {
        $modEvento = Evento::find($id);
        $modEvento->tipo = "cancelado";
        $modEvento->save();

        return "El evento ha sido cancelado";
    }
}