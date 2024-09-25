// Obtener elementos del DOM
const loginBtn = document.getElementById('loginBtn');
const modal = document.getElementById('loginModal');
const closeBtn = document.querySelector('.close');

// Mostrar el modal al hacer clic en el botón "Iniciar Sesión"
loginBtn.addEventListener('click', function() {
    modal.style.display = 'block';
});

// Cerrar el modal al hacer clic en el botón "X"
closeBtn.addEventListener('click', function() {
    modal.style.display = 'none';
});

// Cerrar el modal si el usuario hace clic fuera del contenido del modal
window.addEventListener('click', function(event) {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});

// Obtener elementos del DOM para el modal de registro
const registerBtn = document.getElementById('registerBtn');
const registerModal = document.getElementById('registroModal');
const registerCloseBtn = registerModal.querySelector('.close');

// Abrir modal de registro al hacer clic en el botón "Registrarse"
registerBtn.addEventListener('click', function() {
    registerModal.style.display = 'block';
});

// Cerrar el modal de registro al hacer clic en el botón "X"
registerCloseBtn.addEventListener('click', function() {
    registerModal.style.display = 'none';
});

// Cerrar el modal de registro si el usuario hace clic fuera del contenido del modal
window.addEventListener('click', function(event) {
    if (event.target === registerModal) {
        registerModal.style.display = 'none';
    }
});

// Manejo del formulario de registro y almacenamiento en LocalStorage
const registerForm = document.getElementById('registerForm');
registerForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe

    // Obtener datos del formulario
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Almacenar en LocalStorage
    localStorage.setItem('user', JSON.stringify({
        firstName: firstName,
        lastName: lastName,
        email: email,
        password: password
    }));

    alert('¡Registro exitoso!. Ahora inicia sesión y no te pierdas de lo mejor');
    registerModal.style.display = 'none';
});

// Lógica para iniciar sesión con LocalStorage
const loginForm = document.querySelector('#loginModal form');
loginForm.addEventListener('submit', function(event) {
    event.preventDefault();

    const storedUser = JSON.parse(localStorage.getItem('user'));
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (storedUser && storedUser.email === username && storedUser.password === password) {
        alert('Inicio de sesión exitoso.');
        window.location.href = 'Usuario.php'; // Redirigir a Usuario.php
    } else {
        alert('Usuario y/o contraseña incorrectos.');
    }
});
