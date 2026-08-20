<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <header>
        <h1>Iniciar sesión</h1>
    </header>
<main>
<section class="login">
    
    <form method="POST" action="{{ route('login.procesar') }}">

        @csrf

        <label for="email">
            Correo:
        </label>

        <br>

        <input
            type="email"
            id="email"
            name="email"
            required
        >

        <br><br>

        <label for="password">
            Contraseña:
        </label>

        <br>

        <input
            type="password"
            id="password"
            name="password"
            required
        >

        <br><br>

        <button type="submit">
            Iniciar sesión
        </button>

    </form>

    @if ($errors->any())

        <p style="color:red;">
            {{ $errors->first() }}
        </p>

    @endif

    <br>

    <p>
        <a href="{{ url('/') }}">
            Volver al inicio
        </a>
    </p>

    </section>
</main>
</body>

</html>