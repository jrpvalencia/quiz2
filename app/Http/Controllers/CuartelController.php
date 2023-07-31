<?php

namespace App\Http\Controllers;

use App\Models\Cuartel;
use Illuminate\Http\Request;

class CuartelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('cuartel.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $cuartel = new Cuartel();
        $cuartel -> nombre = $request -> Nombre;
        $cuartel -> ubicacion = $request -> Ubicacion;
        $cuartel -> save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Cuartel $cuartel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cuartel $cuartel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cuartel $cuartel)
    {
        //
    }
}
