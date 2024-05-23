document.getElementById('formulario-registroC').addEventListener('submit', function(event) {
    // Obtén los valores de los campos
    let nombre = document.getElementById('C_nombre').value.trim();
    let telefono = document.getElementById('C_telefono').value.trim();
    let email = document.getElementById('C_correo').value.trim();
    let comentario = document.getElementById('C_apellido').value.trim();

    // Mensaje de error
    let errorMessage = '';

    // Validación de campo vacío
    if (nombre === '') {
        errorMessage += 'El nombre es obligatorio.\n';
    }

    if (telefono === '') {
        errorMessage += 'El teléfono es obligatorio.\n';
    } else {
        // Expresión regular para validar que solo contenga números
        let telefonoPattern = /^[0-9]+$/;
        if (!telefonoPattern.test(telefono)) {
            errorMessage += 'El teléfono solo puede contener números.\n';
        }
    }

    if (email === '') {
        errorMessage += 'El correo electrónico es obligatorio.\n';
    } else {
        // Expresión regular para validar el correo electrónico
        let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            errorMessage += 'El correo electrónico no es válido.\n';
        }
    }

    if (comentario === '') {
        errorMessage += 'El apellido es obligatorio.\n';
    }

    // Si hay errores, prevenir el envío y mostrar mensajes
    if (errorMessage !== '') {
        alert(errorMessage);
        event.preventDefault();
    }
});