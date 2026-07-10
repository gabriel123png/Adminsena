@extends('layouts.app')

@section('content')

<h1>Hola hijos</h1>

<form action="{{ route('Apprentices.admin') }}" method="POST" enctype="multipart/form-data">

@csrf


<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Email:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>



<button type="submit">Enviar Formulario:</button>
</form>


@endsection