<?php

namespace App\Http\Controllers;

use App\Enums\TipoAuto;
use App\Models\Titular;
use App\Models\Auto;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function ListarAuto(){
        $auto = Auto::all(); 
        $titular = Titular::all();
        return View('Automovil.ListarAuto', compact('auto','titular'));
    }

    public function AltaAuto(){
        
        $tipoAuto = TipoAuto::asArray();
        $titular= Titular::all();
        return View('Automovil.AltaAuto', compact('titular','tipoAuto'));
    }

    public function StoreAuto(Request $request){

        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'patente' => 'required|string|max:20',
        ]);

        $auto= new Auto;
        $auto->titular_id=$request->input('titular_id');
        $auto->marca=$request->input('marca');
        $auto->modelo=$request->input('modelo');
        $auto->patente=$request->input('patente');
        $auto->tipo=$request->input('tipo');
        $auto->save();
        return redirect()->route('ListarAuto');
    }

    public function EditarAuto(){
        return View('Automovil.EditarAuto');
    }

    public function UnAuto(){
        return View('Automovil.UnAuto');
    }
}
