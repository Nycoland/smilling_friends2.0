<?php

namespace App\Http\Controllers;

use App\Models\Clinica;
use Illuminate\Http\Request;

class ClinicaController extends Controller
{
    public function index()
    {
        $clinicas = Clinica::all();
        return view('clinicas.index', compact('clinicas'));
    }



    public function create() 
    {
        return view('clinicas.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'endereco' => 'required|string|max:255',
            'telefone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        Clinica::create($request->all());

        return redirect()->route('clinicas.index')->with('success', 'Clínica criada com sucesso!');
    }




    public function show(Clinica $clinica)
    {
        
    }



    public function edit(Clinica $clinica)
    {

    }


    public function update(Request $request, Clinica $clinica)
    {

    }


    public function destroy(Clinica $clinica)
    {

    }
}
