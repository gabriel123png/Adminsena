<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


   <h1>formulario producto</h1>

<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="nombre">
</label>
<br>
<label>
    Descripcion:
    <br>
    <input type="text" name="descripcion">
</label>
<br>
<label>
    Precio:
    <br>
    <input type="number" name="precio">
</label>
<br>
<label>
    Cantidad:
    <br>
    <input type="number" name="cantidad">
</label>
<br>
<label>
    Peso:
    <br>
    <input type="number" name="peso">
</label>
<br>
<label>
    Tamano:
    <br>
    <input type="number" name="tamano">
</label>
<br>
<br>

<label for="user_id">Usuario</label>

    <select name="user_id" id="user_id" class="form-control">
        <option value="">Seleccione un usuario</option>

        @foreach($users as $user)
            <option value="{{ $user->id }}">
                {{ $user->name }}
            </option>
        @endforeach
    </select>

<br>
<br><br>
<button type="submit">Ingresar Producto:</button>
</form>


</body>
</html>