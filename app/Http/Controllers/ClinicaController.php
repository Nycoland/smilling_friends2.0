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
