// Mostrar el nombre de usuario y la foto
window.onload = function() {
    const storedUser = JSON.parse(localStorage.getItem('user'));

    if (storedUser) {
        document.getElementById('userName').innerText = `${storedUser.firstName} ${storedUser.lastName}`;
        // Aquí puedes poner la ruta a la foto de usuario
        document.getElementById('userPhoto').src = 'img/Estilo.jpg'; 
    }

    // Cerrar sesión
    const logoutBtn = document.getElementById('logoutBtn');
    logoutBtn.addEventListener('click', function() {
        localStorage.removeItem('user'); // Eliminar el usuario de localStorage
        window.location.href = 'index.php'; // Redirigir a index.php
    });

    // Generar productos
    const productsContainer = document.getElementById('productsContainer');
    const products = [
        { id: 1, name: 'Top', price: 100 },
        { id: 2, name: 'Top 2', price: 150 },
        { id: 3, name: 'Top 3', price: 200 },
    ];

    products.forEach(product => {
        const card = document.createElement('div');
        card.className = 'card';
        card.innerHTML = `
            <h3>${product.name}</h3>
            <img src="img/Top.jpg" alt="${product.name}">
            <p>Precio: $${product.price}</p>
            <button onclick="addToCart(${product.id})">Comprar</button>
        `;
        productsContainer.appendChild(card);
    });


}

// Función para agregar productos al carrito
function addToCart(productId) {
    alert(`Producto ${productId} agregado al carrito.`);
}


