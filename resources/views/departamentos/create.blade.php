@extends('layouts.index')
@section('content')
<div class="container">
    <h1>Create Department</h1>
    <form method="POST" action="{{ route('departamentos.store') }}">
        @csrf
        <div class="form-group">
            <label for="nome">Name:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>
@endsection
