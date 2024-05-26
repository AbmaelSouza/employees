@extends('layouts.index')
@section('content')
    <div class="container">
        <h1>Employee Details</h1>
        <div>
            <strong>Name:</strong> {{ $funcionario->nome }}
        </div>
        <div>
            <strong>Email:</strong> {{ $funcionario->email }}
        </div>
        <div>
            <strong>CPF:</strong> {{ $funcionario->cpf }}
        </div>
        <div>
            <strong>Age:</strong> {{ $funcionario->idade }}
        </div>
        <div>
            <strong>Department:</strong> <a
                href="{{route('departamentos.show',$funcionario->departamento->id )}}"> {{ $funcionario->departamento->nome }}</a>
        </div>
        <div>
            <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn btn-primary">Edit</a>
            <form method="POST" action="{{ route('funcionarios.destroy', $funcionario->id) }}"
                  style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete this employee?')">Delete
                </button>
            </form>
        </div>
    </div>
@endsection
