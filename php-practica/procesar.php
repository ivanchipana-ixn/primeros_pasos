<?php

$nombre = htmlspecialchars($_POST["nombre"] ?? "");
$correo = htmlspecialchars($_POST["correo"] ?? "");
$mensaje = htmlspecialchars($_POST["mensaje"] ?? "");

echo "<h1>Pedido recibido en Mundo Juegos de Mesa</h1>";

echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
echo "<p><strong>Correo:</strong> " . $correo . "</p>";
echo "<p><strong>Especificaciones del pedido:</strong> " . $mensaje . "</p>";

echo "<h2>Información del pedido</h2>";

if ($mensaje !== "") {
    echo "<p>Hemos recibido las indicaciones de tu pedido correctamente.</p>";
} else {
    echo "<p>No se agregaron especificaciones adicionales al pedido.</p>";
}

echo "<p>Te atiende Ivan Carlos Chipana Ramos.</p>";

?>