<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Titular;

class TitularController extends Controller
{
    public function ListarTitular(){

        $titular = Titular::all();
        return View('Titular.ListarTitular', compact('titular'));
    }

    public function AltaTitular(){
        return View('Titular.AltaTitular');
    }

    public function StoreTitular(Request $request){

        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'dni' => 'required|string|max:20',
            'domicilio' => 'required|string|max:255',
        ]);
        Titular::create($request->all());
        return redirect()->route('ListarTitular');
    }

    public function EditarTitular(Titular $titular){
        return View('Titular.EditarTitular', compact('titular'));
    }

    public function ActualizarTitular(Request $request, Titular $titular){

        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'dni' => 'required|string|max:20',
            'domicilio' => 'required|string|max:255',
        ]);
        $titular->update($request->all());
        return redirect()->route('ListarTitular');
    }

    public function VerTitular(Titular $titular){
        return View('Titular.VerTitular', compact('titular'));
    }

    public function EliminarTitular(Titular $titular){
        $titular->delete();
        return redirect()->route('ListarTitular');
    }
}
