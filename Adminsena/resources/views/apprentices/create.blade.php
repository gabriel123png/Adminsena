@extends('layouts.App')

@section('content')

<div class="container mt-4">

    <h2>Registrar Aprendiz</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('apprentices.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Número de Documento</label>
            <input type="text" name="document" class="form-control">
        </div>

        <div class="mb-3">
            <label>Nombres</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Apellidos</label>
            <input type="text" name="lastname" class="form-control">
        </div>

        <div class="mb-3">
            <label>Correo Electrónico</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label>Teléfono</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">
            Guardar Aprendiz
        </button>

    </form>

</div>

@endsection