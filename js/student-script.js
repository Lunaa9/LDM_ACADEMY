// Selecciona el botón de postulación
const postularButton = document.getElementById('postular-btn');  // Asegúrate de que el botón tenga este ID

postularButton.addEventListener('click', function() {
  // Mensaje de notificación
  const notificationMessage = "El estudiante ha enviado una postulación.";

  // Guardar la notificación en el localStorage para que la vea el administrador
  localStorage.setItem('newNotification', notificationMessage);

  // Mostrar alerta confirmando que la notificación fue enviada
  alert('Tu postulación ha sido enviada al administrador.');

  // Aquí puedes agregar cualquier lógica adicional que necesites tras enviar la postulación
});
