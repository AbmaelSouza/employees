<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index() {
        $funcionarios = Funcionario::with('departamento')->get();
        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create() {
        $departamentos = Departamento::all();
        return view('funcionarios.create', compact('departamentos'));
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:funcionarios,email',
            'cpf' => 'required|string|unique:funcionarios,cpf',
            'idade' => 'required|integer|min:18',
            'departamento_id' => 'required|exists:departamentos,id',
        ]);

        Funcionario::create($validated);

        return redirect()->route('funcionarios.index');
    }

    public function show(Funcionario $funcionario) {
        return view('funcionarios.show', compact('funcionario'));
    }

    public function edit(Funcionario $funcionario) {
        $departamentos = Departamento::all();
        return view('funcionarios.edit', compact('funcionario', 'departamentos'));
    }

    public function update(Request $request, Funcionario $funcionario) {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:funcionarios,email,' . $funcionario->id,
            'cpf' => 'required|string|unique:funcionarios,cpf,' . $funcionario->id,
            'idade' => 'required|integer|min:18',
            'departamento_id' => 'required|exists:departamentos,id',
        ]);

        $funcionario->update($validated);

        return redirect()->route('funcionarios.index');
    }

    public function destroy(Funcionario $funcionario) {
        $funcionario->delete();
        return redirect()->route('funcionarios.index');
    }
}
