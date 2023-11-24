<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Enums\TipoInfraccion;
use App\Models\Auto;
use App\Models\Infraccion;
use Carbon\Carbon;

class InfraccionController extends Controller
{

    public function ListarInfraccion(){

        $auto = Auto::all();
        $infraccion = Infraccion::all();
        return View('Infraccion.ListarInfraccion', compact('auto','infraccion'));
    }

    public function AltaInfraccion(){

        $auto = Auto::all();
        $tipoInfraccion = TipoInfraccion::asArray();
        return View('Infraccion.AltaInfraccion', compact('auto','tipoInfraccion'));
    }

    public function StoreInfraccion(Request $request){

        $request->validate([
            'fecha' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ]);

        $fecha = Carbon::createFromFormat('d/m/Y', $request->fecha)->format('Y-m-d');
        $infraccion= new Infraccion;
        $infraccion->auto_id=$request->input('auto_id');
        $infraccion->fecha=$fecha;
        $infraccion->descripcion=$request->input('descripcion');
        $infraccion->tipo=$request->input('tipoInfraccion');
        $infraccion->save();
        return redirect()->route('ListarInfraccion');

    }

    public function EditarInfraccion(Infraccion $infraccion){
        return View('Infraccion.EditarInfraccion', compact('infraccion'));
    }

    /*public function ActualizarInfraccion(Request $request, Infraccion $infraccion){

        $fecha = Carbon::createFromFormat('d/m/Y', $request->fecha)->format('Y-m-d');

        $infraccion= Infraccion::findOrFail($infraccion);
        $infraccion->auto_id=$request->input('auto_id');
        $infraccion->fecha=$fecha;
        $infraccion->descripcion=$request->input('descripcion');
        $infraccion->tipo=$request->input('tipoInfraccion');
        $infraccion->save();
        return redirect()->route('ListarInfraccion');
    }*/

}
