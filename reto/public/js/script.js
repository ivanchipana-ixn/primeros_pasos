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
            "Escriba su nombre completo porfavor.";

        avisoPedido.classList.add("error");

        return;
    }


    // Validar correo
    if (!correo.value.includes("@")) {

        event.preventDefault();

        avisoPedido.textContent =
            "Ese correo no parece válido: escribe correctamente el correo o talve le falta el @.";

        avisoPedido.classList.add("error");

        return;
    }


    // Validar mensaje
    if (mensaje.value.trim() === "") {

        event.preventDefault();

        avisoPedido.textContent =
            "Escriba los detalles del pedido antes de enviar.";

        avisoPedido.classList.add("error");

        return;
    }


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