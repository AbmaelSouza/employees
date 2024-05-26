<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index() {
        $departamentos = Departamento::all();
        return view('departamentos.index', compact('departamentos'));
    }

    public function create() {
        return view('departamentos.create');
    }

    public function store(Request $request) {
        $validated = $request->validate(['nome' => 'required|string|max:255']);
        Departamento::create($validated);
        return redirect()->route('departamentos.index');
    }

    public function show(Departamento $departamento) {
        return view('departamentos.show', compact('departamento'));
    }

    public function edit(Departamento $departamento) {
        return view('departamentos.edit', compact('departamento'));
    }

    public function update(Request $request, Departamento $departamento) {
        $validated = $request->validate(['nome' => 'required|string|max:255']);
        $departamento->update($validated);
        return redirect()->route('departamentos.index');
    }

    public function destroy(Departamento $departamento) {
        $departamento->delete();
        return redirect()->route('departamentos.index');
    }
    public function addEmployee(Departamento $departamento, Funcionario $funcionario) {
        $funcionario->departamento_id = $departamento->id;
        $funcionario->save();
        return redirect()->route('departamentos.show', $departamento);
    }
}
