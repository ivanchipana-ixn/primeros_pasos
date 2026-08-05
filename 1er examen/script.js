const boton = document.getElementById("btn-confirmar");
const nombre = document.getElementById("nombre");
const mensaje = document.getElementById("mensaje");
boton.addEventListener("click", function () {
mensaje.textContent ="Pedido recibido-te atiende "+nombre.value;
mensaje.classList.remove("oculto");
}); No newline at end of file



const formularioPedido = document.querySelector("#form-pedido");
const avisoPedido = document.querySelector("#error-pedido");

function revisarPedido(event) {
  event.preventDefault();

  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;

  if (nombre === "") {

    avisoPedido.textContent = "Falta tu nombre, caserito.";
    avisoPedido.classList.add("error");
    avisoPedido.classList.remove("exito");
  } else if (correo.includes("@") === false) {

    avisoPedido.textContent = "Ese correo no parece correo: le falta el @.";
    avisoPedido.classList.add("error");
    avisoPedido.classList.remove("exito");
  } else {
    avisoPedido.textContent = "Pedido recibido, caserito. Te contactamos hoy.";
    avisoPedido.classList.add("exito");
    avisoPedido.classList.remove("error");
  }
}

formularioPedido.addEventListener("submit", revisarPedido);
