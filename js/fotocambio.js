$(document).ready(function() {
    $('#fkHabitacion').on('change', function() {
        var habitacion_id = $(this).val();
        // Cambia la imagen según la opción seleccionada
        $('img[name="ImaHabitacion"]').attr('src', 'imagenes/habitacion_' + habitacion_id + '.jpg');
    });
});