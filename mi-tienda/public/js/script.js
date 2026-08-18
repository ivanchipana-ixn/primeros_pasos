const formularioPedido = document.querySelector("#form-pedido");
const avisoPedido = document.querySelector("#error-pedido");
const nombre = document.querySelector("#nombre");
const correo = document.querySelector("#correo");
const mensaje = document.querySelector("#mensaje");

formularioPedido.addEventListener("submit", function (event) {

    avisoPedido.classList.remove("error", "exito");

    // Validar nombre
    if (nombre.value.trim() === "") {

        event.preventDefault();

        avisoPedido.textContent =
            "Falta tu nombre, caserito.";

        avisoPedido.classList.add("error");

        return;
    }


    // Validar correo
    if (!correo.value.includes("@")) {

        event.preventDefault();

        avisoPedido.textContent =
            "Ese correo no parece válido: le falta el @.";

        avisoPedido.classList.add("error");

        return;
    }


    // Validar mensaje
    if (mensaje.value.trim() === "") {

        event.preventDefault();

        avisoPedido.textContent =
            "Escribe un mensaje antes de enviar.";

        avisoPedido.classList.add("error");

        return;
    }


    /*
     * Si llegamos aquí significa que
     * JavaScript considera válido el formulario.
     *
     * NO usamos event.preventDefault().
     *
     * Por lo tanto el formulario continúa
     * hacia Laravel.
     */

});


const botonModo = document.getElementById("botonModo");


botonModo.addEventListener("click", function () {

    document.body.classList.toggle("oscuro");


    if (document.body.classList.contains("oscuro")) {

        botonModo.textContent =
            "Cambiar a modo claro";

    } else {

        botonModo.textContent =
            "Cambiar a modo oscuro";

    }

});