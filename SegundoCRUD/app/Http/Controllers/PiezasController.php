<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Piezas;

class PiezasController extends Controller
{
    public function muestra()
    {
        $piezas=Piezas::all();
        return view('welcome')->with('piezas', $piezas);

    }

    public function GuardaPieza(Request $request)
    {
        $pieza =  new Piezas();
        $pieza->Nombre=$request->Nombre;
        $pieza->Descripcion=$request->Descripcion;
        $pieza->NumeroPiezas=$request->NumeroPiezas;
        $pieza->Costo=$request->Costo;
        $pieza->save();
        return redirect('/');

    }

    public function EditaPieza($id)
    {
        $pieza=Piezas::find($id);
        return view('EditaPieza')->with('pieza',$pieza);
    }

    
   public function GuardaEdicion(Request $request)
   {
       $pieza=Piezas::find($request->id);
       $pieza->Nombre=$request->Nombre;
       $pieza->Descripcion=$request->Descripcion;
       $pieza->NumeroPiezas=$request->NumeroPiezas;
       $pieza->Costo=$request->Costo;
       $pieza->save();
       return redirect('/');
   }

   public function Borrar($id)
   {
       $pieza=Piezas::find($id);
       $pieza->delete();

       return redirect('/');
   }
}
