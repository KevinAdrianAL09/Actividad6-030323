<!DOCTYPE html>



<html>
<head>
    <title>Vista del producto</title>
</head>
<body>




    <h1>Vista del producto</h1>
    



</body>


<a href="{{ route('productos.index') }}">Ver productos</a>

<a href="{{ route('productos.index') }}">Lista de productos</a>
<a href="{{ route('productos.create') }}">Crear un nuevo producto</a>
<a href="{{ route('productos.edit', $producto) }}">Editar este producto</a>

<a href="{{ route('productos.create') }}">Agregar producto</a>



</html>
