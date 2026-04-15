// RELOJ EN TIEMPO REAL
function actualizarHora() {
    const ahora = new Date();
    document.getElementById("fechaHora").innerText = ahora.toLocaleString();
}
setInterval(actualizarHora, 1000);

// AGREGAR ARTÍCULO
function agregarArticulo() {
    const titulo = document.getElementById("titulo").value;
    const descripcion = document.getElementById("descripcion").value;

    if (titulo === "" || descripcion === "") {
        alert("Por favor completa todos los campos");
        return;
    }

    const contenedor = document.getElementById("listaArticulos");

    const articulo = document.createElement("div");
    articulo.innerHTML = `<h3>${titulo}</h3><p>${descripcion}</p>`;

    contenedor.appendChild(articulo);

    // limpiar inputs
    document.getElementById("titulo").value = "";
    document.getElementById("descripcion").value = "";

    actualizarContador();
}

// CONTADOR DE ARTÍCULOS
function actualizarContador() {
    const cantidad = document.getElementById("listaArticulos").children.length;
    document.getElementById("contador").innerText = cantidad;
}

// FORMULARIO DE CONTACTO
function enviarMensaje() {
    const nombre = document.getElementById("nombre").value;
    const mensaje = document.getElementById("mensaje").value;

    if (nombre === "" || mensaje === "") {
        alert("Por favor completa todos los campos");
        return;
    }

    alert("Mensaje enviado correctamente, " + nombre);

    // limpiar formulario
    document.getElementById("nombre").value = "";
    document.getElementById("mensaje").value = "";
}
