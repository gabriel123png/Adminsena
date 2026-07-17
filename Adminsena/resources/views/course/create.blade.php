@extends('layouts.App')

@section('content')

<div class="container mt-4">

    <h2>Registrar Curso</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('courses.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Código del Curso</label>
            <input type="text" name="code" class="form-control">
        </div>

        <div class="mb-3">
            <label>Nombre del Curso</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Área</label>
            <input type="number" name="area_id" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">
            Guardar Curso
        </button>

    </form>

</div>

@endsection