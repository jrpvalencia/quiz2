<?php

namespace App\Http\Controllers;

use App\Models\Soldado;
use Illuminate\Http\Request;

class SoldadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
            return view('soldado.index');
        
    }

    
    public function store(Request $request)
    {
        //
        $soldado = new Soldado();
        $soldado -> nombre = $request -> Nombre;
        $soldado -> apellido = $request -> Apellido;
        $soldado -> grado = $request -> Grado;
        $soldado -> cod_CE = $request -> CodigoCE;
        $soldado -> num_comp = $request -> NumCompañia;
        $soldado -> cod_cuartel = $request -> CodigoCuartel;
        $soldado -> save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Soldado $soldado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Soldado $soldado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Soldado $soldado)
    {
        //
    }
}
