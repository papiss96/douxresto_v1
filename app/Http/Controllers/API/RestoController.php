<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Resto;
use Illuminate\Http\Request;

class RestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // On récupère tous les resto
        $restos = Resto::all();

        // On retourne les informations des resto en JSON
        return response()->json($restos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Resto $resto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resto $resto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resto $resto)
    {
        //
    }
}
