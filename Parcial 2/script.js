const formulario = document.getElementById("form-helados");

formulario.addEventListener("submit", function(event) {

const nombre = document.getElementById("nombre").value;
const correo = document.getElementById("correo").value;
const aviso = document.getElementById("aviso-helados");

if (nombre.trim() === "" || correo.trim() === "") {

event.preventDefault();

aviso.textContent = "Falta tu nombre o tu correo - sin eso no podemos anotar el pedido.";
aviso.classList.add("error");
aviso.classList.remove("exito");

} else if (!correo.includes("@")) {

event.preventDefault();

aviso.textContent = "Ese correo no tiene arroba - revísalo por favor.";
aviso.classList.add("error");
aviso.classList.remove("exito");

} else {

aviso.textContent = "Pedido anotado - te atiende Ivan Carlos Chipana Ramos";
aviso.classList.add("exito");
aviso.classList.remove("error");
}

}
);