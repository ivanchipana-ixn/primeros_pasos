<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pedido recibido</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <header>
        <h1>¡Pedido realizado correctamente!</h1>
    </header>
<main>
    <section class="contacto">
    

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

    <td>
        <strong>Stock:</strong>
            {{ $pedido->stock }}
    </td>

    <br>

    <p>
        Te atiende Ivan Carlos Chipana Ramos.
    </p>

    <p>
        <a href="{{ url('/') }}">
            Volver al inicio
        </a>
    </p>

    </section>

</main>

    <footer>

    <p>
        &copy; 2026 Ivan Carlos Chipana Ramos
        - Mundo de los Juegos de Mesa
    </p>

    </footer>
</body>

</html>