@php use App\Models\Funcionario; @endphp
@extends('layouts.index')
@section('content')
    <div class="container">
        <h1>Department Details</h1>
        <div>
            <strong>Name:</strong> {{ $departamento->nome }}
        </div>
        <div>
            <a href="{{ route('departamentos.edit', $departamento->id) }}" class="btn btn-primary">Edit</a>
            <form method="POST" action="{{ route('departamentos.destroy', $departamento->id) }}"
                  style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete this department?')">Delete
                </button>
            </form>
        </div>
        <br>
        employees in this department
        <br>
        <table class="table" style="display: inline-table; border-collapse: collapse;">
            <thead>
            <tr style="border-bottom: 1px solid #ccc;">
                <th style="padding: 8px;text-align: center;">Employee</th>
                <th style="padding: 8px;text-align: center;">Email</th>
                <th style="padding: 8px;text-align: center;">Go to</th>
            </tr>
            </thead>
            <tbody>
            @foreach($departamento->funcionarios as $funcionario)
                <tr style="border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px; text-align: center;">{{ $funcionario->nome }}</td>
                    <td style="padding: 8px; text-align: center;">{{ $funcionario->email }}</td>
                    <td style="padding: 8px; text-align: center;"><a
                            href="{{route('funcionarios.show',$funcionario->id)}}">Go</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <br>
        employees NOT in this department
        <br>
        <table class="table" style="display: inline-table; border-collapse: collapse;">
            <thead>
            <tr style="border-bottom: 1px solid #ccc;">
                <th style="padding: 8px;text-align: center;">Employee</th>
                <th style="padding: 8px;text-align: center;">Email</th>
                <th style="padding: 8px;text-align: center;">Add to department</th>
            </tr>
            </thead>
            <tbody>
            @foreach(Funcionario::where('departamento_id','!=',$departamento->id)->get() as $funcionario)
                <tr style="border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px; text-align: center;">{{ $funcionario->nome }}</td>
                    <td style="padding: 8px; text-align: center;">{{ $funcionario->email }}</td>
                    <td style="padding: 8px; text-align: center;">
                        <form action="{{ route('departamentos.addEmployee', [$departamento->id,$funcionario->id]) }}"
                              method="POST" class="d-inline">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to add this employee to this department?')">
                                Add
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
