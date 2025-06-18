<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoencaController extends Controller
{
    public function index()
    {
        // Lógica para listar doenças
        return view('doencas.index');
    }

    public function create()
    {
        // Lógica para exibir o formulário de criação de doença
        return view('doencas.create');
    }

    public function store(Request $request)
    {
        // Lógica para armazenar uma nova doença
        $request->validate([
            'nome' => 'required|string|max:255',
            'sintoma' => 'nullable|string',
            'nivel' => 'required|integer|min:1|max:5',
            'detalhes' => 'nullable|string',
        ]);

        // Aqui você pode salvar a doença no banco de dados

        return redirect()->route('doencas.index')->with('success', 'Doença criada com sucesso!');
    }

    public function show($id)
    {
        // Lógica para exibir detalhes de uma doença específica
    }

    public function edit($id)
    {
        // Lógica para exibir o formulário de edição de uma doença específica
    }

    public function update(Request $request, $id)
    {
        // Lógica para atualizar uma doença específica
    }

    public function destroy($id)
    {
        // Lógica para excluir uma doença específica
    }
}
