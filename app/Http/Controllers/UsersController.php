<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        // Lógica para listar usuários
        return response()->json(['message' => 'Listagem de usuários']);
    }

    public function show($id)
    {
        // Lógica para mostrar um usuário específico
        return response()->json(['message' => "Detalhes do usuário {$id}"]);
    }

    public function store(Request $request)
    {
       $user = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        
    }

    public function update(Request $request, $id)
    {
        // Lógica para atualizar um usuário específico
        return response()->json(['message' => "Usuário {$id} atualizado com sucesso"]);
    }

    public function destroy($id)
    {
        // Lógica para deletar um usuário específico
        return response()->json(['message' => "Usuário {$id} deletado com sucesso"]);
    }
}
