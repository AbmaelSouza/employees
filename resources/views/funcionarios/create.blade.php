@extends('layouts.index')
@section('content')
    <div class="container">
        <h1>Create Employee</h1>
        <form method="POST" action="{{ route('funcionarios.store') }}">
            @csrf
            <div class="form-group">
                <label for="nome">Name:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>
            <div class="form-group">
                <label for="idade">Age:</label>
                <input type="number" class="form-control" id="idade" name="idade" required>
            </div>
            <div class="form-group">
                <label for="departamento">Department:</label>
                <select class="form-control" id="departamento" name="departamento_id" required>
                    @foreach($departamentos as $departamento)
                        <option value="{{ $departamento->id }}">{{ $departamento->nome }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
