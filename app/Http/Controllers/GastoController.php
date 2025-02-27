<?php

namespace App\Http\Controllers;

use App\Models\Gasto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\GastoRequest;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Gasto::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GastoRequest $request)
    {
        $gasto = Gasto::create($request->all());
        return response()->json(['gasto' => $gasto], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $gasto = Gasto::with('categoria')->find($id);
    
        if (!$gasto) {
            return response()->json(['message' => 'Gasto no encontrado'], 404);
        }
    
        return response()->json($gasto, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GastoRequest $request, Gasto $gasto)
    {
        $gasto->update($request->all());
        return response()->json(['gasto' => $gasto], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gasto $gasto)
    {
        $gasto->delete();
        return response()->json(['message' => 'Gasto eliminado'], Response::HTTP_ACCEPTED);
    }
}
