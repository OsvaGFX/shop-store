function performSearch() {
    const query = document.getElementById('search-input').value.toLowerCase();
    const results = document.getElementById('search-results');

    // Simulación de resultados de búsqueda (deberías reemplazar esto con tu lógica de búsqueda)
    const items = ['Jersey Puma Chivas Local Actual Futbol 2024', 'Artículo 2', 'Artículo 3', 'Artículo 4'];
    const filteredItems = items.filter(item => item.toLowerCase().includes(query));

    results.innerHTML = '';
    if (filteredItems.length === 0) {
        results.innerHTML = '<li>No se encontraron resultados</li>';
    } else {
        filteredItems.forEach(item => {
            const li = document.createElement('li');
            li.textContent = item;
            results.appendChild(li);
        });
    }
}

function redirectToProduct(id) {
    window.location.href = 'producto' + id + '.html';
}
