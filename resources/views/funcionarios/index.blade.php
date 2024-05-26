@extends('layouts.index')
@section('content')
    <h1>Employees</h1>
    <a href="{{ route('funcionarios.create') }}">Add Employee</a>
    <ul>
        @foreach($funcionarios as $funcionario)
            <li>
                {{ $funcionario->nome }} - {{ $funcionario->departamento->nome }}
                <a href="{{ route('funcionarios.show', $funcionario->id) }}">See</a>
                <a href="{{ route('funcionarios.edit', $funcionario->id) }}">Edit</a>
                <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST"
                      style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this employee?')">
                        Exclude
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
