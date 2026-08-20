<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pedidos registrados</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <header>
        <h1>Pedidos registrados</h1>
    </header>
<main>
    <section class="registro">
    
    <p>
        Bienvenido,
        <strong>{{ Auth::user()->name }}</strong>
    </p>

    <table border="1">

        <thead>

            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Pedido</th>
                <th>Fecha</th>
            </tr>

        </thead>

        <tbody>

            @forelse ($pedidos as $pedido)

                <tr>

                    <td>
                        {{ $pedido->id }}
                    </td>

                    <td>
                        {{ $pedido->nombre }}
                    </td>

                    <td>
                        {{ $pedido->correo }}
                    </td>

                    <td>
                        {{ $pedido->mensaje }}
                    </td>

                    <td>
                        {{ $pedido->created_at }}
                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="5">
                        No existen pedidos registrados.
                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

    <br>

    <form method="POST" action="{{ route('logout') }}">

        @csrf

        <button type="submit">
            Cerrar sesión
        </button>

    </form>

    <br>

    <a href="{{ url('/') }}">
        Volver al inicio
    </a>

    </section>
</main>
</body>

</html>