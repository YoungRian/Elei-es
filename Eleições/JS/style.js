function validarCPF() {
    var cpfEnviar = document.getElementById("cpf");
    var cpfAviso = document.getElementById("cpfAviso");

    if (cpfEnviar.ariaValueMax.length > 11) {
        cpfAviso.style.display = "block";
    }
    else {
        cpfAviso.style.display = "none";
    }
}