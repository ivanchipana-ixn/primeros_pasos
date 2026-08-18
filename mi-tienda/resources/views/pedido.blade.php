<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Pedido recibido</title>

    <link rel="stylesheet"
          href="{{ asset('css/styles.css') }}">

</head>

<body>

<header>

    <h1>
        Pedido recibido en Mundo Juegos de Mesa
    </h1>

</header>


<main>

    <section class="contacto">

        <h2>
            Información de tu pedido
        </h2>


        <p>
            <strong>Nombre:</strong>
            {{ $nombre }}
        </p>


        <p>
            <strong>Correo:</strong>
            {{ $correo }}
        </p>


        <p>
            <strong>
                Especificaciones del pedido:
            </strong>

            {{ $mensaje }}

        </p>


        <h2>
            Información del pedido
        </h2>


        @if ($mensaje !== '')

            <p>
                Hemos recibido las indicaciones
                de tu pedido correctamente.
            </p>

        @else

            <p>
                No se agregaron especificaciones
                adicionales al pedido.
            </p>

        @endif


        <p>
            Te atiende Ivan Carlos Chipana Ramos.
        </p>


        <p>

            <a href="{{ route('index') }}">
                ← Volver al inicio
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