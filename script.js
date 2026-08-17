const formularioPedido = document.querySelector("#form-pedido");
const avisoPedido = document.querySelector("#error-pedido");
const nombre = document.querySelector("#nombre");
const correo = document.querySelector("#correo");
const mensaje = document.querySelector("#mensaje");

formularioPedido.addEventListener("submit", function (event) {
    event.preventDefault();

    avisoPedido.classList.remove("error", "exito");

    if (nombre.value.trim() === "") {
        avisoPedido.textContent = "Falta tu nombre, caserito.";
        avisoPedido.classList.add("error");
        return;
    }

    if (!correo.value.includes("@")) {
        avisoPedido.textContent = "Ese correo no parece válido: le falta el @.";
        avisoPedido.classList.add("error");
        return;
    }

    if (mensaje.value.trim() === "") {
        avisoPedido.textContent = "Escribe un mensaje antes de enviar.";
        avisoPedido.classList.add("error");
        return;
    }

    avisoPedido.textContent =
        "Pedido recibido, caserito. Te contactamos hoy.";

    avisoPedido.classList.add("exito");
    formularioPedido.reset();
});

const botonModo = document.getElementById("botonModo");

botonModo.addEventListener("click", function () {
    document.body.classList.toggle("oscuro");

    if (document.body.classList.contains("oscuro")) {
        botonModo.textContent = "Cambiar a modo claro";
    } else {
        botonModo.textContent = "Cambiar a modo oscuro";
    }
});