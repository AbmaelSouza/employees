@extends('layouts.index')
@section('content')
    <div class="container">
        <h1>Departments</h1>
        <a href="{{ route('departamentos.create') }}" class="btn btn-primary mb-3">Create Department</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($departamentos as $departamento)
                <tr>
                    <td>{{ $departamento->id }}</td>
                    <td>{{ $departamento->nome }}</td>
                    <td>
                        <a href="{{ route('departamentos.show', $departamento->id) }}" class="btn btn-sm btn-primary">Show</a>
                        <a href="{{ route('departamentos.edit', $departamento->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
