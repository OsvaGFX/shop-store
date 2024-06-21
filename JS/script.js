function redirectToProduct(url) {
    window.location.href = url;
}

document.querySelector('.product-img').addEventListener('mousemove', function(e) {
    const img = this.querySelector('img');
    const boundingRect = this.getBoundingClientRect(); // Obtener las dimensiones y posición del contenedor
    const offsetX = e.clientX - boundingRect.left; // Posición X del cursor relativa al contenedor
    const offsetY = e.clientY - boundingRect.top; // Posición Y del cursor relativa al contenedor
    const centerX = boundingRect.width / 2; // Centro X del contenedor
    const centerY = boundingRect.height / 2; // Centro Y del contenedor
    const moveX = (offsetX - centerX) / centerX * 100; // Movimiento en X del cursor relativo al centro
    const moveY = (offsetY - centerY) / centerY * 100; // Movimiento en Y del cursor relativo al centro
    img.style.transform = `scale(2) translate(${moveX}px, ${moveY}px)`;
});

document.querySelector('.product-img').addEventListener('mouseleave', function() {
    const img = this.querySelector('img');
    img.style.transform = 'scale(1)'; // Restaurar el tamaño original cuando el cursor sale del contenedor
});
