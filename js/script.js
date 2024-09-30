// Obtener elementos del DOM
const modal = document.getElementById('profileModal'); // El modal del perfil
const openProfileButton = document.getElementById('openProfile'); // La imagen del avatar
const closeModal = document.getElementById('closeModal'); // El botón "X" para cerrar el modal

// Mostrar el modal cuando se hace clic en el avatar
openProfileButton.addEventListener('click', function(event) {
    event.preventDefault(); // Prevenir redireccionamiento por defecto
    modal.style.display = 'flex'; // Mostrar el modal
    document.body.classList.add('modal-active'); // Aplicar efecto de difuminado en el fondo
});

// Cerrar el modal cuando se hace clic en la "X"
closeModal.addEventListener('click', function() {
    modal.style.display = 'none'; // Ocultar el modal
    document.body.classList.remove('modal-active'); // Eliminar efecto de difuminado
});

// Cerrar el modal si se hace clic fuera del contenido del modal
window.addEventListener('click', function(event) {
    if (event.target == modal) {
        modal.style.display = 'none'; // Ocultar el modal si se hace clic fuera
        document.body.classList.remove('modal-active'); // Eliminar el difuminado
    }
});






const notificationBtn = document.getElementById('notification-btn');
const notificationContainer = document.getElementById('notification-container');

// Función para cargar la ventana emergente de notificaciones
notificationBtn.onclick = function() {
    fetch('notificaciones.html')
        .then(response => response.text())
        .then(data => {
            notificationContainer.innerHTML = data;
            document.getElementById('notification-popup').style.display = 'block';
            
            // Agregar evento para cerrar la ventana emergente
            const closeBtn = document.querySelector('.close-btn');
            closeBtn.onclick = function() {
                document.getElementById('notification-popup').style.display = 'none';
            }
        });
}

// Cerrar la ventana emergente si se hace clic fuera del contenido
window.onclick = function(event) {
    if (event.target == document.getElementById('notification-popup')) {
        document.getElementById('notification-popup').style.display = 'none';
    }
}
