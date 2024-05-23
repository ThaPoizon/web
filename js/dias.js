document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('reservaForm');
    
    form.addEventListener('submit', function(event) {
        // Obtener los valores de las fechas
        const fEntrada = document.querySelector('input[name="f_entrada"]').value;
        const fSalida = document.querySelector('input[name="f_salida"]').value;

        // Obtener el valor del campo de selección de habitaciones
        const fkHabitaciones = document.querySelector('select[name="seleccionaFK_Habitacion"]').value;

        // Obtener el valor del campo de selección de clientes
        const fkClientes = document.querySelector('select[name="seleccionaFK_CLiente"]').value;

        // Obtener el valor del campo de estado
        const estado = document.querySelector('select[name="estado"]').value;

        // Obtener el valor del campo de adultos
        const adultos = document.querySelector('input[name="adultos"]').value;

        // Obtener el valor del campo de infantes
        const infantes = document.querySelector('input[name="infantes"]').value;

         // Crear un objeto con los datos a enviar al servidor
         const datos = {
            fkclientes: fkClientes,
            fkhabitaciones: fkHabitaciones,
            fentrada: fEntrada,
            fsalida: fSalida,
            estado: estado,
            numadultos: adultos,
            numinfantes: infantes
        };

        // Realizar una solicitud AJAX para enviar los datos al servidor
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'registro_reserva1.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Manejar la respuesta del servidor si es necesario
                console.log('Datos enviados correctamente');
            } else {
                // Manejar errores si la solicitud falla
                console.error('Error al enviar los datos');
            }
        };
        xhr.send(JSON.stringify(datos));

        // Asegurarse de que ambas fechas están seleccionadas
        if (fEntrada && fSalida) {
            // Convertir las fechas a objetos Date
            const fechaEntrada = new Date(fEntrada);
            const fechaSalida = new Date(fSalida);

            // Calcular la diferencia en milisegundos
            const diferenciaTiempo = fechaSalida - fechaEntrada;

            // Convertir la diferencia de milisegundos a días
            const diferenciaDias = diferenciaTiempo / (1000 * 60 * 60 * 24);

            // Guardar el resultado en localStorage (opcional)
            localStorage.setItem('diferenciaDias', diferenciaDias);

            // Redirigir a index.php con la diferencia de días como parámetro GET
            event.preventDefault();
            window.location.href = `paypal/index.php?diferenciaDias=${diferenciaDias}&fkHabitaciones=${fkHabitaciones}&fkClientes=${fkClientes}&estado=${estado}&adultos=${adultos}&infantes=${infantes}&FEntrada=${fechaEntrada}&FSalida=${fechaSalida}`;
        } else {
            // Si no se seleccionan las fechas, prevenir el envío del formulario y mostrar una alerta
            event.preventDefault();
            alert("Por favor, selecciona ambas fechas.");
        }
    });
});