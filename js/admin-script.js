let notificationCount = 0;
const notificationList = document.getElementById('notification-list');
const notificationIcon = document.getElementById('notification-icon');
const notificationCountDisplay = document.getElementById('notification-count');

// Simular la recepción de una notificación
function receiveNotification(message) {
  // Aumentar el conteo de notificaciones
  notificationCount++;
  notificationCountDisplay.textContent = notificationCount;
  
  // Agregar la notificación a la lista
  const newNotification = document.createElement('li');
  newNotification.textContent = message;
  notificationList.appendChild(newNotification);
}

// Simular recepción de notificaciones desde el localStorage
window.addEventListener('load', () => {
  const storedNotification = localStorage.getItem('newNotification');
  if (storedNotification) {
    receiveNotification(storedNotification);
    localStorage.removeItem('newNotification'); // Eliminar la notificación del almacenamiento
  }
});
