@extends('layouts.index')
@section('content')
<div class="container">
    <h1>Edit department</h1>
    <form method="POST" action="{{ route('departamentos.update', $departamento->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Name:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $departamento->nome }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
