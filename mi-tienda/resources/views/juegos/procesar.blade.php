<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <title>Pedido recibido</title>
</head>

<body>

    <h1>¡Pedido realizado correctamente!</h1>

    <h2>Datos del pedido</h2>

    <p>
        <strong>Número de pedido:</strong>
        {{ $pedido->id }}
    </p>

    <p>
        <strong>Nombre:</strong>
        {{ $pedido->nombre }}
    </p>

    <p>
        <strong>Correo:</strong>
        {{ $pedido->correo }}
    </p>

    <p>
        <strong>Especificaciones:</strong>
        {{ $pedido->mensaje }}
    </p>

    <br>

    <a href="{{ url('/') }}">
        Volver al inicio
    </a>

</body>

</html>