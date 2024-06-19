<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicio</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="Resource/Logo.jpg" alt="Logotipo de la Empresa">
        </div>
        <nav class="navbar">
            <ul>
                <input type="text" id="search-input" placeholder="Escribe para buscar...">
                <button onclick="performSearch()" id="button xd">
                    <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/search--v1.png" alt="search--v1"/>
                </button>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="about.html">Nosotros</a></li>
                <li><a href="products.html">Productos</a></li>
                <li><a href="contact.html">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        <!-- Sección del Catálogo -->
        <h2>Catálogo de Productos</h2>
        <div class="catalog">
            <div class="product" onclick="redirectToProduct('Producto1.php')">
                <img src="Resource/Productos/Producto1/1.jpg" alt="Producto1">
                <p>Puma</p>
                <p>Jersey Puma Chivas Local Actual Futbol 2024</p>
            </div>
            <div class="product" onclick="redirectToProduct('producto2.html')">
                <img src="Resource/Productos/Producto1/1.jpg" alt="Producto 2">
                <p>Producto 2</p>
            </div>
            <div class="product" onclick="redirectToProduct('producto3.html')">
                <img src="img/producto3.jpg" alt="Producto 3">
                <p>Producto 3</p>
            </div>
            <div class="product" onclick="redirectToProduct('producto4.html')">
                <img src="img/producto4.jpg" alt="Producto 4">
                <p>Producto 4</p>
            </div>
            <div class="product" onclick="redirectToProduct('producto5.html')">
                <img src="img/producto5.jpg" alt="Producto 5">
                <p>Producto 5</p>
            </div>
            <div class="product" onclick="redirectToProduct('producto6.html')">
                <img src="img/producto6.jpg" alt="Producto 6">
                <p>Producto 6</p>
            </div>
            <div class="product" onclick="redirectToProduct('producto7.html')">
                <img src="img/producto7.jpg" alt="Producto 7">
                <p>Producto 7</p>
            </div>
            <div class="product" onclick="redirectToProduct('producto8.html')">
                <img src="img/producto8.jpg" alt="Producto 8">
                <p>Producto 8</p>
            </div>
        </div>
    </div>
    <script src="JS/script.js"></script>
</body>
</html>
