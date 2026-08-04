const boton = document.getElementById("btn-confirmar");
const nombre = document.getElementById("nombre");
const mensaje = document.getElementById("mensaje");
boton.addEventListener("click", function () {
mensaje.textContent ="Pedido recibido-te atiende "+nombre.value;
mensaje.classList.remove("oculto");
});