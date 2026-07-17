@extends('layouts.App')

@section('content')

<div class="container mt-4">

    <h2>Registrar Centro de Formación</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('TrainingCenters.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Nombre</label>
            <input type="text"
                   name="name"
                   class="form-control"
                   value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label>Ubicación</label>
            <input type="text"
                   name="location"
                   class="form-control"
                   value="{{ old('location') }}">
        </div>

        <button type="submit" class="btn btn-primary">
            Guardar
        </button>

    </form>

</div>

@endsection