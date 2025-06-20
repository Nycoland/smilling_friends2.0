<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function create()
    {
        return view('cadastro.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function cadastre2(Request $request)
    {
        return response()->json([
            'message' => 'Cadastro realizado com sucesso!'
        ])->header('Access-Control-Allow-Origin', 'http://localhost:3000')
        ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'Content-Type, Accept');
    }
    public function store(Request $request)
    {
                try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users', // Alterado para 'users'
                'password' => 'required|string|min:8',
                // Removi 'confirmed' pois não está no seu frontend
            ]);

            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Usuário cadastrado com sucesso',
                'data' => [
                    'user' => $user,
                    // Não retorne a senha nem o token aqui
                ]
            ], 201); // HTTP 201 Created

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Erro de validação',
                'errors' => $e->errors()
            ], 422); // HTTP 422 Unprocessable Entity
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Erro no servidor: ' . $e->getMessage()
            ], 500); // HTTP 500 Internal Server Error
        }
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
