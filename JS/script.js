function redirectToProduct(url) {
    window.location.href = url;
}

// Función para cambiar la imagen principal
function changeMainImage(newSrc) {
    const mainImage = document.getElementById('product-image');
    mainImage.src = newSrc;
}

// Añadir eventos de mouseover a las imágenes pequeñas
document.getElementById('prev1').addEventListener('mouseover', function() {
    changeMainImage('https://i5.walmartimages.com.mx/mg/gm/3pp/asr/6a4e2c2c-135a-4dd4-8da5-6b2b112a0aa3.e78ebde377a7be8ef5fdeb1c57900004.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF');
});

document.getElementById('prev2').addEventListener('mouseover', function() {
    changeMainImage('https://i5.walmartimages.com.mx/mg/gm/3pp/asr/157aff4b-02b4-4ae8-8fd6-6990ecdab430.16fa59bbb890387b7ae70587f949410e.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF');
});

document.getElementById('prev3').addEventListener('mouseover', function() {
    changeMainImage('https://i5.walmartimages.com.mx/mg/gm/3pp/asr/411a332f-1629-46ca-b6e6-c403de67c8be.1f2963400200e3c35100b36f67da2941.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF');
});

document.querySelector('.product-img-ind').addEventListener('mousemove', function(e) {
    const img = this.querySelector('img');
    const boundingRect = this.getBoundingClientRect(); // Obtener las dimensiones y posición del contenedor
    const offsetX = e.clientX - boundingRect.left; // Posición X del cursor relativa al contenedor
    const offsetY = e.clientY - boundingRect.top; // Posición Y del cursor relativa al contenedor
    const centerX = boundingRect.width / 2; // Centro X del contenedor
    const centerY = boundingRect.height / 2; // Centro Y del contenedor
    const moveX = (offsetX - centerX) / centerX * 100; // Movimiento en X del cursor relativo al centro
    const moveY = (offsetY - centerY) / centerY * 100; // Movimiento en Y del cursor relativo al centro

    // Invertir los valores para corregir la dirección
    img.style.transform = `scale(2) translate(${-moveX}px, ${-moveY}px)`;
});

document.querySelector('.product-img-ind').addEventListener('mouseleave', function() {
    const img = this.querySelector('img');
    img.style.transform = 'scale(1)'; // Restaurar el tamaño original cuando el cursor sale del contenedor
});
