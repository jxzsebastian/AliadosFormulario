
$(document).ready(function() {

    // Selecciona todos los radio buttons
    var radioButtons = $("input[type='radio'][name='ocupacion[]']");

    // Cuando se selecciona un radio button
    radioButtons.on("change", function() {
      // Si hay un radio button seleccionado
      if ($(this).is(":checked")) {
        // Desactiva el input "Otro"
        console.log("enable")
        $('#input-otro').prop('disabled', true);
      } else {
        // Habilita el input "Otro"
        console.log("disable")
        $('#input-otro').prop('disabled', false);
      }
    });
  });
