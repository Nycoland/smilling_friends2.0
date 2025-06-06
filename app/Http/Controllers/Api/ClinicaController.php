<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Clinica;
use Illuminate\Http\Request;

class ClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['clinicas'=>Clinica::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clinica = Clinica::create($request->all());
        return response()->json($clinica, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Clinica::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $clinica = Clinica::findOrFail($id);
        $clinica->update($request->all());
        return response()->json($clinica);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Clinica::destroy($id);
        return response()->json(null, 204);
    }
}
