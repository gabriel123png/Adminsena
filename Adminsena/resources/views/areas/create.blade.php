@extends('layouts.App')

@section('content')

<div class="container mt-4">

    <h2>Registrar Área</h2>

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif

    <form action="{{ route('areas.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label class="form-label">
                Nombre del Área
            </label>

            <input
                type="text"
                name="name"
                class="form-control"
                value="{{ old('name') }}"
            >

            @error('name')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror

        </div>

        <button class="btn btn-primary">
            Guardar
        </button>

    </form>

</div>

@endsection